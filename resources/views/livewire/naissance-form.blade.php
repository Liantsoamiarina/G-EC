<main class="flex-1 bg-gray-100 min-h-screen p-6">
     @if ($step == 1)
  <div class="max-w-4xl mx-auto">

    <!-- En-tête -->
    <div class="flex justify-between items-center mb-6">
      <h1 class="text-xl font-semibold flex items-center gap-2">
        <svg class="w-5 h-5 text-purple-500" fill="currentColor" viewBox="0 0 24 24">
          <path d="M6 2a2 2 0 00-2 2v16c0 1.1.9 2 2 2h12a2 2 0 002-2V7.83A2 2 0 0019.41 6L14 0H6zM13 3.5L18.5 9H14a1 1 0 01-1-1V3.5z"/>
        </svg>
        Déclaration de Naissance
      </h1>
    </div>

    <div class="mb-6 flex items-center space-x-2">
      <a href="#" onclick="history.back()" class="text-blue-600 hover:underline flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
        Retour
      </a>
    </div>

    <!-- Formulaire -->
    <div class="bg-white rounded border shadow p-6">
      <h2 class="text-lg font-bold text-gray-800 mb-4">Détails de l'enfant</h2>
      @csrf
      <form action="#" method="post" class="space-y-5">


        <div class="space-y-4">
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Nom <span class="text-red-500">*</span></label>
            <input type="text" wire:model="nom_enfant" class="w-full border rounded px-3 py-2">
            @error('nom_enfant') <span class="text-red-500">{{ $message }}</span> @enderror
          </div>

          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Prénom(s)</label>
            <input type="text" wire:model="prenom_enfant" class="w-full border rounded px-3 py-2">
            @error('prenom_enfant') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
          </div>

          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Sexe <span class="text-red-500">*</span></label>
            <select wire:model="sexe" class="w-full border rounded px-3 py-2 text-gray-700">
              <option  selected>Sélectionnez</option>
              <option>Masculin</option>
              <option>Féminin</option>
            </select>
            @error('sexe') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
          </div>

          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Date de naissance <span class="text-red-500">*</span></label>
            <input type="date" wire:model="date_naissance" class="w-full border rounded px-3 py-2">
            @error('date_naissance') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
          </div>

          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Heure de naissance <span class="text-red-500">*</span></label>
            <input type="time" wire:model="heure_naissance" class="w-full border rounded px-3 py-2">
            @error('heure_naissance') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
          </div>

          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Poids à la naissance</label>
            <div class="flex">
              <input type="number" wire:model="poids_naissance" class="w-full border rounded px-3 py-2">
              <span class="ml-2 flex items-center text-gray-600">Grammes</span>
            </div>
            @error('poids_naissance') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
          </div>

          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Lieu de l'accouchement <span class="text-red-500">*</span></label>
            <input type="text" wire:model="lieu_accouchement" class="w-full border rounded px-3 py-2">
            @error('lieu_accouchement') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
          </div>

          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Numéro d'enregistrement de naissance <span class="text-red-500">*</span></label>
            <input type="text" wire:model="numero_enregistrement" class="w-full border rounded px-3 py-2">
            @error('numero_enregistrement') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
          </div>

          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Date de dressage</label>
            <input type="date" wire:model="date_dressage" class="w-full border rounded px-3 py-2">
            @error('date_dressage') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
          </div>

          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Heure de dressage</label>
            <input type="time" wire:model="heure_dressage" class="w-full border rounded px-3 py-2">
            @error('heure_dressage') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
          </div>

          <div class="pt-4">
            <button type="button" wire:click="nextStep"
              class="w-full inline-block text-center bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 rounded shadow">
              Continuer
            </button>
          </div>
        </div>
        @endif

     @if($step == 2)
