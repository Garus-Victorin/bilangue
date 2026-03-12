<?php

namespace App\Http\Controllers;

use App\Models\ExpressionBasique;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExpressionBasiqueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $expressions = ExpressionBasique::all();
        return view('expressions_basiques.index', compact('expressions'));
    }
    
    /**
     * Display learning view based on user's languages.
     */
    public function learn()
    {
        $expressions = ExpressionBasique::all();
        
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
        
        return view('expressions_basiques.learn', compact('expressions', 'fromColumn', 'toColumn', 'fromLang', 'toLang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('expressions_basiques.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
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

        ExpressionBasique::create($validated);

        return redirect()
            ->route('expressions_basiques.index')
            ->with('success', 'Expression basique créée avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(ExpressionBasique $expressionBasique)
    {
        $previous = ExpressionBasique::where('id', '<', $expressionBasique->id)->orderBy('id', 'desc')->first();
        $next = ExpressionBasique::where('id', '>', $expressionBasique->id)->orderBy('id', 'asc')->first();

        return view('expressions_basiques.show', compact('expressionBasique', 'previous', 'next'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ExpressionBasique $expressionBasique)
    {
        return view('expressions_basiques.edit', compact('expressionBasique'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ExpressionBasique $expressionBasique)
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

        $expressionBasique->update($validated);

        return redirect()
            ->route('expressions_basiques.index')
            ->with('success', 'Expression basique mise à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ExpressionBasique $expressionBasique)
    {
        $expressionBasique->delete();

        return redirect()
            ->route('expressions_basiques.index')
            ->with('success', 'Expression basique supprimée avec succès.');
    }
}

