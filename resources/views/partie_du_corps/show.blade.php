<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Détails de la Partie du Corps') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="mb-4 flex justify-between items-center">
                        <a href="{{ route('partie_du_corps.index') }}" class="btn btn-secondary">Retour à la liste</a>
                        <h3 class="text-lg font-medium">Partie du Corps: {{ $partieDuCorps->nom }}</h3>
                        <a href="{{ route('partie_du_corps.edit', $partieDuCorps) }}" class="btn btn-warning">Modifier</a>
                    </div>

                    <div class="mb-4">
                        <center>
                            @if($partieDuCorps->image)
                            @php $imagePath = storage_path('app/public/' . $partieDuCorps->image); @endphp
                            @if(file_exists($imagePath))
                                <img src="{{ asset('storage/' . $partieDuCorps->image) }}" alt="{{ $partieDuCorps->nom }}" class="w-50 h-52 object-cover rounded">
                            @else
                                <span class="text-gray-500">Image non trouvée</span>
                            @endif
                        @else
                            <span class="text-gray-500">Aucune image</span>
                        @endif
                        </center>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <strong>Nom:</strong> {{ $partieDuCorps->nom }}
                        </div>
                        <div>
                            <strong>Français:</strong> {{ $partieDuCorps->francais }}
                        </div>
                        <div>
                            <strong>Goun:</strong> {{ $partieDuCorps->goun }}
                        </div>
                        <div>
                            <strong>Fon:</strong> {{ $partieDuCorps->fon }}
                        </div>
                        <div>
                            <strong>Yoruba:</strong> {{ $partieDuCorps->yoruba }}
                        </div>
                        <div>
                            <strong>Dendi:</strong> {{ $partieDuCorps->dendi }}
                        </div>
                        <div>
                            <strong>Anglais:</strong> {{ $partieDuCorps->anglais }}
                        </div>
                        <div>
                            <strong>Créé le:</strong> {{ $partieDuCorps->created_at ? $partieDuCorps->created_at->format('d/m/Y H:i') : 'N/A' }}
                        </div>
                        <div>
                            <strong>Mis à jour le:</strong> {{ $partieDuCorps->updated_at ? $partieDuCorps->updated_at->format('d/m/Y H:i') : 'N/A' }}
                        </div>
                    </div>

                    <div class="mt-6 flex justify-between items-center">
                        @if($previous)
                            <a href="{{ route('partie_du_corps.show', $previous) }}" class="btn btn-secondary">Précédent</a>
                        @else
                            <span></span>
                        @endif
                        @if($next)
                            <a href="{{ route('partie_du_corps.show', $next) }}" class="btn btn-secondary">Suivant</a>
                        @else
                            <span></span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
