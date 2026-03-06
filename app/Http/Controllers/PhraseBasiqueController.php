<?php

namespace App\Http\Controllers;

use App\Models\PhraseBasique;
use App\Http\Requests\StorePhraseBasiqueRequest;
use Illuminate\Http\Request;

class PhraseBasiqueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $phrasesBasiques = PhraseBasique::all();

        return view('phrases_basiques.index', compact('phrasesBasiques'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('phrases_basiques.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePhraseBasiqueRequest $request)
    {
        PhraseBasique::create($request->validated());

        return redirect()
            ->route('phrases_basiques.index')
            ->with('success', 'Phrase basique créée avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(PhraseBasique $phraseBasique)
    {
        $previous = PhraseBasique::where('id_phrase_basique', '<', $phraseBasique->id_phrase_basique)->orderBy('id_phrase_basique', 'desc')->first();
        $next = PhraseBasique::where('id_phrase_basique', '>', $phraseBasique->id_phrase_basique)->orderBy('id_phrase_basique', 'asc')->first();

        return view('phrases_basiques.show', compact('phraseBasique', 'previous', 'next'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PhraseBasique $phraseBasique)
    {
        return view('phrases_basiques.edit', compact('phraseBasique'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StorePhraseBasiqueRequest $request, PhraseBasique $phraseBasique)
    {
        $phraseBasique->update($request->validated());

        return redirect()
            ->route('phrases_basiques.index')
            ->with('success', 'Phrase basique mise à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PhraseBasique $phraseBasique)
    {
        $phraseBasique->delete();

        return redirect()
            ->route('phrases_basiques.index')
            ->with('success', 'Phrase basique supprimée avec succès.');
    }
}
