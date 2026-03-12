<?php

namespace App\Http\Controllers;

use App\Models\ExpressionEcole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExpressionEcoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $expressions = ExpressionEcole::all();
        return view('expressions_ecole.index', compact('expressions'));
    }
    
    /**
     * Display learning view based on user's languages.
     */
    public function learn()
    {
        $expressions = ExpressionEcole::all();
        
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
        
        return view('expressions_ecole.learn', compact('expressions', 'fromColumn', 'toColumn', 'fromLang', 'toLang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('expressions_ecole.create');
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

        ExpressionEcole::create($validated);

        return redirect()
            ->route('expressions_ecole.index')
            ->with('success', 'Expression d\'école créée avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(ExpressionEcole $expressionEcole)
    {
        $previous = ExpressionEcole::where('id_expression_ecole', '<', $expressionEcole->id_expression_ecole)->orderBy('id_expression_ecole', 'desc')->first();
        $next = ExpressionEcole::where('id_expression_ecole', '>', $expressionEcole->id_expression_ecole)->orderBy('id_expression_ecole', 'asc')->first();

        return view('expressions_ecole.show', compact('expressionEcole', 'previous', 'next'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ExpressionEcole $expressionEcole)
    {
        return view('expressions_ecole.edit', compact('expressionEcole'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ExpressionEcole $expressionEcole)
    {
        $validated = $request->validate([
            'francais' => 'required|string|max:255',
            'goun' => 'required|string|max:255',
            'fon' => 'required|string|max:255',
            'yoruba' => 'required|string|max:255',
            'dendi' => 'required|string|max:255',
            'anglais' => 'required|string|max:255',
        ]);

        $expressionEcole->update($validated);

        return redirect()
            ->route('expressions_ecole.index')
            ->with('success', 'Expression d\'école mise à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ExpressionEcole $expressionEcole)
    {
        $expressionEcole->delete();

        return redirect()
            ->route('expressions_ecole.index')
            ->with('success', 'Expression d\'école supprimée avec succès.');
    }
}

