<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Couleur;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class CouleurApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $couleurs = Couleur::all();
        return response()->json([
            'success' => true,
            'data' => $couleurs
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'couleur' => 'required|string|max:255',
            'francais' => 'required|string|max:255',
            'goun' => 'required|string|max:255',
            'fon' => 'required|string|max:255',
            'yoruba' => 'required|string|max:255',
            'dendi' => 'required|string|max:255',
            'anglais' => 'required|string|max:255',
            'typecouleur' => 'nullable|string|max:255',
        ]);

        $couleur = Couleur::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Couleur créée avec succès.',
            'data' => $couleur
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Couleur $couleur): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => $couleur
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Couleur $couleur): JsonResponse
    {
        $validated = $request->validate([
            'couleur' => 'required|string|max:255',
            'francais' => 'required|string|max:255',
            'goun' => 'required|string|max:255',
            'fon' => 'required|string|max:255',
            'yoruba' => 'required|string|max:255',
            'dendi' => 'required|string|max:255',
            'anglais' => 'required|string|max:255',
            'typecouleur' => 'nullable|string|max:255',
        ]);

        $couleur->update($validated);

        return response()->json([
            'success' => true,
            'message' => 'Couleur mise à jour avec succès.',
            'data' => $couleur
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Couleur $couleur): JsonResponse
    {
        $couleur->delete();

        return response()->json([
            'success' => true,
            'message' => 'Couleur supprimée avec succès.'
        ]);
    }
}
