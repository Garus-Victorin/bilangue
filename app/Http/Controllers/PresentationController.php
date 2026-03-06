<?php

namespace App\Http\Controllers;

use App\Models\Presentation;
use App\Http\Requests\StorePresentationRequest;
use App\Http\Requests\UpdatePresentationRequest;
use Illuminate\Http\Request;

class PresentationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $presentations = Presentation::all();

        return view('presentations.index', compact('presentations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('presentations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePresentationRequest $request)
    {
        Presentation::create($request->validated());

        return redirect()
            ->route('presentations.index')
            ->with('success', 'Présentation créée avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Presentation $presentation)
    {
        $previous = Presentation::where('id_presentation', '<', $presentation->id_presentation)->orderBy('id_presentation', 'desc')->first();
        $next = Presentation::where('id_presentation', '>', $presentation->id_presentation)->orderBy('id_presentation', 'asc')->first();

        return view('presentations.show', compact('presentation', 'previous', 'next'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Presentation $presentation)
    {
        return view('presentations.edit', compact('presentation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePresentationRequest $request, Presentation $presentation)
    {
        $presentation->update($request->validated());

        return redirect()
            ->route('presentations.index')
            ->with('success', 'Présentation mise à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Presentation $presentation)
    {
        $presentation->delete();

        return redirect()
            ->route('presentations.index')
            ->with('success', 'Présentation supprimée avec succès.');
    }
}