<main class="flex-1 bg-gray-100 min-h-screen p-6">
  <div class="max-w-2xl mx-auto">
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

      <form wire:submit.prevent="submit" class="space-y-5">
        @csrf

        <div>
          <label for="lien_declarant" class="block text-sm font-medium text-gray-700 mb-1">
            Lien entre déclarant et l'enfant <span class="text-red-500">*</span>
          </label>
          <select id="lien_declarant" wire:model="lien_declarant" required class="w-full border-2 border-yellow-500 rounded px-3 py-2">
            <option value="">Sélectionner</option>
            <option value="Mère">Mère</option>
            <option value="Père">Père</option>
            <option value="Tuteur">Tuteur</option>
            <option value="Autre">Autre</option>
          </select>
          @error('lien_declarant')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
          @enderror
        </div>

        @if($lien_declarant === 'Autre')
        <div>
          <label for="preciser_lien" class="block text-sm font-medium text-gray-700 mb-1">
            Précisez le lien avec l'enfant <span class="text-red-500">*</span>
          </label>
          <input type="text" id="preciser_lien" wire:model="preciser_lien"
                 class="w-full border rounded px-3 py-2 @error('preciser_lien') border-red-500 @enderror"
                 placeholder="Grand-père, Frère, etc">
          @error('preciser_lien')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
          @enderror
        </div>
        @endif

        <div>
          <label for="numero" class="block text-sm font-medium text-gray-700 mb-1">Numéro de téléphone</label>
          <input type="tel" id="numero" wire:model="numero"
                 class="w-full border rounded px-3 py-2 @error('numero') border-red-500 @enderror">
          @error('numero')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
          @enderror
        </div>

        @if(in_array($lien_declarant, ['Autre', 'Tuteur']))
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 border-t pt-4 mt-4">
          <div>
            <label for="nom_declarant" class="block text-sm font-medium text-gray-700">Nom <span class="text-red-500">*</span></label>
            <input type="text" id="nom_declarant" wire:model="nom_declarant"
                   class="w-full border rounded px-3 py-2 @error('nom_declarant') border-red-500 @enderror">
            @error('nom_declarant')
              <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
          </div>
          <div>
            <label for="prenom_declarant" class="block text-sm font-medium text-gray-700">Prénom(s) <span class="text-red-500">*</span></label>
            <input type="text" id="prenom_declarant" wire:model="prenom_declarant"
                   class="w-full border rounded px-3 py-2 @error('prenom_declarant') border-red-500 @enderror">
            @error('prenom_declarant')
              <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
          </div>
          <div>
            <label for="date_naissance_declarant" class="block text-sm font-medium text-gray-700">Date de naissance <span class="text-red-500">*</span></label>
            <input type="date" id="date_naissance_declarant" wire:model="date_naissance_declarant"
                   class="w-full border rounded px-3 py-2 @error('date_naissance_declarant') border-red-500 @enderror">
            @error('date_naissance_declarant')
              <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
          </div>
          <div>
            <label for="nationalite_declarant" class="block text-sm font-medium text-gray-700">Nationalité <span class="text-red-500">*</span></label>
            <input type="text" id="nationalite_declarant" wire:model="nationalite_declarant"
                   class="w-full border rounded px-3 py-2 @error('nationalite_declarant') border-red-500 @enderror">
            @error('nationalite_declarant')
              <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
          </div>
          <div>
            <label for="lieu_naissance_declarant" class="block text-sm font-medium text-gray-700">Lieu de naissance <span class="text-red-500">*</span></label>
            <input type="text" id="lieu_naissance_declarant" wire:model="lieu_naissance_declarant"
                   class="w-full border rounded px-3 py-2 @error('lieu_naissance_declarant') border-red-500 @enderror">
            @error('lieu_naissance_declarant')
              <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
          </div>
          <div>
            <label for="pays_declarant" class="block text-sm font-medium text-gray-700">Pays de résidence <span class="text-red-500">*</span></label>
            <input type="text" id="pays_declarant" wire:model="pays_declarant"
                   class="w-full border rounded px-3 py-2 @error('pays_declarant') border-red-500 @enderror">
            @error('pays_declarant')
              <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
          </div>
          <div>
            <label for="district_declarant" class="block text-sm font-medium text-gray-700">District <span class="text-red-500">*</span></label>
            <input type="text" id="district_declarant" wire:model="district_declarant"
                   class="w-full border rounded px-3 py-2 @error('district_declarant') border-red-500 @enderror">
            @error('district_declarant')
              <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
          </div>
          <div>
            <label for="commune_residence" class="block text-sm font-medium text-gray-700">Commune <span class="text-red-500">*</span></label>
            <input type="text" id="commune_residence" wire:model="commune_residence"
                   class="w-full border rounded px-3 py-2 @error('commune_residence') border-red-500 @enderror">
            @error('commune_residence')
              <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
          </div>
          <div>
            <label for="fokontany_residence" class="block text-sm font-medium text-gray-700">Fokontany <span class="text-red-500">*</span></label>
            <input type="text" id="fokontany_residence" wire:model="fokontany_residence"
                   class="w-full border rounded px-3 py-2 @error('fokontany_residence') border-red-500 @enderror">
            @error('fokontany_residence')
              <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
          </div>
          <div>
            <label for="profession" class="block text-sm font-medium text-gray-700">Profession <span class="text-red-500">*</span></label>
            <input type="text" id="profession" wire:model="profession"
                   class="w-full border rounded px-3 py-2 @error('profession') border-red-500 @enderror">
            @error('profession')
              <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
          </div>
        </div>
        @endif

        <div class="pt-4 flex justify-between">
          <button type="button" wire:click="previousStep" class="btn btn-secondary">Précédent</button>
          <button type="submit" class="btn btn-primary">Suivant</button>
        </div>
      </form>
    </div>
  </div>
</main>
@endif

      </form>
    </div>
  </div>
</main>
