<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Détails de l\'Expression Basique') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="mb-4 flex justify-between items-center">
                        <a href="{{ route('expressions_basiques.index') }}" class="btn btn-secondary">Retour à la liste</a>
                        <h3 class="text-lg font-medium">Expression Basique: {{ $expressionBasique->nom }}</h3>
                        <a href="{{ route('expressions_basiques.edit', $expressionBasique) }}" class="btn btn-warning">Modifier</a>
                    </div>

                    <div class="mb-4">
                        @if($expressionBasique->image)
                            @php $imagePath = storage_path('app/public/' . $expressionBasique->image); @endphp
                            @if(file_exists($imagePath))
                                <img src="{{ asset('storage/' . $expressionBasique->image) }}" alt="{{ $expressionBasique->nom }}" class="w-50 h-52 object-cover rounded mx-auto">
                            @else
                                <span class="text-gray-500">Image non trouvée</span>
                            @endif
                        @else
                            <span class="text-gray-500">Aucune image</span>
                        @endif
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <strong>Nom:</strong> {{ $expressionBasique->nom }}
                        </div>
                        <div>
                            <strong>Français:</strong> {{ $expressionBasique->francais }}
                        </div>
                        <div>
                            <strong>Goun:</strong> {{ $expressionBasique->goun }}
                        </div>
                        <div>
                            <strong>Fon:</strong> {{ $expressionBasique->fon }}
                        </div>
                        <div>
                            <strong>Yoruba:</strong> {{ $expressionBasique->yoruba }}
                        </div>
                        <div>
                            <strong>Dendi:</strong> {{ $expressionBasique->dendi }}
                        </div>
                        <div>
                            <strong>Anglais:</strong> {{ $expressionBasique->anglais }}
                        </div>
                        <div>
                            <strong>Créé le:</strong> {{ $expressionBasique->created_at ? $expressionBasique->created_at->format('d/m/Y H:i') : 'N/A' }}
                        </div>
                        <div>
                            <strong>Mis à jour le:</strong> {{ $expressionBasique->updated_at ? $expressionBasique->updated_at->format('d/m/Y H:i') : 'N/A' }}
                        </div>
                    </div>

                    <div class="mt-6 flex justify-between items-center">
                        @if($previous)
                            <a href="{{ route('expressions_basiques.show', $previous) }}" class="btn btn-secondary">Précédent</a>
                        @else
                            <span></span>
                        @endif
                        @if($next)
                            <a href="{{ route('expressions_basiques.show', $next) }}" class="btn btn-secondary">Suivant</a>
                        @else
                            <span></span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
