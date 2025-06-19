@extends('App')

@section('body')
<!-- Alpine.js -->
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

<main class="flex-1 bg-gray-100 min-h-screen p-6">
  <div class="max-w-2xl mx-auto" x-data="{ estAutre: false }">

    <!-- Retour + titre -->
    <div class="mb-6 flex items-center space-x-2">
      <a href="{{ route("admin.declaration") }}" class="text-blue-600 hover:underline flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
        Retour
      </a>
    </div>

    <!-- Formulaire -->
    <div class="bg-white border rounded shadow p-6">
      <h2 class="text-xl font-bold text-gray-800 mb-6">Coordonnées du déclarant</h2>

      <form action="#" method="POST" class="space-y-5">

        <!-- Lien avec l'enfant -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Lien entre déclarant et l'enfant <span class="text-red-500">*</span></label>
          <select required class="w-full border-2 border-yellow-500 rounded px-3 py-2"
                  @change="estAutre = ['Autre', 'Tuteur'].includes($event.target.value)">

            <option>Mère</option>
            <option>Père</option>
            <option>Tuteur</option>
            <option>Autre</option>
          </select>
        </div>

        <!-- Numéro téléphone -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Numéro de téléphone</label>
          <input type="tel" name="telephone" class="w-full border rounded px-3 py-2">
        </div>

        <!-- Champs additionnels "Autre" -->
        <div x-show="estAutre" x-transition>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4 border-t pt-4 mt-4">

            <div>
              <label class="block text-sm font-medium text-gray-700">Nom *</label>
              <input type="text" name="autre_nom" class="w-full border rounded px-3 py-2">
            </div>

            <div>
              <label class="block text-sm font-medium text-gray-700">Prénom(s) *</label>
              <input type="text" name="autre_prenom" class="w-full border rounded px-3 py-2">
            </div>

            <div>
              <label class="block text-sm font-medium text-gray-700">Date de naissance *</label>
              <input type="date" name="autre_date_naissance" class="w-full border rounded px-3 py-2">
            </div>

            <div>
              <label class="block text-sm font-medium text-gray-700">Nationalité *</label>
              <input type="text" name="autre_nationalite" class="w-full border rounded px-3 py-2">
            </div>

            <div>
              <label class="block text-sm font-medium text-gray-700">Lieu de naissance *</label>
              <input type="text" name="autre_lieu_naissance" class="w-full border rounded px-3 py-2">
            </div>

            <div>
              <label class="block text-sm font-medium text-gray-700">Pays de résidence *</label>
              <input type="text" name="autre_pays" class="w-full border rounded px-3 py-2">
            </div>

            <div>
              <label class="block text-sm font-medium text-gray-700">District *</label>
              <input type="text" name="autre_district" class="w-full border rounded px-3 py-2">
            </div>

            <div>
              <label class="block text-sm font-medium text-gray-700">Commune *</label>
              <input type="text" name="autre_commune" class="w-full border rounded px-3 py-2">
            </div>

            <div>
              <label class="block text-sm font-medium text-gray-700">Fokontany *</label>
              <input type="text" name="autre_fokontany" class="w-full border rounded px-3 py-2">
            </div>

            <div>
              <label class="block text-sm font-medium text-gray-700">Profession *</label>
              <input type="text" name="autre_profession" class="w-full border rounded px-3 py-2">
            </div>

          </div>
        </div>

        <!-- Bouton continuer -->
        <div class="pt-4">
          <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 rounded shadow">
            Continuer
          </button>
        </div>

      </form>
    </div>
  </div>
</main>
@endsection
