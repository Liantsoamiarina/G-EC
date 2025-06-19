@extends('App')

@section('body')
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

<main class="flex-1 bg-gray-100 min-h-screen p-6">
  {{-- Initialize Alpine.js with two flags: one for "Autre" specifically, and one for showing the additional declarant fields (Autre or Tuteur) --}}
  <div class="max-w-2xl mx-auto" x-data="{
      selectedRelation: '{{ old('relation_enfant', '') }}',
      get showOtherRelationInput() { return this.selectedRelation === 'Autre'; },
      get showAdditionalDeclarantFields() { return ['Autre', 'Tuteur'].includes(this.selectedRelation); }
  }">

    <div class="mb-6 flex items-center space-x-2">
      <a href="#" onclick="history.back()" class="text-blue-600 hover:underline flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
        Retour
      </a>
    </div>

    <div class="bg-white border rounded shadow p-6">
      <h2 class="text-xl font-bold text-gray-800 mb-6">Coordonnées du déclarant</h2>

      <form action="#" method="POST" class="space-y-5">
        @csrf {{-- Add this for Laravel forms! --}}

        <div>
          <label for="relation_enfant" class="block text-sm font-medium text-gray-700 mb-1">Lien entre déclarant et l'enfant <span class="text-red-500">*</span></label>
          <select id="relation_enfant" name="relation_enfant" required
                    class="w-full border-2 border-yellow-500 rounded px-3 py-2 @error('relation_enfant') border-red-500 @enderror"
                    x-model="selectedRelation"> {{-- Use x-model to bind the select value to Alpine state --}}
 {{-- Added a default empty option --}}
            <option value="Mère" {{ old('relation_enfant') == 'Mère' ? 'selected' : '' }}>Mère</option>
            <option value="Père" {{ old('relation_enfant') == 'Père' ? 'selected' : '' }}>Père</option>
            <option value="Tuteur" {{ old('relation_enfant') == 'Tuteur' ? 'selected' : '' }}>Tuteur</option>
            <option value="Autre" {{ old('relation_enfant') == 'Autre' ? 'selected' : '' }}>Autre</option>
          </select>
          @error('relation_enfant')
              <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
          @enderror
        </div>

        {{-- NEW: Input for "Autre" relation details --}}
        <div x-show="showOtherRelationInput" x-transition>
            <div>
                <label for="autre_lien_declarant_enfant" class="block text-sm font-medium text-gray-700 mb-1">Précisez le lien avec l'enfant <span class="text-red-500">*</span></label>
                <input type="text" id="autre_lien_declarant_enfant" name="autre_lien_declarant_enfant"
                       class="w-full border rounded px-3 py-2 @error('autre_lien_declarant_enfant') border-red-500 @enderror"
                       value="{{ old('autre_lien_declarant_enfant') }}"
                       x-bind:required="showOtherRelationInput" placeholder="Grand-père , Frère, etc"> {{-- Make required only when visible --}}
                @error('autre_lien_declarant_enfant')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div>
          <label for="telephone" class="block text-sm font-medium text-gray-700 mb-1">Numéro de téléphone</label>
          <input type="tel" id="telephone" name="telephone" class="w-full border rounded px-3 py-2 @error('telephone') border-red-500 @enderror" value="{{ old('telephone') }}">
          @error('telephone')
              <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
          @enderror
        </div>

        <div x-show="showAdditionalDeclarantFields" x-transition>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4 border-t pt-4 mt-4">

            <div>
              <label for="autre_nom" class="block text-sm font-medium text-gray-700">Nom <span class="text-red-500">*</span></label>
              <input type="text" id="autre_nom" name="autre_nom" class="w-full border rounded px-3 py-2 @error('autre_nom') border-red-500 @enderror" value="{{ old('autre_nom') }}" x-bind:required="showAdditionalDeclarantFields">
              @error('autre_nom')
                  <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
              @enderror
            </div>

            <div>
              <label for="autre_prenom" class="block text-sm font-medium text-gray-700">Prénom(s) <span class="text-red-500">*</span></label>
              <input type="text" id="autre_prenom" name="autre_prenom" class="w-full border rounded px-3 py-2 @error('autre_prenom') border-red-500 @enderror" value="{{ old('autre_prenom') }}" x-bind:required="showAdditionalDeclarantFields">
              @error('autre_prenom')
                  <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
              @enderror
            </div>

            <div>
              <label for="autre_date_naissance" class="block text-sm font-medium text-gray-700">Date de naissance <span class="text-red-500">*</span></label>
              <input type="date" id="autre_date_naissance" name="autre_date_naissance" class="w-full border rounded px-3 py-2 @error('autre_date_naissance') border-red-500 @enderror" value="{{ old('autre_date_naissance') }}" x-bind:required="showAdditionalDeclarantFields">
              @error('autre_date_naissance')
                  <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
              @enderror
            </div>

            <div>
              <label for="autre_nationalite" class="block text-sm font-medium text-gray-700">Nationalité <span class="text-red-500">*</span></label>
              <input type="text" id="autre_nationalite" name="autre_nationalite" class="w-full border rounded px-3 py-2 @error('autre_nationalite') border-red-500 @enderror" value="{{ old('autre_nationalite') }}" x-bind:required="showAdditionalDeclarantFields">
              @error('autre_nationalite')
                  <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
              @enderror
            </div>

            <div>
              <label for="autre_lieu_naissance" class="block text-sm font-medium text-gray-700">Lieu de naissance <span class="text-red-500">*</span></label>
              <input type="text" id="autre_lieu_naissance" name="autre_lieu_naissance" class="w-full border rounded px-3 py-2 @error('autre_lieu_naissance') border-red-500 @enderror" value="{{ old('autre_lieu_naissance') }}" x-bind:required="showAdditionalDeclarantFields">
              @error('autre_lieu_naissance')
                  <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
              @enderror
            </div>

            <div>
              <label for="autre_pays" class="block text-sm font-medium text-gray-700">Pays de résidence <span class="text-red-500">*</span></label>
              <input type="text" id="autre_pays" name="autre_pays" class="w-full border rounded px-3 py-2 @error('autre_pays') border-red-500 @enderror" value="{{ old('autre_pays') }}" x-bind:required="showAdditionalDeclarantFields">
              @error('autre_pays')
                  <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
              @enderror
            </div>

            <div>
              <label for="autre_district" class="block text-sm font-medium text-gray-700">District <span class="text-red-500">*</span></label>
              <input type="text" id="autre_district" name="autre_district" class="w-full border rounded px-3 py-2 @error('autre_district') border-red-500 @enderror" value="{{ old('autre_district') }}" x-bind:required="showAdditionalDeclarantFields">
              @error('autre_district')
                  <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
              @enderror
            </div>

            <div>
              <label for="autre_commune" class="block text-sm font-medium text-gray-700">Commune <span class="text-red-500">*</span></label>
              <input type="text" id="autre_commune" name="autre_commune" class="w-full border rounded px-3 py-2 @error('autre_commune') border-red-500 @enderror" value="{{ old('autre_commune') }}" x-bind:required="showAdditionalDeclarantFields">
              @error('autre_commune')
                  <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
              @enderror
            </div>

            <div>
              <label for="autre_fokontany" class="block text-sm font-medium text-gray-700">Fokontany <span class="text-red-500">*</span></label>
              <input type="text" id="autre_fokontany" name="autre_fokontany" class="w-full border rounded px-3 py-2 @error('autre_fokontany') border-red-500 @enderror" value="{{ old('autre_fokontany') }}" x-bind:required="showAdditionalDeclarantFields">
              @error('autre_fokontany')
                  <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
              @enderror
            </div>

            <div>
              <label for="autre_profession" class="block text-sm font-medium text-gray-700">Profession <span class="text-red-500">*</span></label>
              <input type="text" id="autre_profession" name="autre_profession" class="w-full border rounded px-3 py-2 @error('autre_profession') border-red-500 @enderror" value="{{ old('autre_profession') }}" x-bind:required="showAdditionalDeclarantFields">
              @error('autre_profession')
                  <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
              @enderror
            </div>

          </div>
        </div>

<!-- Bouton -->
<div class="pt-4">
  <a href="{{ route('detail.mere') }}"
     class="w-full inline-block text-center bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 rounded shadow">
    Continuer
  </a>
</div>

      </form>
    </div>
  </div>
</main>
@endsection
