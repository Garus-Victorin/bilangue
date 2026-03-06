<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PhraseBasique;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class PhraseBasiqueApiController extends Controller
{
    public function index(): JsonResponse
    {
        $phrases = PhraseBasique::all();
        return response()->json(['success' => true, 'data' => $phrases]);
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

        $phrase = PhraseBasique::create($validated);
        return response()->json(['success' => true, 'message' => 'Phrase créée.', 'data' => $phrase], 201);
    }

    public function show(PhraseBasique $phraseBasique): JsonResponse
    {
        return response()->json(['success' => true, 'data' => $phraseBasique]);
    }

    public function update(Request $request, PhraseBasique $phraseBasique): JsonResponse
    {
        $validated = $request->validate([
            'francais' => 'required|string|max:255',
            'goun' => 'required|string|max:255',
            'fon' => 'required|string|max:255',
            'yoruba' => 'required|string|max:255',
            'dendi' => 'required|string|max:255',
            'anglais' => 'required|string|max:255',
        ]);

        $phraseBasique->update($validated);
        return response()->json(['success' => true, 'message' => 'Phrase mise à jour.', 'data' => $phraseBasique]);
    }

    public function destroy(PhraseBasique $phraseBasique): JsonResponse
    {
        $phraseBasique->delete();
        return response()->json(['success' => true, 'message' => 'Phrase supprimée.']);
    }
}
