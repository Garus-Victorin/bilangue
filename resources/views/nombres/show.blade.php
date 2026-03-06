<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Détails du Nombre') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex justify-between items-center mb-4">
                        <a href="{{ route('nombres.index') }}" class="btn btn-secondary">Retour à la liste</a>
                        <h3 class="text-lg font-medium">Nombre {{ $nombre->id_nombre }}</h3>
                        <a href="{{ route('nombres.edit', $nombre) }}" class="btn btn-warning">Modifier</a>
                    </div>
                    <div class="space-y-4">
                        <div>
                            <strong>Français :</strong> {{ $nombre->francais }}
                        </div>
                        <div>
                            <strong>Goun :</strong> {{ $nombre->goun }}
                        </div>
                        <div>
                            <strong>Fon :</strong> {{ $nombre->fon }}
                        </div>
                        <div>
                            <strong>Yoruba :</strong> {{ $nombre->yoruba }}
                        </div>
                        <div>
                            <strong>Dendi :</strong> {{ $nombre->dendi }}
                        </div>
                        <div>
                            <strong>Anglais :</strong> {{ $nombre->anglais }}
                        </div>
                        <div>
                            <strong>Créé le :</strong> {{ $nombre->created_at ? $nombre->created_at->format('d/m/Y H:i') : 'N/A' }}
                        </div>
                        <div>
                            <strong>Mis à jour le :</strong> {{ $nombre->updated_at ? $nombre->updated_at->format('d/m/Y H:i') : 'N/A' }}
                        </div>
                    </div>

                    <div class="mt-6 flex justify-between items-center">
                        @if($previous)
                            <a href="{{ route('nombres.show', $previous) }}" class="btn btn-secondary">Précédent</a>
                        @endif
                        @if($next)
                            <a href="{{ route('nombres.show', $next) }}" class="btn btn-secondary">Suivant</a>
                        @endif
                    </div>



                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
