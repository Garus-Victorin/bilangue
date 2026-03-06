<?php

namespace App\Http\Controllers;

use App\Models\ExpressionMaison;
use App\Http\Requests\StoreExpressionMaisonRequest;
use Illuminate\Http\Request;

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
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('expressions_maison.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreExpressionMaisonRequest $request)
    {
        ExpressionMaison::create($request->validated());

        return redirect()->route('expressions_maison.index')->with('success', 'Expression à la maison créée avec succès.');
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
    public function update(StoreExpressionMaisonRequest $request, ExpressionMaison $expressionMaison)
    {
        $expressionMaison->update($request->validated());

        return redirect()->route('expressions_maison.index')->with('success', 'Expression à la maison mise à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ExpressionMaison $expressionMaison)
    {
        $expressionMaison->delete();

        return redirect()->route('expressions_maison.index')->with('success', 'Expression à la maison supprimée avec succès.');
    }
}
