@extends("App")
@section("body")
@include("Partials.spin.loading")
@include("Partials.Admin.Sidebar")

<main class="flex-1 p-6 overflow-auto">
  <h1 class="text-2xl font-bold text-gray-800 mb-2">Historique d’Enregistrement</h1>
  <p class="text-sm text-gray-600 mb-4">
    Suivi des enregistrements effectués par les agents.
  </p>

  <!-- Filtre / recherche (si besoin) -->
  <div class="mb-4 flex flex-col md:flex-row gap-2 justify-between">
    <div class="flex gap-2">
      <input type="text" placeholder="Rechercher..." class="px-3 py-2 border rounded shadow-sm focus:outline-none focus:ring focus:border-blue-300" />
      <select class="px-3 py-2 border rounded shadow-sm focus:outline-none focus:ring focus:border-blue-300">
        <option>Filtrer par agent</option>
        <option>Jean Rakoto</option>
        <option>Ando</option>
      </select>
    </div>
    <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Rechercher</button>
  </div>

  <!-- Tableau de l’historique -->
  <div class="bg-white shadow rounded overflow-x-auto">
    <table class="min-w-full text-sm text-left">
      <thead class="bg-gray-100 text-gray-600 uppercase text-xs">
        <tr>
          <th class="px-4 py-2">ID</th>
          <th class="px-4 py-2">Agent</th>
          <th class="px-4 py-2">Action</th>
          <th class="px-4 py-2">Date</th>
          <th class="px-4 py-2">Détails</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-200">
        <tr>
          <td class="px-4 py-2">001</td>
          <td class="px-4 py-2">Jean Rakoto</td>
          <td class="px-4 py-2 text-green-600 font-semibold">Ajouté un acte</td>
          <td class="px-4 py-2">2025-06-01 14:23</td>
          <td class="px-4 py-2">
            <a href="#" class="text-blue-600 hover:underline flex items-center gap-1">
              <!-- Icône information -->
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M13 16h-1v-4h-1m1-4h.01M12 2a10 10 0 1010 10A10 10 0 0012 2z" />
              </svg>
              Détails
            </a>
          </td>
        </tr>
        <!-- Plus de lignes -->
      </tbody>
    </table>
  </div>
</main>


@endsection
