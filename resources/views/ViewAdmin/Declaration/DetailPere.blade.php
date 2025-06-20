@extends('App')

@section('body')
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

<main class="flex-1 bg-gray-100 min-h-screen p-6">
    <div class="max-w-2xl mx-auto" x-data="{
        fatherNotAvailable: {{ old('father_not_available') ? 'true' : 'false' }},
        // Initialize x-model for radio buttons with their actual value, e.g., 'yes' or 'no'
        fatherResidenceOption: '{{ old('father_same_residence_as_mother', 'yes') }}'
    }">

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

                {{-- Checkbox: Détail du père non disponible --}}
                <div class="flex items-center">
                    <input type="checkbox" id="father_not_available" name="father_not_available"
                           class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded"
                           x-model="fatherNotAvailable">
                    <label for="father_not_available" class="ml-2 block text-sm text-gray-900">Détails du père non disponible</label>
                </div>

                {{-- Champ pour le motif si le père n'est pas disponible --}}
                <div x-show="fatherNotAvailable" x-transition>
                    <div>
                        <label for="father_unavailable_reason" class="block text-sm font-medium text-gray-700">Motif pour ne pas inscrire le nom du père <span class="text-red-500">*</span></label>
                        <input type="text" id="father_unavailable_reason" name="father_unavailable_reason"
                               class="w-full border rounded px-3 py-2 @error('father_unavailable_reason') border-red-500 @enderror"
                               value="{{ old('father_unavailable_reason') }}"
                               x-bind:required="fatherNotAvailable">
                        @error('father_unavailable_reason')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                {{-- Champs du père, affichés si le père est disponible --}}
                <div x-show="!fatherNotAvailable" x-transition class="space-y-5">
                    <div>
                        <label for="father_nom" class="block text-sm font-medium text-gray-700">Nom <span class="text-red-500">*</span></label>
                        <input type="text" id="father_nom" name="father_nom"
                               class="w-full border rounded px-3 py-2 @error('father_nom') border-red-500 @enderror"
                               value="{{ old('father_nom') }}" x-bind:required="!fatherNotAvailable">
                        @error('father_nom')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="father_prenom" class="block text-sm font-medium text-gray-700">Prénom(s) <span class="text-red-500">*</span></label>
                        <input type="text" id="father_prenom" name="father_prenom"
                               class="w-full border rounded px-3 py-2 @error('father_prenom') border-red-500 @enderror"
                               value="{{ old('father_prenom') }}" x-bind:required="!fatherNotAvailable">
                        @error('father_prenom')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="father_date_naissance" class="block text-sm font-medium text-gray-700">Date de naissance <span class="text-red-500">*</span></label>
                        <input type="date" id="father_date_naissance" name="father_date_naissance"
                               class="w-full border rounded px-3 py-2 @error('father_date_naissance') border-red-500 @enderror"
                               value="{{ old('father_date_naissance') }}" x-bind:required="!fatherNotAvailable">
                        @error('father_date_naissance')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="father_nationalite" class="block text-sm font-medium text-gray-700">Nationalité <span class="text-red-500">*</span></label>
                        <input type="text" id="father_nationalite" name="father_nationalite"
                               class="w-full border rounded px-3 py-2 @error('father_nationalite') border-red-500 @enderror"
                               value="{{ old('father_nationalite') }}" x-bind:required="!fatherNotAvailable">
                        @error('father_nationalite')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="father_lieu_naissance" class="block text-sm font-medium text-gray-700">Lieu de naissance <span class="text-red-500">*</span></label>
                        <input type="text" id="father_lieu_naissance" name="father_lieu_naissance"
                               class="w-full border rounded px-3 py-2 @error('father_lieu_naissance') border-red-500 @enderror"
                               value="{{ old('father_lieu_naissance') }}" x-bind:required="!fatherNotAvailable">
                        @error('father_lieu_naissance')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Radio Buttons: Lieu de résidence habituel --}}
                    <div class="border-t pt-4 mt-4">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Lieu de résidence habituel <span class="text-red-500">*</span></label>
                        <div class="flex flex-col space-y-2">
                            <div class="flex items-center">
                                <input type="radio" id="father_residence_same_as_mother_yes" name="father_same_residence_as_mother" value="yes"
                                       class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300"
                                       x-model="fatherResidenceOption" x-bind:required="!fatherNotAvailable">
                                <label for="father_residence_same_as_mother_yes" class="ml-2 block text-sm text-gray-900">Même que le lieu de résidence habituel de la mère ?</label>
                            </div>
                            <div class="flex items-center">
                                <input type="radio" id="father_residence_same_as_mother_no" name="father_same_residence_as_mother" value="no"
                                       class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300"
                                       x-model="fatherResidenceOption" x-bind:required="!fatherNotAvailable">
                                <label for="father_residence_same_as_mother_no" class="ml-2 block text-sm text-gray-900">Non, spécifier un autre lieu</label>
                            </div>
                        </div>
                        @error('father_same_residence_as_mother')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Lieu de résidence du père (visible si "Non" est sélectionné) --}}
                    <div x-show="fatherResidenceOption === 'no'" x-transition>
                        <div class="space-y-5">
                            <div>
                                <label for="father_residence_pays" class="block text-sm font-medium text-gray-700">Pays <span class="text-red-500">*</span></label>
                                <input type="text" id="father_residence_pays" name="father_residence_pays"
                                       class="w-full border rounded px-3 py-2 @error('father_residence_pays') border-red-500 @enderror"
                                       value="{{ old('father_residence_pays') }}" x-bind:required="!fatherNotAvailable && fatherResidenceOption === 'no'">
                                @error('father_residence_pays')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="father_residence_district" class="block text-sm font-medium text-gray-700">District <span class="text-red-500">*</span></label>
                                <input type="text" id="father_residence_district" name="father_residence_district"
                                       class="w-full border rounded px-3 py-2 @error('father_residence_district') border-red-500 @enderror"
                                       value="{{ old('father_residence_district') }}" x-bind:required="!fatherNotAvailable && fatherResidenceOption === 'no'">
                                @error('father_residence_district')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="father_residence_commune" class="block text-sm font-medium text-gray-700">Commune <span class="text-red-500">*</span></label>
                                <input type="text" id="father_residence_commune" name="father_residence_commune"
                                       class="w-full border rounded px-3 py-2 @error('father_residence_commune') border-red-500 @enderror"
                                       value="{{ old('father_residence_commune') }}" x-bind:required="!fatherNotAvailable && fatherResidenceOption === 'no'">
                                @error('father_residence_commune')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="father_residence_fokontany" class="block text-sm font-medium text-gray-700">Fokontany <span class="text-red-500">*</span></label>
                                <input type="text" id="father_residence_fokontany" name="father_residence_fokontany"
                                       class="w-full border rounded px-3 py-2 @error('father_residence_fokontany') border-red-500 @enderror"
                                       value="{{ old('father_residence_fokontany') }}" x-bind:required="!fatherNotAvailable && fatherResidenceOption === 'no'">
                                @error('father_residence_fokontany')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div>
                        <label for="father_profession" class="block text-sm font-medium text-gray-700">Profession <span class="text-red-500">*</span></label>
                        <input type="text" id="father_profession" name="father_profession"
                               class="w-full border rounded px-3 py-2 @error('father_profession') border-red-500 @enderror"
                               value="{{ old('father_profession') }}" x-bind:required="!fatherNotAvailable">
                        @error('father_profession')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Select for État civil --}}
                    <div>
                        <label for="father_etat_civil" class="block text-sm font-medium text-gray-700">État civil <span class="text-red-500">*</span></label>
                        <select id="father_etat_civil" name="father_etat_civil"
                                class="w-full border rounded px-3 py-2 @error('father_etat_civil') border-red-500 @enderror"
                                x-bind:required="!fatherNotAvailable">
                            <option value="Célibataire" {{ old('father_etat_civil') == 'Célibataire' ? 'selected' : '' }}>Célibataire</option>
                            <option value="Marié(e)" {{ old('father_etat_civil') == 'Marié(e)' ? 'selected' : '' }}>Marié(e)</option>
                            <option value="Divorcé(e)" {{ old('father_etat_civil') == 'Divorcé(e)' ? 'selected' : '' }}>Divorcé(e)</option>
                            <option value="Veuf/Veuve" {{ old('father_etat_civil') == 'Veuf/Veuve' ? 'selected' : '' }}>Veuf/Veuve</option>
                        </select>
                        @error('father_etat_civil')
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
