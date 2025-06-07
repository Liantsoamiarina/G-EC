@extends('App')
@section("body")

@include("Partials.spin.loading")
@include("Partials.Admin.Sidebar")

<main class="flex-1 p-6 overflow-auto">
  <h1 class="text-2xl font-bold text-gray-800 mb-2">Gestion des Agents</h1>
  <p class="text-sm text-gray-600 mb-4">
    Voici la liste des agents enregistrés dans le système.
  </p>

  <!-- Bouton d’ajout -->
  <div class="mb-4 flex justify-end">
    <a href="#" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition duration-300 ease-in-out">
      + Ajouter un agent
    </a>
  </div>

  <!-- Tableau des agents -->
  <div class="bg-white shadow rounded overflow-x-auto">
    <table class="min-w-full text-sm text-left">
      <thead class="bg-gray-100 text-gray-600 uppercase text-xs">
        <tr>
          <th class="px-4 py-2">ID</th>
          <th class="px-4 py-2">Nom</th>
          <th class="px-4 py-2">Prénoms</th>
          <th class="px-4 py-2">Poste</th>
          <th class="px-4 py-2">Téléphone</th>
          <th class="px-4 py-2">Actions</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-200">
        <tr>
          <td class="px-4 py-2">001</td>
          <td class="px-4 py-2">Rakoto</td>
          <td class="px-4 py-2">Jean</td>
          <td class="px-4 py-2">Administrateur</td>
          <td class="px-4 py-2">+261 34 12 345 67</td>
          <td class="px-4 py-2 flex gap-2">
            <a href="#" class="text-blue-600 hover:text-blue-800 transition">
                        <!-- Voir -->
            <a href="#" class="hover:text-blue-600 transition">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.478 0-8.268-2.943-9.542-7z" />
              </svg>
            </a>
            <!-- Modifier -->
            <a href="#" class="hover:text-yellow-600 transition">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.232 5.232l3.536 3.536M4 20h4.586a1 1 0 00.707-.293l10-10a1 1 0 000-1.414l-3.536-3.536a1 1 0 00-1.414 0l-10 10A1 1 0 004 20z" />
              </svg>
            </a>
            <!-- Supprimer -->
            <a href="#" class="hover:text-red-600 transition">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6M9 7h6m-7 0h8a1 1 0 001-1V5a1 1 0 00-1-1h-2.586a1 1 0 01-.707-.293L11 2H9l-1 1.707A1 1 0 017.293 4H5a1 1 0 00-1 1v1a1 1 0 001 1h1" />
              </svg>
            </a>
          </td>
        </tr>
        <!-- Plus de lignes -->
      </tbody>
    </table>
  </div>
</main>

@endsection
