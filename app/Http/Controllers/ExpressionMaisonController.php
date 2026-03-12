<?php

namespace App\Http\Controllers;

use App\Models\ExpressionMaison;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExpressionMaisonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $expressions = ExpressionMaison::all();
        return view('expressions_maison.index', compact('expressions'));
    }
    
    /**
     * Display learning view based on user's languages.
     */
    public function learn()
    {
        $expressions = ExpressionMaison::all();
        
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
        
        return view('expressions_maison.learn', compact('expressions', 'fromColumn', 'toColumn', 'fromLang', 'toLang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('expressions_maison.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'francais' => 'required|string|max:255',
            'goun' => 'required|string|max:255',
            'fon' => 'required|string|max:255',
            'yoruba' => 'required|string|max:255',
            'dendi' => 'required|string|max:255',
            'anglais' => 'required|string|max:255',
        ]);

        ExpressionMaison::create($validated);

        return redirect()
            ->route('expressions_maison.index')
            ->with('success', 'Expression maison créée avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(ExpressionMaison $expressionMaison)
    {
        $previous = ExpressionMaison::where('id_expression_maison', '<', $expressionMaison->id_expression_maison)->orderBy('id_expression_maison', 'desc')->first();
        $next = ExpressionMaison::where('id_expression_maison', '>', $expressionMaison->id_expression_maison)->orderBy('id_expression_maison', 'asc')->first();

        return view('expressions_maison.show', compact('expressionMaison', 'previous', 'next'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ExpressionMaison $expressionMaison)
    {
        return view('expressions_maison.edit', compact('expressionMaison'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ExpressionMaison $expressionMaison)
    {
        $validated = $request->validate([
            'francais' => 'required|string|max:255',
            'goun' => 'required|string|max:255',
            'fon' => 'required|string|max:255',
            'yoruba' => 'required|string|max:255',
            'dendi' => 'required|string|max:255',
            'anglais' => 'required|string|max:255',
        ]);

        $expressionMaison->update($validated);

        return redirect()
            ->route('expressions_maison.index')
            ->with('success', 'Expression maison mise à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ExpressionMaison $expressionMaison)
    {
        $expressionMaison->delete();

        return redirect()
            ->route('expressions_maison.index')
            ->with('success', 'Expression maison supprimée avec succès.');
    }
}

