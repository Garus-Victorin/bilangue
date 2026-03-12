<?php

namespace App\Http\Controllers;

use App\Models\DemandeAide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DemandeAideController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $demandes = DemandeAide::all();
        return view('demandes_aide.index', compact('demandes'));
    }
    
    /**
     * Display learning view based on user's languages.
     */
    public function learn()
    {
        $demandes = DemandeAide::all();
        
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
        
        return view('demandes_aide.learn', compact('demandes', 'fromColumn', 'toColumn', 'fromLang', 'toLang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('demandes_aide.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'demande_aide' => 'required|string|max:255',
            'francais' => 'required|string|max:255',
            'goun' => 'required|string|max:255',
            'fon' => 'required|string|max:255',
            'yoruba' => 'required|string|max:255',
            'dendi' => 'required|string|max:255',
            'anglais' => 'required|string|max:255',
        ]);

        DemandeAide::create($validated);

        return redirect()
            ->route('demandes_aide.index')
            ->with('success', 'Demande d\'aide créée avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(DemandeAide $demandeAide)
    {
        $previous = DemandeAide::where('id_demande_aide', '<', $demandeAide->id_demande_aide)->orderBy('id_demande_aide', 'desc')->first();
        $next = DemandeAide::where('id_demande_aide', '>', $demandeAide->id_demande_aide)->orderBy('id_demande_aide', 'asc')->first();

        return view('demandes_aide.show', compact('demandeAide', 'previous', 'next'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DemandeAide $demandeAide)
    {
        return view('demandes_aide.edit', compact('demandeAide'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DemandeAide $demandeAide)
    {
        $validated = $request->validate([
            'demande_aide' => 'required|string|max:255',
            'francais' => 'required|string|max:255',
            'goun' => 'required|string|max:255',
            'fon' => 'required|string|max:255',
            'yoruba' => 'required|string|max:255',
            'dendi' => 'required|string|max:255',
            'anglais' => 'required|string|max:255',
        ]);

        $demandeAide->update($validated);

        return redirect()
            ->route('demandes_aide.index')
            ->with('success', 'Demande d\'aide mise à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DemandeAide $demandeAide)
    {
        $demandeAide->delete();

        return redirect()
            ->route('demandes_aide.index')
            ->with('success', 'Demande d\'aide supprimée avec succès.');
    }
}

