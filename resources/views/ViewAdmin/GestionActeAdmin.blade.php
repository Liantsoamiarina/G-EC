@extends("App")
@section("body")
@include("Partials.spin.loading")
@include("Partials.Admin.Sidebar")
  <main class="flex-1 overflow-y-auto flex flex-col p-6">

      <!-- Titre -->
      <div class="mb-6">
        <h1 class="text-3xl font-bold text-gray-800 mb-1">Gestion des Actes</h1>
        <p class="text-gray-500">Voici la liste des actes enregistrés dans le système.</p>
      </div>


<!-- Conteneur flex pour aligner à droite -->
<div class="flex justify-end mb-4" x-data="{ open: false }">
  <!-- Bouton -->
  <button
    @click="open = true"
    class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded flex items-center gap-2 shadow transition"
  >
    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4.5v15m7.5-7.5h-15" />
    </svg>
    Ajouter un acte
  </button>

  <!-- Modale -->
  <div
    x-show="open"
    x-transition.opacity
    x-transition.duration.300ms
    class="fixed inset-0 z-50 flex items-center justify-center backdrop-blur-sm bg-black/40"
    @click.self="open = false"
  >
    <div
      x-show="open"
      x-transition.scale
      class="bg-white rounded-xl shadow-2xl w-full max-w-md p-6 space-y-4"
    >
      <h2 class="text-xl font-semibold text-gray-800 text-center">Quel type d’acte souhaitez-vous ajouter ?</h2>

      <div class="grid grid-cols-1 gap-3">
        <a href="/ajout/naissance" class="block text-center px-4 py-2 rounded bg-blue-100 hover:bg-blue-200 text-blue-800 font-medium transition">Naissance</a>
        <a href="/ajout/mariage" class="block text-center px-4 py-2 rounded bg-pink-100 hover:bg-pink-200 text-pink-800 font-medium transition">Mariage</a>
        <a href="/ajout/deces" class="block text-center px-4 py-2 rounded bg-red-100 hover:bg-red-200 text-red-800 font-medium transition">Décès</a>
      </div>

      <div class="text-center">
        <button @click="open = false" class="mt-4 text-gray-500 hover:text-gray-700 transition text-sm">
          Annuler
        </button>
      </div>
    </div>
  </div>
</div>



      <!-- Tableau -->
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
          </tbody>
        </table>
      </div>
        <!-- Dernières actions -->
    <a href="{{ route("admin.history") }}">

      <div class="bg-white rounded-xl shadow p-4 mb-6 border border-gray-200">
        <h2 class="text-sm font-semibold text-gray-700 mb-2">Dernières enregistrement</h2>
        <ul class="text-sm text-gray-600 space-y-1">
          <li>📝 Acte de naissance ajouté pour <span class="font-semibold text-gray-800">Rasoa Jean</span> - 01/06/2025</li>
          <li>💍 Acte de mariage ajouté pour <span class="font-semibold text-gray-800">Rakoto et Rasoanirina</span> - 30/05/2025</li>
          <li>⚰️ Acte de décès ajouté pour <span class="font-semibold text-gray-800">Rabe Marcel</span> - 29/05/2025</li>
        </ul>
      </div>
    </a>
    </main>
@endsection

