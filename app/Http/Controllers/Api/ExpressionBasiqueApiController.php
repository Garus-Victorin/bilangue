<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ExpressionBasique;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class ExpressionBasiqueApiController extends Controller
{
    public function index(): JsonResponse
    {
        $expressions = ExpressionBasique::all();
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

        $expression = ExpressionBasique::create($validated);
        return response()->json(['success' => true, 'message' => 'Expression créée.', 'data' => $expression], 201);
    }

    public function show(ExpressionBasique $expressionBasique): JsonResponse
    {
        return response()->json(['success' => true, 'data' => $expressionBasique]);
    }

    public function update(Request $request, ExpressionBasique $expressionBasique): JsonResponse
    {
        $validated = $request->validate([
            'francais' => 'required|string|max:255',
            'goun' => 'required|string|max:255',
            'fon' => 'required|string|max:255',
            'yoruba' => 'required|string|max:255',
            'dendi' => 'required|string|max:255',
            'anglais' => 'required|string|max:255',
        ]);

        $expressionBasique->update($validated);
        return response()->json(['success' => true, 'message' => 'Expression mise à jour.', 'data' => $expressionBasique]);
    }

    public function destroy(ExpressionBasique $expressionBasique): JsonResponse
    {
        $expressionBasique->delete();
        return response()->json(['success' => true, 'message' => 'Expression supprimée.']);
    }
}
