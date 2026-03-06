<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Salutation;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class SalutationApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $salutations = Salutation::all();
        return response()->json([
            'success' => true,
            'data' => $salutations
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
            'bariba' => 'required|string|max:255',
        ]);

        $salutation = Salutation::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Salutation créée avec succès.',
            'data' => $salutation
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Salutation $salutation): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => $salutation
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Salutation $salutation): JsonResponse
    {
        $validated = $request->validate([
            'francais' => 'required|string|max:255',
            'goun' => 'required|string|max:255',
            'fon' => 'required|string|max:255',
            'yoruba' => 'required|string|max:255',
            'dendi' => 'required|string|max:255',
            'anglais' => 'required|string|max:255',
            'bariba' => 'required|string|max:255',
        ]);

        $salutation->update($validated);

        return response()->json([
            'success' => true,
            'message' => 'Salutation mise à jour avec succès.',
            'data' => $salutation
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Salutation $salutation): JsonResponse
    {
        $salutation->delete();

        return response()->json([
            'success' => true,
            'message' => 'Salutation supprimée avec succès.'
        ]);
    }
}
