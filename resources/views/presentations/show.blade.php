<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Détails de la Présentation') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="mb-4 flex justify-between items-center">
                        <a href="{{ route('presentations.index') }}" class="btn btn-secondary">Retour à la liste</a>
                        <h3 class="text-lg font-medium">Présentation: {{ $presentation->presentation }}</h3>
                        <a href="{{ route('presentations.edit', $presentation) }}" class="btn btn-warning">Modifier</a>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <strong>Présentation:</strong> {{ $presentation->presentation }}
                        </div>
                        <div>
                            <strong>Français:</strong> {{ $presentation->francais }}
                        </div>
                        <div>
                            <strong>Goun:</strong> {{ $presentation->goun }}
                        </div>
                        <div>
                            <strong>Fon:</strong> {{ $presentation->fon }}
                        </div>
                        <div>
                            <strong>Yoruba:</strong> {{ $presentation->yoruba }}
                        </div>
                        <div>
                            <strong>Dendi:</strong> {{ $presentation->dendi }}
                        </div>
                        <div>
                            <strong>Anglais:</strong> {{ $presentation->anglais }}
                        </div>
                        <div>
                            <strong>Créé le:</strong> {{ $presentation->created_at ? $presentation->created_at->format('d/m/Y H:i') : 'N/A' }}
                        </div>
                        <div>
                            <strong>Mis à jour le:</strong> {{ $presentation->updated_at ? $presentation->updated_at->format('d/m/Y H:i') : 'N/A' }}
                        </div>
                    </div>

                    <div class="mt-6 flex justify-between items-center">
                        @if($previous)
                            <a href="{{ route('presentations.show', $previous) }}" class="btn btn-secondary">Précédent</a>
                        @else
                            <span></span>
                        @endif
                        @if($next)
                            <a href="{{ route('presentations.show', $next) }}" class="btn btn-secondary">Suivant</a>
                        @else
                            <span></span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
