<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class ProduitApiController extends Controller
{
    public function index(): JsonResponse
    {
        $produits = Produit::all();
        return response()->json(['success' => true, 'data' => $produits]);
    }

    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'produit' => 'required|string|max:255',
            'francais' => 'required|string|max:255',
            'goun' => 'required|string|max:255',
            'fon' => 'required|string|max:255',
            'yoruba' => 'required|string|max:255',
            'dendi' => 'required|string|max:255',
            'anglais' => 'required|string|max:255',
        ]);

        $produit = Produit::create($validated);
        return response()->json(['success' => true, 'message' => 'Produit créé.', 'data' => $produit], 201);
    }

    public function show(Produit $produit): JsonResponse
    {
        return response()->json(['success' => true, 'data' => $produit]);
    }

    public function update(Request $request, Produit $produit): JsonResponse
    {
        $validated = $request->validate([
            'produit' => 'required|string|max:255',
            'francais' => 'required|string|max:255',
            'goun' => 'required|string|max:255',
            'fon' => 'required|string|max:255',
            'yoruba' => 'required|string|max:255',
            'dendi' => 'required|string|max:255',
            'anglais' => 'required|string|max:255',
        ]);

        $produit->update($validated);
        return response()->json(['success' => true, 'message' => 'Produit mis à jour.', 'data' => $produit]);
    }

    public function destroy(Produit $produit): JsonResponse
    {
        $produit->delete();
        return response()->json(['success' => true, 'message' => 'Produit supprimé.']);
    }
}
