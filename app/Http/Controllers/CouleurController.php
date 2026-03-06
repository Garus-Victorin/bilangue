<?php

namespace App\Http\Controllers;

use App\Models\Couleur;
use Illuminate\Http\Request;

class CouleurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $couleurs = Couleur::all();

        return view('couleurs.index', compact('couleurs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('couleurs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'couleur' => 'required|string|max:255',
            'francais' => 'required|string|max:255',
            'goun' => 'required|string|max:255',
            'fon' => 'required|string|max:255',
            'yoruba' => 'required|string|max:255',
            'dendi' => 'required|string|max:255',
            'anglais' => 'required|string|max:255',
            'typecouleur' => 'nullable|string|max:255',
        ]);

        Couleur::create($validated);

        return redirect()
            ->route('couleurs.index')
            ->with('success', 'Couleur créée avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Couleur $couleur)
    {
        $previous = Couleur::where('id_couleur', '<', $couleur->id_couleur)->orderBy('id_couleur', 'desc')->first();
        $next = Couleur::where('id_couleur', '>', $couleur->id_couleur)->orderBy('id_couleur', 'asc')->first();

        return view('couleurs.show', compact('couleur', 'previous', 'next'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Couleur $couleur)
    {
        return view('couleurs.edit', compact('couleur'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Couleur $couleur)
    {
        $validated = $request->validate([
            'couleur' => 'required|string|max:255',
            'francais' => 'required|string|max:255',
            'goun' => 'required|string|max:255',
            'fon' => 'required|string|max:255',
            'yoruba' => 'required|string|max:255',
            'dendi' => 'required|string|max:255',
            'anglais' => 'required|string|max:255',
            'typecouleur' => 'nullable|string|max:255',
        ]);

        $couleur->update($validated);

        return redirect()
            ->route('couleurs.index')
            ->with('success', 'Couleur mise à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Couleur $couleur)
    {
        $couleur->delete();

        return redirect()
            ->route('couleurs.index')
            ->with('success', 'Couleur supprimée avec succès.');
    }
}
