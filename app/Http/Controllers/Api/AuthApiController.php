<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthApiController extends Controller
{
    /**
     * Register a new user.
     * POST /api/register
     */
    public function register(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'nom' => $validated['nom'],
            'prenom' => $validated['prenom'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'status' => 'offline',
            'type' => 'user',
        ]);

        // Create simple API token
        $token = base64_encode(random_bytes(40));
        $user->api_token = $token;
        $user->save();

        return response()->json([
            'success' => true,
            'message' => 'Compte créé avec succès.',
            'data' => [
                'user' => $user,
                'token' => $token
            ]
        ], 201);
    }

    /**
     * Login user.
     * POST /api/login
     */
    public function login(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $validated['email'])->first();

        if (!$user || !Hash::check($validated['password'], $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['Les identifiants ne correspondent pas.'],
            ]);
        }

        // Update status to online
        $user->status = 'online';
        
        // Create simple API token
        $token = base64_encode(random_bytes(40));
        $user->api_token = $token;
        $user->save();

        return response()->json([
            'success' => true,
            'message' => 'Connexion réussie.',
            'data' => [
                'user' => $user,
                'token' => $token
            ]
        ]);
    }

    /**
     * Logout user.
     * POST /api/logout
     */
    public function logout(Request $request): JsonResponse
    {
        // Get token from header
        $token = $request->header('Authorization');
        
        if ($token) {
            $token = str_replace('Bearer ', '', $token);
            $user = User::where('api_token', $token)->first();
            
            if ($user) {
                $user->status = 'offline';
                $user->api_token = null;
                $user->save();
            }
        }

        return response()->json([
            'success' => true,
            'message' => 'Déconnexion réussie.'
        ]);
    }

    /**
     * Get authenticated user.
     * GET /api/user
     */
    public function user(Request $request): JsonResponse
    {
        $user = $this->getAuthenticatedUser($request);
        
        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'Non authentifié.'
            ], 401);
        }

        return response()->json([
            'success' => true,
            'data' => $user
        ]);
    }

    /**
     * Update user profile.
     * PUT /api/user
     */
    public function updateProfile(Request $request): JsonResponse
    {
        $user = $this->getAuthenticatedUser($request);
        
        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'Non authentifié.'
            ], 401);
        }

        $validated = $request->validate([
            'nom' => 'sometimes|string|max:255',
            'prenom' => 'sometimes|string|max:255',
            'email' => 'sometimes|string|email|max:255|unique:users,email,' . $user->id,
        ]);

        $user->update($validated);

        return response()->json([
            'success' => true,
            'message' => 'Profil mis à jour avec succès.',
            'data' => $user
        ]);
    }

    /**
     * Update password.
     * PUT /api/password
     */
    public function updatePassword(Request $request): JsonResponse
    {
        $user = $this->getAuthenticatedUser($request);
        
        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'Non authentifié.'
            ], 401);
        }

        $validated = $request->validate([
            'current_password' => 'required',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if (!Hash::check($validated['current_password'], $user->password)) {
            throw ValidationException::withMessages([
                'current_password' => ['Le mot de passe actuel est incorrect.'],
            ]);
        }

        $user->update([
            'password' => Hash::make($validated['password'])
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Mot de passe mis à jour avec succès.'
        ]);
    }

    /**
     * Save language selections.
     * PUT /api/langues
     */
    public function saveLanguages(Request $request): JsonResponse
    {
        $user = $this->getAuthenticatedUser($request);
        
        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'Non authentifié.'
            ], 401);
        }

        $validated = $request->validate([
            'langue_parlee' => 'required|in:francais,anglais',
            'langue_apprendre' => 'required|in:fon,goun,youba,dendi,bariba,yoruba',
        ]);

        $user->update([
            'langue_parlee' => $validated['langue_parlee'],
            'langue_apprendre' => $validated['langue_apprendre'],
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Langues enregistrées avec succès.',
            'data' => [
                'langue_parlee' => $user->langue_parlee,
                'langue_apprendre' => $user->langue_apprendre,
            ]
        ]);
    }

    /**
     * Helper: Get authenticated user from token
     */
    private function getAuthenticatedUser(Request $request)
    {
        $token = $request->header('Authorization');
        
        if (!$token) {
            return null;
        }

        $token = str_replace('Bearer ', '', $token);
        return User::where('api_token', $token)->first();
    }
}
