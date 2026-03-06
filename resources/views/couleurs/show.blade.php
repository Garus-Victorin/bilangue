<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Détails de la Couleur') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="mb-4 flex justify-between items-center">
                        <a href="{{ route('couleurs.index') }}" class="btn btn-secondary">Retour à la liste</a>
                        <h3 class="text-lg font-medium">Couleur:  {{ $couleur->francais }}<div class="w-6 h-6 rounded inline-block ml-2"></div></h3>
                        <a href="{{ route('couleurs.edit', $couleur) }}" class="btn btn-warning">Modifier</a>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <strong>Couleur:</strong> <div class="w-12 h-6 rounded inline-block ml-2" style="background-color: {{ $couleur->typecouleur }}"></div>
                        </div>
                        <div>
                            <strong>Français:</strong> {{ $couleur->francais }}
                        </div>
                        <div>
                            <strong>Goun:</strong> {{ $couleur->goun }}
                        </div>
                        <div>
                            <strong>Fon:</strong> {{ $couleur->fon }}
                        </div>
                        <div>
                            <strong>Yoruba:</strong> {{ $couleur->yoruba }}
                        </div>
                        <div>
                            <strong>Dendi:</strong> {{ $couleur->dendi }}
                        </div>
                        <div>
                            <strong>Anglais:</strong> {{ $couleur->anglais }}
                        </div>
                        <div>
                            <strong>Créé le:</strong> {{ $couleur->created_at ? $couleur->created_at->format('d/m/Y H:i') : 'N/A' }}
                        </div>
                        <div>
                            <strong>Mis à jour le:</strong> {{ $couleur->updated_at ? $couleur->updated_at->format('d/m/Y H:i') : 'N/A' }}
                        </div>
                    </div>

                    <div class="mt-6 flex justify-between items-center">
                        @if($previous)
                            <a href="{{ route('couleurs.show', $previous) }}" class="btn btn-secondary">Précédent</a>
                        @else
                            <span></span>
                        @endif
                        @if($next)
                            <a href="{{ route('couleurs.show', $next) }}" class="btn btn-secondary">Suivant</a>
                        @else
                            <span></span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
