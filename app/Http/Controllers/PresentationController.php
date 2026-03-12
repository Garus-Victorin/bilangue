<?php

namespace App\Http\Controllers;

use App\Models\Presentation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
     * Display learning view based on user's languages.
     */
    public function learn()
    {
        $presentations = Presentation::all();
        
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
        
        return view('presentations.learn', compact('presentations', 'fromColumn', 'toColumn', 'fromLang', 'toLang'));
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
    public function store(Request $request)
    {
        $validated = $request->validate([
            'presentation' => 'required|string|max:255',
            'francais' => 'required|string|max:255',
            'goun' => 'required|string|max:255',
            'fon' => 'required|string|max:255',
            'yoruba' => 'required|string|max:255',
            'dendi' => 'required|string|max:255',
            'anglais' => 'required|string|max:255',
        ]);

        Presentation::create($validated);

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
    public function update(Request $request, Presentation $presentation)
    {
        $validated = $request->validate([
            'presentation' => 'required|string|max:255',
            'francais' => 'required|string|max:255',
            'goun' => 'required|string|max:255',
            'fon' => 'required|string|max:255',
            'yoruba' => 'required|string|max:255',
            'dendi' => 'required|string|max:255',
            'anglais' => 'required|string|max:255',
        ]);

        $presentation->update($validated);

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

