<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Détails de l\'Expression de Voyage') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex justify-between items-center mb-4">
                        <a href="{{ route('expressions_voyage.index') }}" class="btn btn-secondary">Retour à la liste</a>
                        <h3 class="text-lg font-medium">Expression {{ $expressionVoyage->id_expression_voyage }}</h3>
                        <a href="{{ route('expressions_voyage.edit', $expressionVoyage) }}" class="btn btn-warning">Modifier</a>
                    </div>
                    <div class="space-y-4">
                        <div>
                            <strong>Français :</strong> {{ $expressionVoyage->francais }}
                        </div>
                        <div>
                            <strong>Goun :</strong> {{ $expressionVoyage->goun }}
                        </div>
                        <div>
                            <strong>Fon :</strong> {{ $expressionVoyage->fon }}
                        </div>
                        <div>
                            <strong>Yoruba :</strong> {{ $expressionVoyage->yoruba }}
                        </div>
                        <div>
                            <strong>Dendi :</strong> {{ $expressionVoyage->dendi }}
                        </div>
                        <div>
                            <strong>Anglais :</strong> {{ $expressionVoyage->anglais }}
                        </div>
                        <div>
                            <strong>Créé le :</strong> {{ $expressionVoyage->created_at ? $expressionVoyage->created_at->format('d/m/Y H:i') : 'N/A' }}
                        </div>
                        <div>
                            <strong>Mis à jour le :</strong> {{ $expressionVoyage->updated_at ? $expressionVoyage->updated_at->format('d/m/Y H:i') : 'N/A' }}
                        </div>
                    </div>

                    <div class="mt-6 flex justify-between items-center">
                        @if($previous)
                            <a href="{{ route('expressions_voyage.show', $previous) }}" class="btn btn-secondary">Précédent</a>
                        @endif
                        @if($next)
                            <a href="{{ route('expressions_voyage.show', $next) }}" class="btn btn-secondary">Suivant</a>
                        @endif
                    </div>




                </div>
            </div>
        </div>
    </div>
</x-app-layout>
