<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Détails de la Demande d\'Aide') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between mb-6">
                        <h3 class="text-lg font-medium">Demande d'Aide: {{ $demandeAide->demande_aide }}</h3>
                        <div class="flex gap-2">
                            @if($previous)
                                <a href="{{ route('demandes_aide.show', $previous) }}" class="btn btn-outline">Précédent</a>
                            @endif
                            @if($next)
                                <a href="{{ route('demandes_aide.show', $next) }}" class="btn btn-outline">Suivant</a>
                            @endif
                            <a href="{{ route('demandes_aide.edit', $demandeAide) }}" class="btn btn-warning">Modifier</a>
                            <a href="{{ route('demandes_aide.index') }}" class="btn btn-secondary">Retour à la liste</a>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Demande d'Aide</label>
                                <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">{{ $demandeAide->demande_aide }}</p>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Français</label>
                                <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">{{ $demandeAide->francais }}</p>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Goun</label>
                                <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">{{ $demandeAide->goun }}</p>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Fon</label>
                                <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">{{ $demandeAide->fon }}</p>
                            </div>
                        </div>

                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Yoruba</label>
                                <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">{{ $demandeAide->yoruba }}</p>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Dendi</label>
                                <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">{{ $demandeAide->dendi }}</p>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Anglais</label>
                                <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">{{ $demandeAide->anglais }}</p>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Créé le</label>
                                <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">{{ $demandeAide->created_at->format('d/m/Y H:i') }}</p>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Mis à jour le</label>
                                <p class="mt-1 text-sm text-gray-900 dark:text-gray-100">{{ $demandeAide->updated_at->format('d/m/Y H:i') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
