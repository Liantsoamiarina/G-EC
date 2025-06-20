{{-- <div class="flex justify-between items-center mb-6">
  <h1 class="text-xl font-semibold flex items-center gap-2">
    <svg class="w-5 h-5 text-purple-500" fill="currentColor" viewBox="0 0 24 24">
      <path d="M6 2a2 2 0 00-2 2v16c0 1.1.9 2 2 2h12a2 2 0 002-2V7.83A2 2 0 0019.41 6L14 0H6zM13 3.5L18.5 9H14a1 1 0 01-1-1V3.5z"/>
    </svg>
    Déclaration de Naissance
  </h1> --}}
@extends('App')

@section('body')

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

        <!-- Nom -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Nom <span class="text-red-500">*</span></label>
          <input type="text" wire:model="nom_enfant" class="w-full border rounded px-3 py-2" required>
        </div>

        <!-- Prénom(s) -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Prénom(s)</label>
          <input type="text" wire:model="prenom_enfant" class="w-full border rounded px-3 py-2">
        </div>

        <!-- Sexe -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Sexe <span class="text-red-500">*</span></label>
          <select wire:model="sexe_enfant" class="w-full border rounded px-3 py-2 text-gray-700" required>
            <option disabled selected>Sélectionnez</option>
            <option>Masculin</option>
            <option>Féminin</option>
          </select>
        </div>

        <!-- Date de naissance -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Date de naissance <span class="text-red-500">*</span></label>
          <div class="grid grid-cols-3 gap-2">
            <input type="number" placeholder="dd" class="border rounded px-3 py-2" required>
            <input type="number" placeholder="mm" class="border rounded px-3 py-2" required>
            <input type="number" placeholder="yyyy" class="border rounded px-3 py-2" required>
          </div>
        </div>

        <!-- Heure de naissance -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Heure de naissance <span class="text-red-500">*</span></label>
          <div class="grid grid-cols-2 gap-2">
            <input type="number" placeholder="hh" class="border rounded px-3 py-2" required>
            <input type="number" placeholder="mm" class="border rounded px-3 py-2" required>
          </div>
        </div>

        <!-- Poids -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Poids à la naissance</label>
          <div class="flex">
            <input type="number" class="w-full border rounded px-3 py-2">
            <span class="ml-2 flex items-center text-gray-600">Grammes</span>
          </div>
        </div>

        <!-- Lieu d'accouchement -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Lieu de l'accouchement <span class="text-red-500">*</span></label>
          <input type="text" class="w-full border rounded px-3 py-2" required>
        </div>

        <!-- Numéro enregistrement -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Numéro d'enregistrement de naissance <span class="text-red-500">*</span></label>
          <input type="text" class="w-full border rounded px-3 py-2" required>
        </div>

        <!-- Date de dressage -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Date de dressage</label>
          <div class="grid grid-cols-3 gap-2">
            <input type="number" placeholder="dd" class="border rounded px-3 py-2">
            <input type="number" placeholder="mm" class="border rounded px-3 py-2">
            <input type="number" placeholder="yyyy" class="border rounded px-3 py-2">
          </div>
        </div>

        <!-- Heure de dressage -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Heure de dressage</label>
          <div class="grid grid-cols-2 gap-2">
            <input type="number" placeholder="hh" class="border rounded px-3 py-2">
            <input type="number" placeholder="mm" class="border rounded px-3 py-2">
          </div>
        </div>

<!-- Bouton -->
<div class="pt-4">
  <a href="{{ route('declarant') }}"
     class="w-full inline-block text-center bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 rounded shadow">
    Continuer
  </a>
</div>

        </div>
      </form>
    </div>
  </div>
</main>
@endsection
