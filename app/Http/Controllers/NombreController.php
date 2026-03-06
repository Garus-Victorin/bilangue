<?php

namespace App\Http\Controllers;

use App\Models\Nombre;
use Illuminate\Http\Request;

class NombreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nombres = Nombre::all();

        return view('nombres.index', compact('nombres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('nombres.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|integer',
            'francais' => 'required|string|max:255',
            'goun' => 'required|string|max:255',
            'fon' => 'required|string|max:255',
            'yoruba' => 'required|string|max:255',
            'dendi' => 'required|string|max:255',
            'anglais' => 'required|string|max:255',
        ]);

        Nombre::create($validated);

        return redirect()
            ->route('nombres.index')
            ->with('success', 'Nombre créé avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Nombre $nombre)
    {
        $previous = Nombre::where('id_nombre', '<', $nombre->id_nombre)->orderBy('id_nombre', 'desc')->first();
        $next = Nombre::where('id_nombre', '>', $nombre->id_nombre)->orderBy('id_nombre', 'asc')->first();

        return view('nombres.show', compact('nombre', 'previous', 'next'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Nombre $nombre)
    {
        return view('nombres.edit', compact('nombre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Nombre $nombre)
    {
        $validated = $request->validate([
            'nombre' => 'required|integer',
            'francais' => 'required|string|max:255',
            'goun' => 'required|string|max:255',
            'fon' => 'required|string|max:255',
            'yoruba' => 'required|string|max:255',
            'dendi' => 'required|string|max:255',
            'anglais' => 'required|string|max:255',
        ]);

        $nombre->update($validated);

        return redirect()
            ->route('nombres.index')
            ->with('success', 'Nombre mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nombre $nombre)
    {
        $nombre->delete();

        return redirect()
            ->route('nombres.index')
            ->with('success', 'Nombre supprimé avec succès.');
    }
}
