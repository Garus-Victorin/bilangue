<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ExpressionMaison;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class ExpressionMaisonApiController extends Controller
{
    public function index(): JsonResponse
    {
        $expressions = ExpressionMaison::all();
        return response()->json(['success' => true, 'data' => $expressions]);
    }

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

        $expression = ExpressionMaison::create($validated);
        return response()->json(['success' => true, 'message' => 'Expression maison créée avec succès.', 'data' => $expression], 201);
    }

    public function show(ExpressionMaison $expressionsMaison): JsonResponse
    {
        return response()->json(['success' => true, 'data' => $expressionsMaison]);
    }

    public function update(Request $request, ExpressionMaison $expressionsMaison): JsonResponse
    {
        $validated = $request->validate([
            'francais' => 'required|string|max:255',
            'goun' => 'required|string|max:255',
            'fon' => 'required|string|max:255',
            'yoruba' => 'required|string|max:255',
            'dendi' => 'required|string|max:255',
            'anglais' => 'required|string|max:255',
        ]);

        $expressionsMaison->update($validated);
        return response()->json(['success' => true, 'message' => 'Expression maison mise à jour.', 'data' => $expressionsMaison]);
    }

    public function destroy(ExpressionMaison $expressionsMaison): JsonResponse
    {
        $expressionsMaison->delete();
        return response()->json(['success' => true, 'message' => 'Expression maison supprimée.']);
    }
}
