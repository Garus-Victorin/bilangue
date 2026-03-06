<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Nombre;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class NombreApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $nombres = Nombre::all();
        return response()->json([
            'success' => true,
            'data' => $nombres
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'francais' => 'required|string|max:255',
            'goun' => 'required|string|max:255',
            'fon' => 'required|string|max:255',
            'yoruba' => 'required|string|max:255',
            'dendi' => 'required|string|max:255',
            'anglais' => 'required|string|max:255',
        ]);

        $nombre = Nombre::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Nombre créé avec succès.',
            'data' => $nombre
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Nombre $nombre): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => $nombre
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Nombre $nombre): JsonResponse
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'francais' => 'required|string|max:255',
            'goun' => 'required|string|max:255',
            'fon' => 'required|string|max:255',
            'yoruba' => 'required|string|max:255',
            'dendi' => 'required|string|max:255',
            'anglais' => 'required|string|max:255',
        ]);

        $nombre->update($validated);

        return response()->json([
            'success' => true,
            'message' => 'Nombre mis à jour avec succès.',
            'data' => $nombre
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nombre $nombre): JsonResponse
    {
        $nombre->delete();

        return response()->json([
            'success' => true,
            'message' => 'Nombre supprimé avec succès.'
        ]);
    }
}
