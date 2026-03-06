<?php

namespace App\Http\Controllers;

use App\Models\ExpressionBasique;
use App\Http\Requests\StoreExpressionBasiqueRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('expressions_basiques.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreExpressionBasiqueRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('expressions_basiques', 'public');
        }

        ExpressionBasique::create($data);

        return redirect()->route('expressions_basiques.index')->with('success', 'Expression basique créée avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(ExpressionBasique $expressionBasique)
    {
        $previous = ExpressionBasique::where('id_expression_basique', '<', (int)$expressionBasique->id_expression_basique)->orderBy('id_expression_basique', 'desc')->first();
        $next = ExpressionBasique::where('id_expression_basique', '>', (int)$expressionBasique->id_expression_basique)->orderBy('id_expression_basique', 'asc')->first();
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
    public function update(StoreExpressionBasiqueRequest $request, ExpressionBasique $expressionBasique)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            // Supprimer l'ancienne image si elle existe
            if ($expressionBasique->image) {
                Storage::disk('public')->delete($expressionBasique->image);
            }
            $data['image'] = $request->file('image')->store('expressions_basiques', 'public');
        }

        $expressionBasique->update($data);

        return redirect()->route('expressions_basiques.index')->with('success', 'Expression basique mise à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ExpressionBasique $expressionBasique)
    {
        // Supprimer l'image si elle existe et est un fichier local
        if ($expressionBasique->image && !filter_var($expressionBasique->image, FILTER_VALIDATE_URL)) {
            Storage::disk('public')->delete($expressionBasique->image);
        }

        $expressionBasique->delete();

        return redirect()->route('expressions_basiques.index')->with('success', 'Expression basique supprimée avec succès.');
    }
}
