@extends('App')

@section('body')
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

<main class="flex-1 bg-gray-100 min-h-screen p-6">
    <div class="max-w-2xl mx-auto">

        <div class="mb-6 flex items-center space-x-2">
            <a href="#" onclick="history.back()" class="text-blue-600 hover:underline flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
                Retour
            </a>
            <h2 class="text-xl font-bold text-gray-800">Coordonnées de la mère</h2>
        </div>

        <div class="bg-white border rounded shadow p-6">
            <form action="#" method="POST" class="space-y-5">
                @csrf {{-- Laravel CSRF Token --}}

                <div>
                    <label for="mother_nom" class="block text-sm font-medium text-gray-700">Nom <span class="text-red-500">*</span></label>
                    <input type="text" id="mother_nom" name="mother_nom" required
                           class="w-full border rounded px-3 py-2 @error('mother_nom') border-red-500 @enderror"
                           value="{{ old('mother_nom') }}">
                    @error('mother_nom')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="mother_prenom" class="block text-sm font-medium text-gray-700">Prénom(s) <span class="text-red-500">*</span></label>
                    <input type="text" id="mother_prenom" name="mother_prenom" required
                           class="w-full border rounded px-3 py-2 @error('mother_prenom') border-red-500 @enderror"
                           value="{{ old('mother_prenom') }}">
                    @error('mother_prenom')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="mother_date_naissance" class="block text-sm font-medium text-gray-700">Date de naissance <span class="text-red-500">*</span></label>
                    <input type="date" id="mother_date_naissance" name="mother_date_naissance" required
                           class="w-full border rounded px-3 py-2 @error('mother_date_naissance') border-red-500 @enderror"
                           value="{{ old('mother_date_naissance') }}">
                    @error('mother_date_naissance')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="mother_nationalite" class="block text-sm font-medium text-gray-700">Nationalité <span class="text-red-500">*</span></label>
                    <input type="text" id="mother_nationalite" name="mother_nationalite" required
                           class="w-full border rounded px-3 py-2 @error('mother_nationalite') border-red-500 @enderror"
                           value="{{ old('mother_nationalite') }}">
                    @error('mother_nationalite')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="mother_lieu_naissance" class="block text-sm font-medium text-gray-700">Lieu de naissance <span class="text-red-500">*</span></label>
                    <input type="text" id="mother_lieu_naissance" name="mother_lieu_naissance" required
                           class="w-full border rounded px-3 py-2 @error('mother_lieu_naissance') border-red-500 @enderror"
                           value="{{ old('mother_lieu_naissance') }}">
                    @error('mother_lieu_naissance')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="mother_pays" class="block text-sm font-medium text-gray-700">Pays de résidence <span class="text-red-500">*</span></label>
                    <input type="text" id="mother_pays" name="mother_pays" required
                           class="w-full border rounded px-3 py-2 @error('mother_pays') border-red-500 @enderror"
                           value="{{ old('mother_pays') }}">
                    @error('mother_pays')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="mother_district" class="block text-sm font-medium text-gray-700">District <span class="text-red-500">*</span></label>
                    <input type="text" id="mother_district" name="mother_district" required
                           class="w-full border rounded px-3 py-2 @error('mother_district') border-red-500 @enderror"
                           value="{{ old('mother_district') }}">
                    @error('mother_district')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="mother_commune" class="block text-sm font-medium text-gray-700">Commune <span class="text-red-500">*</span></label>
                    <input type="text" id="mother_commune" name="mother_commune" required
                           class="w-full border rounded px-3 py-2 @error('mother_commune') border-red-500 @enderror"
                           value="{{ old('mother_commune') }}">
                    @error('mother_commune')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="mother_fokontany" class="block text-sm font-medium text-gray-700">Fokontany <span class="text-red-500">*</span></label>
                    <input type="text" id="mother_fokontany" name="mother_fokontany" required
                           class="w-full border rounded px-3 py-2 @error('mother_fokontany') border-red-500 @enderror"
                           value="{{ old('mother_fokontany') }}">
                    @error('mother_fokontany')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="mother_profession" class="block text-sm font-medium text-gray-700">Profession <span class="text-red-500">*</span></label>
                    <input type="text" id="mother_profession" name="mother_profession" required
                           class="w-full border rounded px-3 py-2 @error('mother_profession') border-red-500 @enderror"
                           value="{{ old('mother_profession') }}">
                    @error('mother_profession')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="mother_telephone" class="block text-sm font-medium text-gray-700">Numéro de téléphone</label>
                    <input type="tel" id="mother_telephone" name="mother_telephone"
                           class="w-full border rounded px-3 py-2 @error('mother_telephone') border-red-500 @enderror"
                           value="{{ old('mother_telephone') }}">
                    @error('mother_telephone')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
<!-- Bouton -->
<div class="pt-4">
  <a href="{{ route('detail.pere') }}"
     class="w-full inline-block text-center bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 rounded shadow">
    Continuer
  </a>
</div>
            </form>
        </div>
    </div>
</main>
@endsection
