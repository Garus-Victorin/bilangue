<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ExpressionEcole;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class ExpressionEcoleApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $expressions = ExpressionEcole::all();
        return response()->json([
            'success' => true,
            'data' => $expressions
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

        $expression = ExpressionEcole::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Expression d\'école créée avec succès.',
            'data' => $expression
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(ExpressionEcole $expressionsEcole): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => $expressionsEcole
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ExpressionEcole $expressionsEcole): JsonResponse
    {
        $validated = $request->validate([
            'francais' => 'required|string|max:255',
            'goun' => 'required|string|max:255',
            'fon' => 'required|string|max:255',
            'yoruba' => 'required|string|max:255',
            'dendi' => 'required|string|max:255',
            'anglais' => 'required|string|max:255',
        ]);

        $expressionsEcole->update($validated);

        return response()->json([
            'success' => true,
            'message' => 'Expression d\'école mise à jour avec succès.',
            'data' => $expressionsEcole
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ExpressionEcole $expressionsEcole): JsonResponse
    {
        $expressionsEcole->delete();

        return response()->json([
            'success' => true,
            'message' => 'Expression d\'école supprimée avec succès.'
        ]);
    }
}
