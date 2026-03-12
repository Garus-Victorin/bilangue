<?php

namespace App\Http\Controllers;

use App\Models\Salutation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SalutationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $salutations = Salutation::all();

        return view('salutations.index', compact('salutations'));
    }
    
    /**
     * Display learning view based on user's languages.
     */
    public function learn()
    {
        $salutations = Salutation::all();
        
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
        
        return view('salutations.learn', compact('salutations', 'fromColumn', 'toColumn', 'fromLang', 'toLang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('salutations.create');
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
            'bariba' => 'required|string|max:255',
        ]);

        Salutation::create($validated);

        return redirect()
            ->route('salutations.index')
            ->with('success', 'Salutation créée avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Salutation $salutation)
    {
        $previous = Salutation::where('id', '<', $salutation->id)->orderBy('id', 'desc')->first();
        $next = Salutation::where('id', '>', $salutation->id)->orderBy('id', 'asc')->first();

        return view('salutations.show', compact('salutation', 'previous', 'next'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Salutation $salutation)
    {
        return view('salutations.edit', compact('salutation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Salutation $salutation)
    {
        $validated = $request->validate([
            'francais' => 'required|string|max:255',
            'goun' => 'required|string|max:255',
            'fon' => 'required|string|max:255',
            'yoruba' => 'required|string|max:255',
            'dendi' => 'required|string|max:255',
            'anglais' => 'required|string|max:255',
            'bariba' => 'required|string|max:255',
        ]);

        $salutation->update($validated);

        return redirect()
            ->route('salutations.index')
            ->with('success', 'Salutation mise à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Salutation $salutation)
    {
        $salutation->delete();

        return redirect()
            ->route('salutations.index')
            ->with('success', 'Salutation supprimée avec succès.');
    }
}
