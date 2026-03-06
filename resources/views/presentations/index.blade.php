<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Présentations') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between mb-4">
                        <h3 class="text-lg font-medium">Liste des Présentations</h3>
                        <a href="{{ route('presentations.create') }}" class="btn btn-primary">Ajouter une Présentation</a>
                    </div>

                    @if(session('success'))
                        <div class="alert alert-success mb-4">
                            <span>{{ session('success') }}</span>
                        </div>
                    @endif

                    <div class="overflow-x-auto">
                        <table class="table table-zebra w-full">
                            <thead>
                                <tr>
                                    <th>Présentation</th>
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
                                @forelse($presentations as $presentation)
                                    <tr>
                                        <td>{{ $presentation->presentation }}</td>
                                        <td>{{ $presentation->francais }}</td>
                                        <td>{{ $presentation->goun }}</td>
                                        <td>{{ $presentation->fon }}</td>
                                        <td>{{ $presentation->yoruba }}</td>
                                        <td>{{ $presentation->dendi }}</td>
                                        <td>{{ $presentation->anglais }}</td>
                                        <td class="space-x-2">
                                            <a href="{{ route('presentations.show', $presentation) }}" class="btn btn-sm btn-info">Voir</a>
                                            <a href="{{ route('presentations.edit', $presentation) }}" class="btn btn-sm btn-warning">Modifier</a>
                                            <button type="button" class="btn btn-sm btn-error" onclick="openDeleteModal({{ $presentation->id_presentation }}, '{{ $presentation->presentation }}')">Supprimer</button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8" class="text-center">Aucune présentation trouvée.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="deleteModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full hidden">
        <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
            <div class="mt-3 text-center">
                <h3 class="text-lg leading-6 font-medium text-gray-900">Confirmer la suppression</h3>
                <div class="mt-2 px-7 py-3">
                    <p class="text-sm text-gray-500">
                        Êtes-vous sûr de vouloir supprimer la présentation "<span id="presentationName"></span>" ? Cette action est irréversible.
                    </p>
                </div>
                <div class="flex items-center px-4 py-3">
                    <button id="closeModal" class="px-4 py-2 bg-gray-500 text-white text-base font-medium rounded-md w-full shadow-sm hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-300">
                        Annuler
                    </button>
                    <form id="deleteForm" action="" method="POST" class="ml-3 w-full">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="px-4 py-2 bg-red-500 text-white text-base font-medium rounded-md w-full shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-300">
                            Supprimer
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function openDeleteModal(id, name) {
            document.getElementById('presentationName').textContent = name;
            document.getElementById('deleteForm').action = '/presentations/' + id;
            document.getElementById('deleteModal').classList.remove('hidden');
        }

        document.getElementById('closeModal').addEventListener('click', function() {
            document.getElementById('deleteModal').classList.add('hidden');
        });
    </script>
</x-app-layout>
