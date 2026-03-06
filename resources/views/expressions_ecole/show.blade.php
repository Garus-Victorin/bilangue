<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Détails de l\'Expression Scolaire') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="mb-4 flex justify-between items-center">
                        <a href="{{ route('expressions_ecole.index') }}" class="btn btn-secondary">Retour à la liste</a>
                        <h3 class="text-lg font-medium">Expression Scolaire</h3>
                        <a href="{{ route('expressions_ecole.edit', $expressionEcole) }}" class="btn btn-warning">Modifier</a>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <strong>Français:</strong> {{ $expressionEcole->francais }}
                        </div>
                        <div>
                            <strong>Goun:</strong> {{ $expressionEcole->goun }}
                        </div>
                        <div>
                            <strong>Fon:</strong> {{ $expressionEcole->fon }}
                        </div>
                        <div>
                            <strong>Yoruba:</strong> {{ $expressionEcole->yoruba }}
                        </div>
                        <div>
                            <strong>Dendi:</strong> {{ $expressionEcole->dendi }}
                        </div>
                        <div>
                            <strong>Anglais:</strong> {{ $expressionEcole->anglais }}
                        </div>
                        <div>
                            <strong>Créé le:</strong> {{ $expressionEcole->created_at ? $expressionEcole->created_at->format('d/m/Y H:i') : 'N/A' }}
                        </div>
                        <div>
                            <strong>Mis à jour le:</strong> {{ $expressionEcole->updated_at ? $expressionEcole->updated_at->format('d/m/Y H:i') : 'N/A' }}
                        </div>
                    </div>

                    <div class="mt-6 flex justify-between items-center">
                        @if($previous)
                            <a href="{{ route('expressions_ecole.show', $previous) }}" class="btn btn-secondary">Précédent</a>
                        @else
                            <span></span>
                        @endif
                        @if($next)
                            <a href="{{ route('expressions_ecole.show', $next) }}" class="btn btn-secondary">Suivant</a>
                        @else
                            <span></span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
