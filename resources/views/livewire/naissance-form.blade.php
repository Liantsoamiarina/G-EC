<main class="flex-1 bg-gray-100 min-h-screen p-6">
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

       @if ($step == 1)
    <div class="space-y-4">
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Nom <span class="text-red-500">*</span></label>
          <input type="text" wire:model="nom_enfant" class="w-full border rounded px-3 py-2">
          @error('nom_enfant') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

                <!-- Prénom(s) -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Prénom(s)</label>
          <input type="text" wire:model="prenom_enfant" class="w-full border rounded px-3 py-2">
           @error('prenom_enfant') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
         <!-- Sexe -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Sexe <span class="text-red-500">*</span></label>
          <select wire:model="sexe" class="w-full border rounded px-3 py-2 text-gray-700" required>
             @error('sexe') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            <option disabled selected>Sélectionnez</option>
            <option>Masculin</option>
            <option>Féminin</option>
          </select>
        </div>

        <!-- Date de naissance -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Date de naissance <span class="text-red-500">*</span></label>
            <input type="date" wire:model="date_naissance"  class="w-full border rounded px-3 py-2" required>
             @error('date_naissance') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
          </div>
        </div>

        <!-- Heure de naissance -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Heure de naissance <span class="text-red-500">*</span></label>
                <input type="time" wire:model="heure_naissance" id="" class="w-full border rounded px-3 py-2" required>
                @error("heure_naissance") <span class="text-red-500 text-sm">{{ $message }}</span> @enderror

        </div>

        <!-- Poids -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Poids à la naissance</label>
          <div class="flex">
            <input type="number" wire:model="poids_naissance" class="w-full border rounded px-3 py-2">
            <span class="ml-2 flex items-center text-gray-600">Grammes</span>
            @error("poids_naissance")
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
          </div>
        </div>

        <!-- Lieu d'accouchement -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Lieu de l'accouchement <span class="text-red-500">*</span></label>
          <input type="text" wire:model="lieu_accouchement" class="w-full border rounded px-3 py-2" required>
          @error("lieu_accouchement")
                <span class="text-red-500 text-sm">{{ $message }}</span>
          @enderror
        </div>

        <!-- Numéro enregistrement -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Numéro d'enregistrement de naissance <span class="text-red-500">*</span></label>
          <input type="text" wire:model="numero_enregistrement" class="w-full border rounded px-3 py-2" required>
                    @error("numero_enregistrement")
                <span class="text-red-500 text-sm">{{ $message }}</span>
          @enderror
        </div>

        <!-- Date de dressage -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Date de dressage</label>
            <input type="date" wire:model="date_dressage" name="" id="" class="w-full border rounded px-3 py-2">
                      @error("date_dressage")
                <span class="text-red-500 text-sm">{{ $message }}</span>
          @enderror
        </div>

        <!-- Heure de dressage -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Heure de dressage</label>
            <input type="time" wire:model="heure_dressage" name="" id="" class="w-full border rounded px-3 py-2">
                      @error("heure_dressage")
                <span class="text-red-500 text-sm">{{ $message }}</span>
          @enderror
        </div>

     <div class="pt-4">
      <button type="button"wire:click="nextStep"
      class="w-full inline-block text-center bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 rounded shadow"> Continuer </button>
     </div>
        </div>
        @endif
{{-- Step 2: Declarant Information --}}

@if($step == 2)
<main class="flex-1 bg-gray-100 min-h-screen p-6">
  <div class="max-w-2xl mx-auto">
    <div class="mb-6 flex items-center space-x-2">
      <a href="#" wire:click="previousStep" class="text-blue-600 hover:underline flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
        Retour
      </a>
    </div>
    <div class="bg-white border rounded shadow p-6">
      <h2 class="text-xl font-bold text-gray-800 mb-6">Coordonnées du déclarant</h2>

      <div class="space-y-4">
        <!-- Lien entre déclarant et enfant -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Lien entre déclarant et l'enfant <span class="text-red-500">*</span></label>
          <select wire:model="lien_declarant" class="w-full border-2 border-yellow-500 rounded px-3 py-2">
            <option value="">Sélectionner</option>
            <option value="Mère">Mère</option>
            <option value="Père">Père</option>
            <option value="Tuteur">Tuteur</option>
            <option value="Autre">Autre</option>
          </select>
          @error('lien_declarant') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
        </div>

        <!-- Préciser le lien si "Autre" -->
        @if($lien_declarant === 'Autre')
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Précisez le lien avec l'enfant <span class="text-red-500">*</span></label>
          <input type="text" wire:model="preciser_lien" class="w-full border rounded px-3 py-2">
          @error('preciser_lien') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
        </div>
        @endif

        <!-- Numéro de téléphone -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Numéro de téléphone</label>
          <input type="tel" wire:model="numero" class="w-full border rounded px-3 py-2">
          @error('numero') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
        </div>

        <!-- Nom du déclarant -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Nom <span class="text-red-500">*</span></label>
          <input type="text" wire:model="nom_declarant" class="w-full border rounded px-3 py-2">
          @error('nom_declarant') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
        </div>

        <!-- Prénom du déclarant -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Prénom(s)</label>
          <input type="text" wire:model="prenom_declarant" class="w-full border rounded px-3 py-2">
          @error('prenom_declarant') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
        </div>

        <!-- Date de naissance du déclarant -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Date de naissance <span class="text-red-500">*</span></label>
          <input type="date" wire:model="date_naissance_declarant" class="w-full border rounded px-3 py-2">
          @error('date_naissance_declarant') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
        </div>

        <!-- Nationalité du déclarant -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Nationalité <span class="text-red-500">*</span></label>
          <input type="text" wire:model="nationalite_declarant" class="w-full border rounded px-3 py-2">
          @error('nationalite_declarant') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
        </div>

        <!-- Lieu de naissance du déclarant -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Lieu de naissance <span class="text-red-500">*</span></label>
          <input type="text" wire:model="lieu_naissance_declarant" class="w-full border rounded px-3 py-2">
          @error('lieu_naissance_declarant') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
        </div>

        <!-- Pays de résidence -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Pays de résidence <span class="text-red-500">*</span></label>
          <input type="text" wire:model="pays_declarant" class="w-full border rounded px-3 py-2">
          @error('pays_declarant') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
        </div>

        <!-- District -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">District <span class="text-red-500">*</span></label>
          <input type="text" wire:model="district_declarant" class="w-full border rounded px-3 py-2">
          @error('district_declarant') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
        </div>

        <!-- Commune -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Commune <span class="text-red-500">*</span></label>
          <input type="text" wire:model="commune_residence" class="w-full border rounded px-3 py-2">
          @error('commune_residence') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
        </div>

        <!-- Fokontany -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Fokontany <span class="text-red-500">*</span></label>
          <input type="text" wire:model="fokontany_residence" class="w-full border rounded px-3 py-2">
          @error('fokontany_residence') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
        </div>

        <!-- Profession -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Profession <span class="text-red-500">*</span></label>
          <input type="text" wire:model="profession" class="w-full border rounded px-3 py-2">
          @error('profession') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
        </div>

        <div class="pt-4 flex justify-between">
          <button type="button" wire:click="previousStep" class="btn btn-secondary">Précédent</button>
          <button type="button" wire:click="nextStep" class="btn btn-primary">Suivant</button>
        </div>
      </div>
    </div>
</div>
</main>
@endif
