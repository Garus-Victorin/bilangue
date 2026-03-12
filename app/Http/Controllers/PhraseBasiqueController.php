<?php

namespace App\Http\Controllers;

use App\Models\PhraseBasique;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PhraseBasiqueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $phrases = PhraseBasique::all();
        return view('phrases_basiques.index', compact('phrases'));
    }
    
    /**
     * Display learning view based on user's languages.
     */
    public function learn()
    {
        $phrases = PhraseBasique::all();
        
        $user = Auth::user();
        $fromLang = $user->langue_parlee ?? 'francais';
        $toLang = $user->langue_apprendre ?? 'fon';
        
        // Map language keys to column names
        $langMap = [
            'francais' => 'francais',
            'anglais' => 'anglais',
            'fon' => 'fon',
            'goun' => 'goun',
            'youba' => 'youba',
            'dendi' => 'dendi',
            'bariba' => 'bariba',
            'yoruba' => 'yoruba'
        ];
        
        $fromColumn = $langMap[$fromLang] ?? 'francais';
        $toColumn = $langMap[$toLang] ?? 'fon';
        
        return view('phrases_basiques.learn', compact('phrases', 'fromColumn', 'toColumn', 'fromLang', 'toLang'));
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
    public function store(Request $request)
    {
        $validated = $request->validate([
            'phrase' => 'required|string|max:255',
            'francais' => 'required|string|max:255',
            'goun' => 'required|string|max:255',
            'fon' => 'required|string|max:255',
            'yoruba' => 'required|string|max:255',
            'dendi' => 'required|string|max:255',
            'anglais' => 'required|string|max:255',
        ]);

        PhraseBasique::create($validated);

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
    public function update(Request $request, PhraseBasique $phraseBasique)
    {
        $validated = $request->validate([
            'phrase' => 'required|string|max:255',
            'francais' => 'required|string|max:255',
            'goun' => 'required|string|max:255',
            'fon' => 'required|string|max:255',
            'yoruba' => 'required|string|max:255',
            'dendi' => 'required|string|max:255',
            'anglais' => 'required|string|max:255',
        ]);

        $phraseBasique->update($validated);

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

