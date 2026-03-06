<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\DemandeAide;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class DemandeAideApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $demandes = DemandeAide::all();
        return response()->json([
            'success' => true,
            'data' => $demandes
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'francais' => 'required|string|max:255',
            'goun' => 'required|string|max:255',
            'fon' => 'required|string|max:255',
            'yoruba' => 'required|string|max:255',
            'dendi' => 'required|string|max:255',
            'anglais' => 'required|string|max:255',
        ]);

        $demande = DemandeAide::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Demande d\'aide créée avec succès.',
            'data' => $demande
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(DemandeAide $demandesAide): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => $demandesAide
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DemandeAide $demandesAide): JsonResponse
    {
        $validated = $request->validate([
            'francais' => 'required|string|max:255',
            'goun' => 'required|string|max:255',
            'fon' => 'required|string|max:255',
            'yoruba' => 'required|string|max:255',
            'dendi' => 'required|string|max:255',
            'anglais' => 'required|string|max:255',
        ]);

        $demandesAide->update($validated);

        return response()->json([
            'success' => true,
            'message' => 'Demande d\'aide mise à jour avec succès.',
            'data' => $demandesAide
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DemandeAide $demandesAide): JsonResponse
    {
        $demandesAide->delete();

        return response()->json([
            'success' => true,
            'message' => 'Demande d\'aide supprimée avec succès.'
        ]);
    }
}
