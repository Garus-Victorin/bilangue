<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Gestion des Produits') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if(session('success'))
                        <div class="alert alert-success mb-4">
                            <span>{{ session('success') }}</span>
                        </div>
                    @endif

                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-lg font-medium">Liste des Produits</h3>
                        <a href="{{ route('produits.create') }}" class="btn btn-primary">Ajouter un Produit</a>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="table table-zebra w-full">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Français</th>
                                    <th>Goun</th>
                                    <th>Fon</th>
                                    <th>Yoruba</th>
                                    <th>Dendi</th>
                                    <th>Anglais</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($produits as $produit)
                                    <tr>
                                        <td>{{ $produit->id_produit }}</td>
                                        <td>
                                            @if($produit->image)
                                                <img src="{{ asset('storage/' . $produit->image) }}" alt="{{ $produit->francais }}" class="w-12 h-12 object-cover rounded">
                                            @else
                                                <div class="w-12 h-12 bg-gray-200 rounded flex items-center justify-center">
                                                    <span class="text-xs text-gray-500">No Image</span>
                                                </div>
                                            @endif
                                        </td>
                                        <td>{{ $produit->francais }}</td>
                                        <td>{{ $produit->goun }}</td>
                                        <td>{{ $produit->fon }}</td>
                                        <td>{{ $produit->yoruba }}</td>
                                        <td>{{ $produit->dendi }}</td>
                                        <td>{{ $produit->anglais }}</td>
                                        <td>
                                            <div class="flex gap-2">
                                                <a href="{{ route('produits.show', $produit) }}" class="btn btn-sm btn-info">Voir</a>
                                                <a href="{{ route('produits.edit', $produit) }}" class="btn btn-sm btn-warning">Modifier</a>
                                                <form action="{{ route('produits.destroy', $produit) }}" method="POST" class="inline" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce produit ?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-error">Supprimer</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="9" class="text-center py-4">
                                            Aucun produit trouvé.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    @if($produits->hasPages())
                        <div class="mt-4">
                            {{ $produits->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
