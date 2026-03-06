<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Détails du Produit') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-lg font-medium">Produit #{{ $produit->id_produit }}</h3>
                        <div class="flex gap-2">
                            @if($previous)
                                <a href="{{ route('produits.show', $previous) }}" class="btn btn-sm btn-outline">Précédent</a>
                            @endif
                            @if($next)
                                <a href="{{ route('produits.show', $next) }}" class="btn btn-sm btn-outline">Suivant</a>
                            @endif
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            @if($produit->image)
                                <div class="mb-4">
                                    <img src="{{ asset('storage/' . $produit->image) }}" alt="{{ $produit->francais }}" class="w-full max-w-sm h-64 object-cover rounded-lg shadow">
                                </div>
                            @endif
                        </div>

                        <div class="space-y-4">
                            <div>
                                <h4 class="font-semibold text-lg mb-2">Traductions</h4>
                                <div class="space-y-2">
                                    <div class="flex justify-between">
                                        <span class="font-medium">Français:</span>
                                        <span>{{ $produit->francais }}</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="font-medium">Goun:</span>
                                        <span>{{ $produit->goun }}</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="font-medium">Fon:</span>
                                        <span>{{ $produit->fon }}</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="font-medium">Yoruba:</span>
                                        <span>{{ $produit->yoruba }}</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="font-medium">Dendi:</span>
                                        <span>{{ $produit->dendi }}</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="font-medium">Anglais:</span>
                                        <span>{{ $produit->anglais }}</span>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <h4 class="font-semibold text-lg mb-2">Informations</h4>
                                <div class="space-y-2">
                                    <div class="flex justify-between">
                                        <span class="font-medium">Créé le:</span>
                                        <span>{{ $produit->created_at->format('d/m/Y H:i') }}</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="font-medium">Modifié le:</span>
                                        <span>{{ $produit->updated_at->format('d/m/Y H:i') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-end gap-2 mt-6">
                        <a href="{{ route('produits.index') }}" class="btn btn-secondary">Retour à la liste</a>
                        <a href="{{ route('produits.edit', $produit) }}" class="btn btn-primary">Modifier</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
