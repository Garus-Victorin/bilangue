<?php

namespace App\Http\Controllers;

use App\Models\ExpressionVoyage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExpressionVoyageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $expressions = ExpressionVoyage::all();
        return view('expressions_voyage.index', compact('expressions'));
    }
    
    /**
     * Display learning view based on user's languages.
     */
    public function learn()
    {
        $expressions = ExpressionVoyage::all();
        
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
        
        return view('expressions_voyage.learn', compact('expressions', 'fromColumn', 'toColumn', 'fromLang', 'toLang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('expressions_voyage.create');
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
            'emoji' => 'nullable|string|max:10',
        ]);

        ExpressionVoyage::create($validated);

        return redirect()
            ->route('expressions_voyage.index')
            ->with('success', 'Expression voyage créée avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(ExpressionVoyage $expressionVoyage)
    {
        $previous = ExpressionVoyage::where('id_expression_voyage', '<', $expressionVoyage->id_expression_voyage)->orderBy('id_expression_voyage', 'desc')->first();
        $next = ExpressionVoyage::where('id_expression_voyage', '>', $expressionVoyage->id_expression_voyage)->orderBy('id_expression_voyage', 'asc')->first();

        return view('expressions_voyage.show', compact('expressionVoyage', 'previous', 'next'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ExpressionVoyage $expressionVoyage)
    {
        return view('expressions_voyage.edit', compact('expressionVoyage'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ExpressionVoyage $expressionVoyage)
    {
        $validated = $request->validate([
            'francais' => 'required|string|max:255',
            'goun' => 'required|string|max:255',
            'fon' => 'required|string|max:255',
            'yoruba' => 'required|string|max:255',
            'dendi' => 'required|string|max:255',
            'anglais' => 'required|string|max:255',
            'emoji' => 'nullable|string|max:10',
        ]);

        $expressionVoyage->update($validated);

        return redirect()
            ->route('expressions_voyage.index')
            ->with('success', 'Expression voyage mise à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ExpressionVoyage $expressionVoyage)
    {
        $expressionVoyage->delete();

        return redirect()
            ->route('expressions_voyage.index')
            ->with('success', 'Expression voyage supprimée avec succès.');
    }
}

