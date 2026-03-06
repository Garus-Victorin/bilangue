<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Modifier l\'Expression Scolaire') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if ($errors->any())
                        <div class="alert alert-error mb-4">
                            <span>Merci de corriger les erreurs ci-dessous.</span>
                        </div>
                    @endif

                    <form action="{{ route('expressions_ecole.update', $expressionEcole) }}" method="POST" class="space-y-4">
                        @csrf
                        @method('PUT')

                        <div>
                            <label for="francais" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Français</label>
                            <input type="text" name="francais" id="francais" value="{{ old('francais', $expressionEcole->francais) }}" class="input input-bordered w-full" required>
                            @error('francais')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div>
                            <label for="goun" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Goun</label>
                            <input type="text" name="goun" id="goun" value="{{ old('goun', $expressionEcole->goun) }}" class="input input-bordered w-full" required>
                            @error('goun')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div>
                            <label for="fon" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Fon</label>
                            <input type="text" name="fon" id="fon" value="{{ old('fon', $expressionEcole->fon) }}" class="input input-bordered w-full" required>
                            @error('fon')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div>
                            <label for="yoruba" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Yoruba</label>
                            <input type="text" name="yoruba" id="yoruba" value="{{ old('yoruba', $expressionEcole->yoruba) }}" class="input input-bordered w-full" required>
                            @error('yoruba')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div>
                            <label for="dendi" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Dendi</label>
                            <input type="text" name="dendi" id="dendi" value="{{ old('dendi', $expressionEcole->dendi) }}" class="input input-bordered w-full" required>
                            @error('dendi')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div>
                            <label for="anglais" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Anglais</label>
                            <input type="text" name="anglais" id="anglais" value="{{ old('anglais', $expressionEcole->anglais) }}" class="input input-bordered w-full" required>
                            @error('anglais')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="flex justify-end gap-2">
                            <a href="{{ route('expressions_ecole.index') }}" class="btn btn-secondary">Annuler</a>
                            <button type="submit" class="btn btn-primary">Mettre à jour</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
