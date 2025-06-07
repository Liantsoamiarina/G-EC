@extends("App")
@section("body")
@include("Partials.spin.loading")
@include("Partials.Admin.Sidebar")

<main class="flex-1 p-6 overflow-auto">
  <!-- Titre de la section -->
  <div class="mb-6">
    <h1 class="text-3xl font-bold text-gray-800 mb-1">Gestion des Actes</h1>
    <p class="text-gray-500">Voici la liste des actes enregistrés dans le système.</p>
  </div>

  <!-- Bouton d’ajout -->
  <div class="flex justify-end mb-4">
    <a href="#" class="inline-flex items-center gap-2 bg-green-600 text-white font-medium px-4 py-2 rounded hover:bg-green-700 shadow-sm transition">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4.5v15m7.5-7.5h-15" />
      </svg>
      Ajouter un acte
    </a>
  </div>

  <!-- Tableau des actes -->
  <div class="bg-white shadow rounded-lg overflow-hidden">
    <table class="min-w-full text-sm">
      <thead class="bg-gray-100 text-gray-600 uppercase text-xs">
        <tr>
          <th class="px-5 py-3 text-left">Réf</th>
          <th class="px-5 py-3 text-left">Nom & Prénoms</th>
          <th class="px-5 py-3 text-left">Type</th>
          <th class="px-5 py-3 text-left">Date</th>
          <th class="px-5 py-3 text-left">Lieu</th>
          <th class="px-5 py-3 text-left">Actions</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-200">
        <tr class="hover:bg-gray-50 transition">
          <td class="px-5 py-3 font-medium text-gray-700">001</td>
          <td class="px-5 py-3 text-gray-700">Jean Rakoto</td>
          <td class="px-5 py-3 text-green-700 font-semibold">Naissance</td>
          <td class="px-5 py-3 text-gray-700">2025-06-01</td>
          <td class="px-5 py-3 text-gray-700">Antehiroka</td>
          <td class="px-5 py-3 flex gap-2 text-gray-500">
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

