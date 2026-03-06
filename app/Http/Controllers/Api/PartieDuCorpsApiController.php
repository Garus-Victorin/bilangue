<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PartieDuCorps;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class PartieDuCorpsApiController extends Controller
{
    public function index(): JsonResponse
    {
        $parties = PartieDuCorps::all();
        return response()->json(['success' => true, 'data' => $parties]);
    }

    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'image' => 'nullable|string',
            'francais' => 'required|string|max:255',
            'goun' => 'required|string|max:255',
            'fon' => 'required|string|max:255',
            'yoruba' => 'required|string|max:255',
            'dendi' => 'required|string|max:255',
            'anglais' => 'required|string|max:255',
        ]);

        $partie = PartieDuCorps::create($validated);
        return response()->json(['success' => true, 'message' => 'Partie du corps créée.', 'data' => $partie], 201);
    }

    public function show(PartieDuCorps $partiesDuCorps): JsonResponse
    {
        return response()->json(['success' => true, 'data' => $partiesDuCorps]);
    }

    public function update(Request $request, PartieDuCorps $partiesDuCorps): JsonResponse
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'image' => 'nullable|string',
            'francais' => 'required|string|max:255',
            'goun' => 'required|string|max:255',
            'fon' => 'required|string|max:255',
            'yoruba' => 'required|string|max:255',
            'dendi' => 'required|string|max:255',
            'anglais' => 'required|string|max:255',
        ]);

        $partiesDuCorps->update($validated);
        return response()->json(['success' => true, 'message' => 'Partie du corps mise à jour.', 'data' => $partiesDuCorps]);
    }

    public function destroy(PartieDuCorps $partiesDuCorps): JsonResponse
    {
        $partiesDuCorps->delete();
        return response()->json(['success' => true, 'message' => 'Partie du corps supprimée.']);
    }
}
