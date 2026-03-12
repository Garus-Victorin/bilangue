<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    /**
     * Show the registration form (Step 1).
     */
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    /**
     * Handle a registration request (Step 1).
     */
    public function register(Request $request)
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

        // Connect the user
        Auth::login($user);

        // Redirect to language selection (Step 2)
        return redirect('/register/langue-parlee')->with('success', 'Compte créé! Maintenant choisir vos langues.');
    }

    /**
     * Show the spoken language selection form (Step 2a).
     */
    public function showLangueParleeForm()
    {
        return view('auth.langue-parlee');
    }

    /**
     * Save spoken language and go to step 2b.
     */
    public function saveLangueParlee(Request $request)
    {
        $validated = $request->validate([
            'langue_parlee' => 'required|in:francais,anglais',
        ]);

        $user = Auth::user();
        $user->update([
            'langue_parlee' => $validated['langue_parlee'],
        ]);

        // Redirect to language to learn selection
        return redirect('/register/langue-apprendre');
    }

    /**
     * Show the language to learn selection form (Step 2b).
     */
    public function showLangueApprendreForm()
    {
        return view('auth.langue-apprendre');
    }

    /**
     * Save language to learn (Final step).
     */
    public function saveLangueApprendre(Request $request)
    {
        $validated = $request->validate([
            'langue_apprendre' => 'required|in:fon,goun,youba,dendi,bariba,yoruba',
        ]);

        $user = Auth::user();
        $user->update([
            'langue_apprendre' => $validated['langue_apprendre'],
        ]);

        return redirect('/home')->with('success', 'Langues enregistrées avec succès!');
    }
}
