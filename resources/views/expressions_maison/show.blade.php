<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Détails de l\'Expression à la maison') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex justify-between items-center mb-4">
                        <a href="{{ route('expressions_maison.index') }}" class="btn btn-secondary">Retour à la liste</a>
                        <h3 class="text-lg font-medium">Expression à la maison {{ $expressionMaison->id_expression_maison }}</h3>
                        <a href="{{ route('expressions_maison.edit', $expressionMaison) }}" class="btn btn-warning">Modifier</a>
                    </div>
                    <div class="space-y-4">
                        <div>
                            <strong>Français :</strong> {{ $expressionMaison->francais }}
                        </div>
                        <div>
                            <strong>Goun :</strong> {{ $expressionMaison->goun }}
                        </div>
                        <div>
                            <strong>Fon :</strong> {{ $expressionMaison->fon }}
                        </div>
                        <div>
                            <strong>Yoruba :</strong> {{ $expressionMaison->yoruba }}
                        </div>
                        <div>
                            <strong>Dendi :</strong> {{ $expressionMaison->dendi }}
                        </div>
                        <div>
                            <strong>Anglais :</strong> {{ $expressionMaison->anglais }}
                        </div>
                        <div>
                            <strong>Créé le :</strong> {{ $expressionMaison->created_at ? $expressionMaison->created_at->format('d/m/Y H:i') : 'N/A' }}
                        </div>
                        <div>
                            <strong>Mis à jour le :</strong> {{ $expressionMaison->updated_at ? $expressionMaison->updated_at->format('d/m/Y H:i') : 'N/A' }}
                        </div>
                    </div>

                    <div class="mt-6 flex justify-between items-center">
                        @if($previous)
                            <a href="{{ route('expressions_maison.show', $previous) }}" class="btn btn-secondary">Précédent</a>
                        @endif
                        @if($next)
                            <a href="{{ route('expressions_maison.show', $next) }}" class="btn btn-secondary">Suivant</a>
                        @endif
                    </div>



                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
