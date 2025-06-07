@extends('App')
@section("body")
  <!-- Sidebar institutionnelle -->
  @include("Partials.spin.loading")
  @include("Partials.Admin.Sidebar")


  <!-- Contenu principal -->
  <main class="flex-1 p-6 overflow-auto">
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold text-gray-800 mb-2">Tableau de bord</h1>
        <h2 class="text-xl font-bold text-gray-800 capitalize">| {{ \carbon\carbon::now()->translatedFormat('l j F Y') }} </h2>
    </div>
    <p class="text-sm text-gray-600 mb-6">
      Bienvenue dans l'interface de gestion des actes d'état civil de la Commune Rurale d'Antehiroka.
    </p>

    <!-- Statistiques clés -->
<!-- Statistiques clés (sans demandes en cours) -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mb-6">
  <div class="bg-white rounded-xl shadow p-4 flex flex-col items-start border border-gray-200">
    <h2 class="text-xs text-gray-500 uppercase">Naissances</h2>
    <p class="text-2xl font-bold text-green-600">120</p>
  </div>
  <div class="bg-white rounded-xl shadow p-4 flex flex-col items-start border border-gray-200">
    <h2 class="text-xs text-gray-500 uppercase">Mariages</h2>
    <p class="text-2xl font-bold text-blue-600">45</p>
  </div>
  <div class="bg-white rounded-xl shadow p-4 flex flex-col items-start border border-gray-200">
    <h2 class="text-xs text-gray-500 uppercase">Décès</h2>
    <p class="text-2xl font-bold text-red-600">30</p>
  </div>
</div>


    <!-- Graphique de synthèse (espace réservé) -->
    <div class="bg-white rounded-xl shadow p-4 mb-6 border border-gray-200">
      <h2 class="text-sm font-semibold text-gray-700 mb-2">Évolution mensuelle</h2>
      <div class="h-48 flex items-center justify-center text-gray-400">
        [Graphique à intégrer ici]
      </div>
    </div>

    <!-- Dernières actions -->
    <a href="{{ route("admin.history") }}">

      <div class="bg-white rounded-xl shadow p-4 mb-6 border border-gray-200">
        <h2 class="text-sm font-semibold text-gray-700 mb-2">Dernières actions</h2>
        <ul class="text-sm text-gray-600 space-y-1">
          <li>📝 Acte de naissance ajouté pour <span class="font-semibold text-gray-800">Rasoa Jean</span> - 01/06/2025</li>
          <li>💍 Acte de mariage ajouté pour <span class="font-semibold text-gray-800">Rakoto et Rasoanirina</span> - 30/05/2025</li>
          <li>⚰️ Acte de décès ajouté pour <span class="font-semibold text-gray-800">Rabe Marcel</span> - 29/05/2025</li>
        </ul>
      </div>
    </a>

    <!-- Actions rapides -->
    {{-- <div class="flex flex-wrap gap-4">
      <button class="flex-1 sm:flex-none bg-green-600 text-white px-4 py-2 rounded-xl shadow hover:bg-green-700 transition-all">
        ➕ Enregistrer un acte
      </button>
      <button class="flex-1 sm:flex-none bg-blue-600 text-white px-4 py-2 rounded-xl shadow hover:bg-blue-700 transition-all">
        🔍 Rechercher un acte
      </button>
      <button class="flex-1 sm:flex-none bg-yellow-500 text-white px-4 py-2 rounded-xl shadow hover:bg-yellow-600 transition-all">
        📥 Exporter les données
      </button>
    </div> --}}
  </main>

@endsection
