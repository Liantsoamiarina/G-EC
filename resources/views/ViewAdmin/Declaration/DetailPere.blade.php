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
            <h2 class="text-xl font-bold text-gray-800">Coordonnées du père</h2>
        </div>

        <div class="bg-white border rounded shadow p-6">
            <form action="#" method="POST" class="space-y-5">
                @csrf {{-- Laravel CSRF Token --}}

                <div>
                    <label for="father_nom" class="block text-sm font-medium text-gray-700">Nom <span class="text-red-500">*</span></label>
                    <input type="text" id="father_nom" name="father_nom" required
                           class="w-full border rounded px-3 py-2 @error('father_nom') border-red-500 @enderror"
                           value="{{ old('father_nom') }}">
                    @error('father_nom')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="father_prenom" class="block text-sm font-medium text-gray-700">Prénom(s) <span class="text-red-500">*</span></label>
                    <input type="text" id="father_prenom" name="father_prenom" required
                           class="w-full border rounded px-3 py-2 @error('father_prenom') border-red-500 @enderror"
                           value="{{ old('father_prenom') }}">
                    @error('father_prenom')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="father_date_naissance" class="block text-sm font-medium text-gray-700">Date de naissance <span class="text-red-500">*</span></label>
                    <input type="date" id="father_date_naissance" name="father_date_naissance" required
                           class="w-full border rounded px-3 py-2 @error('father_date_naissance') border-red-500 @enderror"
                           value="{{ old('father_date_naissance') }}">
                    @error('father_date_naissance')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="father_nationalite" class="block text-sm font-medium text-gray-700">Nationalité <span class="text-red-500">*</span></label>
                    <input type="text" id="father_nationalite" name="father_nationalite" required
                           class="w-full border rounded px-3 py-2 @error('father_nationalite') border-red-500 @enderror"
                           value="{{ old('father_nationalite') }}">
                    @error('father_nationalite')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="father_lieu_naissance" class="block text-sm font-medium text-gray-700">Lieu de naissance <span class="text-red-500">*</span></label>
                    <input type="text" id="father_lieu_naissance" name="father_lieu_naissance" required
                           class="w-full border rounded px-3 py-2 @error('father_lieu_naissance') border-red-500 @enderror"
                           value="{{ old('father_lieu_naissance') }}">
                    @error('father_lieu_naissance')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="father_pays" class="block text-sm font-medium text-gray-700">Pays de résidence <span class="text-red-500">*</span></label>
                    <input type="text" id="father_pays" name="father_pays" required
                           class="w-full border rounded px-3 py-2 @error('father_pays') border-red-500 @enderror"
                           value="{{ old('father_pays') }}">
                    @error('father_pays')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="father_district" class="block text-sm font-medium text-gray-700">District <span class="text-red-500">*</span></label>
                    <input type="text" id="father_district" name="father_district" required
                           class="w-full border rounded px-3 py-2 @error('father_district') border-red-500 @enderror"
                           value="{{ old('father_district') }}">
                    @error('father_district')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="father_commune" class="block text-sm font-medium text-gray-700">Commune <span class="text-red-500">*</span></label>
                    <input type="text" id="father_commune" name="father_commune" required
                           class="w-full border rounded px-3 py-2 @error('father_commune') border-red-500 @enderror"
                           value="{{ old('father_commune') }}">
                    @error('father_commune')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="father_fokontany" class="block text-sm font-medium text-gray-700">Fokontany <span class="text-red-500">*</span></label>
                    <input type="text" id="father_fokontany" name="father_fokontany" required
                           class="w-full border rounded px-3 py-2 @error('father_fokontany') border-red-500 @enderror"
                           value="{{ old('father_fokontany') }}">
                    @error('father_fokontany')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="father_profession" class="block text-sm font-medium text-gray-700">Profession <span class="text-red-500">*</span></label>
                    <input type="text" id="father_profession" name="father_profession" required
                           class="w-full border rounded px-3 py-2 @error('father_profession') border-red-500 @enderror"
                           value="{{ old('father_profession') }}">
                    @error('father_profession')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="father_telephone" class="block text-sm font-medium text-gray-700">Numéro de téléphone</label>
                    <input type="tel" id="father_telephone" name="father_telephone"
                           class="w-full border rounded px-3 py-2 @error('father_telephone') border-red-500 @enderror"
                           value="{{ old('father_telephone') }}">
                    @error('father_telephone')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

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
