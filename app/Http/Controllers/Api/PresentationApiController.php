<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Presentation;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class PresentationApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $presentations = Presentation::all();
        return response()->json([
            'success' => true,
            'data' => $presentations
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

        $presentation = Presentation::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Presentation créée avec succès.',
            'data' => $presentation
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Presentation $presentation): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => $presentation
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Presentation $presentation): JsonResponse
    {
        $validated = $request->validate([
            'francais' => 'required|string|max:255',
            'goun' => 'required|string|max:255',
            'fon' => 'required|string|max:255',
            'yoruba' => 'required|string|max:255',
            'dendi' => 'required|string|max:255',
            'anglais' => 'required|string|max:255',
        ]);

        $presentation->update($validated);

        return response()->json([
            'success' => true,
            'message' => 'Presentation mise à jour avec succès.',
            'data' => $presentation
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Presentation $presentation): JsonResponse
    {
        $presentation->delete();

        return response()->json([
            'success' => true,
            'message' => 'Presentation supprimée avec succès.'
        ]);
    }
}
