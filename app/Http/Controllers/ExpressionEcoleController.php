<?php

namespace App\Http\Controllers;

use App\Models\ExpressionEcole;
use App\Http\Requests\StoreExpressionEcoleRequest;
use Illuminate\Http\Request;

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
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('expressions_ecole.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreExpressionEcoleRequest $request)
    {
        ExpressionEcole::create($request->validated());

        return redirect()->route('expressions_ecole.index')->with('success', 'Expression scolaire créée avec succès.');
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
    public function update(StoreExpressionEcoleRequest $request, ExpressionEcole $expressionEcole)
    {
        $expressionEcole->update($request->validated());

        return redirect()->route('expressions_ecole.index')->with('success', 'Expression scolaire mise à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ExpressionEcole $expressionEcole)
    {
        $expressionEcole->delete();

        return redirect()->route('expressions_ecole.index')->with('success', 'Expression scolaire supprimée avec succès.');
    }
}
