<?php

namespace App\Http\Controllers;

use App\Models\PartieDuCorps;
use App\Http\Requests\StorePartieDuCorpsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PartieDuCorpsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $parties = PartieDuCorps::all();
        return view('partie_du_corps.index', compact('parties'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('partie_du_corps.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePartieDuCorpsRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('partie_du_corps', 'public');
        }

        PartieDuCorps::create($data);

        return redirect()->route('partie_du_corps.index')->with('success', 'Partie du corps créée avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(PartieDuCorps $partieDuCorps)
    {
        $previous = PartieDuCorps::where('id', '<', (int)$partieDuCorps->id)->orderBy('id', 'desc')->first();
        $next = PartieDuCorps::where('id', '>', (int)$partieDuCorps->id)->orderBy('id', 'asc')->first();
        return view('partie_du_corps.show', compact('partieDuCorps', 'previous', 'next'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PartieDuCorps $partieDuCorps)
    {
        return view('partie_du_corps.edit', compact('partieDuCorps'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StorePartieDuCorpsRequest $request, PartieDuCorps $partieDuCorps)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            // Supprimer l'ancienne image si elle existe
            if ($partieDuCorps->image) {
                Storage::disk('public')->delete($partieDuCorps->image);
            }
            $data['image'] = $request->file('image')->store('partie_du_corps', 'public');
        }

        $partieDuCorps->update($data);

        return redirect()->route('partie_du_corps.index')->with('success', 'Partie du corps mise à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PartieDuCorps $partieDuCorps)
    {
        // Supprimer l'image si elle existe et est un fichier local
        if ($partieDuCorps->image && !filter_var($partieDuCorps->image, FILTER_VALIDATE_URL)) {
            Storage::disk('public')->delete($partieDuCorps->image);
        }

        $partieDuCorps->delete();

        return redirect()->route('partie_du_corps.index')->with('success', 'Partie du corps supprimée avec succès.');
    }

    /**
     * Download and store image from URL.
     */
    private function downloadAndStoreImage(string $url): string
    {
        try {
            $response = Http::get($url);
            if ($response->successful()) {
                $extension = $this->getImageExtension($response->header('Content-Type'));
                $filename = 'partie_du_corps/' . Str::uuid() . '.' . $extension;
                Storage::disk('public')->put($filename, $response->body());
                return $filename;
            }
        } catch (\Exception $e) {
            // Log error or handle it
        }
        return $url; // Fallback to URL if download fails
    }

    /**
     * Get image extension from content type.
     */
    private function getImageExtension(string $contentType): string
    {
        return match ($contentType) {
            'image/jpeg' => 'jpg',
            'image/png' => 'png',
            'image/gif' => 'gif',
            'image/webp' => 'webp',
            default => 'jpg',
        };
    }
}
