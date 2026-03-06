<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Modifier la Couleur') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('couleurs.update', $couleur) }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="typecouleur" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Type Couleur</label>
                            <input type="color" name="typecouleur" id="typecouleur" value="{{ old('typecouleur', $couleur->typecouleur) }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-900 dark:text-gray-100">
                            @error('typecouleur')
                                <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="couleur" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Couleur</label>
                            <input type="text" name="couleur" id="couleur" value="{{ old('couleur', $couleur->couleur) }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-900 dark:text-gray-100" required>
                            @error('couleur')
                                <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="francais" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Français</label>
                            <input type="text" name="francais" id="francais" value="{{ old('francais', $couleur->francais) }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-900 dark:text-gray-100" required>
                            @error('francais')
                                <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="goun" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Goun</label>
                            <input type="text" name="goun" id="goun" value="{{ old('goun', $couleur->goun) }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-900 dark:text-gray-100" required>
                            @error('goun')
                                <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="fon" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Fon</label>
                            <input type="text" name="fon" id="fon" value="{{ old('fon', $couleur->fon) }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-900 dark:text-gray-100" required>
                            @error('fon')
                                <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="yoruba" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Yoruba</label>
                            <input type="text" name="yoruba" id="yoruba" value="{{ old('yoruba', $couleur->yoruba) }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-900 dark:text-gray-100" required>
                            @error('yoruba')
                                <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="dendi" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Dendi</label>
                            <input type="text" name="dendi" id="dendi" value="{{ old('dendi', $couleur->dendi) }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-900 dark:text-gray-100" required>
                            @error('dendi')
                                <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="anglais" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Anglais</label>
                            <input type="text" name="anglais" id="anglais" value="{{ old('anglais', $couleur->anglais) }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-900 dark:text-gray-100" required>
                            @error('anglais')
                                <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex items-center justify-between">
                            <a href="{{ route('couleurs.index') }}" class="btn btn-secondary">Annuler</a>
                            <button type="submit" class="btn btn-primary">Mettre à jour</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
