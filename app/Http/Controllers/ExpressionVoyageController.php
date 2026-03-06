<?php

namespace App\Http\Controllers;

use App\Models\ExpressionVoyage;
use App\Http\Requests\StoreExpressionVoyageRequest;
use Illuminate\Http\Request;

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
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('expressions_voyage.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreExpressionVoyageRequest $request)
    {
        $data = $request->validated();

        ExpressionVoyage::create($data);

        return redirect()->route('expressions_voyage.index')->with('success', 'Expression de voyage créée avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(ExpressionVoyage $expressionVoyage)
    {
        $previous = ExpressionVoyage::where('id_expression_voyage', '<', (int)$expressionVoyage->id_expression_voyage)->orderBy('id_expression_voyage', 'desc')->first();
        $next = ExpressionVoyage::where('id_expression_voyage', '>', (int)$expressionVoyage->id_expression_voyage)->orderBy('id_expression_voyage', 'asc')->first();
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
    public function update(StoreExpressionVoyageRequest $request, ExpressionVoyage $expressionVoyage)
    {
        $data = $request->validated();

        $expressionVoyage->update($data);

        return redirect()->route('expressions_voyage.index')->with('success', 'Expression de voyage mise à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ExpressionVoyage $expressionVoyage)
    {
        $expressionVoyage->delete();

        return redirect()->route('expressions_voyage.index')->with('success', 'Expression de voyage supprimée avec succès.');
    }
}
