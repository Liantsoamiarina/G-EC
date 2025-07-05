<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Naissance;

class NaissanceForm extends Component
{
    public $step=1;

    public $nom_enfant;
    public $prenom_enfant;
    public $sexe;
    public $date_naissance;
    public $heure_naissance_heure;
    public $heure_naissance_minute;
    public $poids_naissance;
    public $lieu_accouchement;
    public $numero_enregistrement;
    public $date_dressage;
    public $heure_dressage;

    // Déclarant
    public $lien_declarant;
    public $preciser_lien;
    public $numero;
    public $nom_declarant;
    public $prenom_declarant;
    public $date_naissance_declarant;
    public $nationalite_declarant;
    public $lieu_naissance_declarant;
    public $pays_declarant;
    public $district_declarant;
    public $commune_residence;
    public $fokontany_residence;
    public $profession;

    // Mère
    public $nom_mere;
    public $prenom_mere;
    public $date_naissance_mere;
    public $nationalite_mere;
    public $lieu_naissance_mere;
    public $pays_mere;
    public $district_mere;
    public $commune_mere;
    public $fokontany_mere;
    public $profession_mere;
    public $etat_civil_mere;
    public $numero_mere;

    // Père
    public $nom_pere;
    public $prenom_pere;
    public $date_naissance_pere;
    public $nationalite_pere;
    public $lieu_naissance_pere;
    public $pere_meme_residence_mere = false;
    public $pere_pays_residence;
    public $pere_district_residence;
    public $pere_commune_residence;
    public $pere_fokontany_residence;
    public $profession_pere;
    public $etat_civil_pere;
    public $numero_pere;



    public function render()
    {
        return view('livewire.naissance-form');
    }


    public function nextStep()
    {
        if($this->step == 1){
            $this->validate([
                'nom_enfant' => 'required|string',
                'prenom_enfant' => 'nullable|string',
                'sexe' => 'required',
                'date_naissance' => 'required|date',
                'heure_naissance_heure' => 'required|integer|min:0|max:23',
                'heure_naissance_minute' => 'required|integer|min:0|max:59',
                'poids_naissance' => 'required|numeric',
                'lieu_accouchement' => 'required',
                'numero_enregistrement' => 'required|unique:naissances,numero_enregistrement',
                'date_dressage' => 'required|date',
                'heure_dressage' => 'required',
            ]);
        }
        if($this->step == 2){
            $this->validate([
                'lien_declarant' => 'required',
                'preciser_lien' => 'nullable|string',
                'numero' => 'required|numeric',
                'nom_declarant' => 'required|string',
                'prenom_declarant' => 'required|string',
                'date_naissance_declarant' => 'required|date',
                'nationalite_declarant' => 'required|string',
                'lieu_naissance_declarant' => 'required|string',
                'pays_declarant' => 'required|string',
                'district_declarant' => 'required|string',
                'commune_residence' => 'required|string',
                'fokontany_residence' => 'required|string',
                'profession' => 'required|string',
            ]);
        }
        if($this->step == 3){
            $this->validate([
                'nom_mere' => 'required|string',
                'prenom_mere' => 'required|string',
                'date_naissance_mere' => 'required|date',
                'nationalite_mere' => 'required|string',
                'lieu_naissance_mere' => 'required|string',
                'pays_mere' => 'required|string',
                'district_mere' => 'required|string',
                'commune_mere' => 'required|string',
                'fokontany_mere' => 'required|string',
                'profession_mere' => 'required|string',
                'etat_civil_mere' => 'required|string',
                'numero_mere' => 'required|numeric',
            ]);
        }
        if($this->step == 4){
            $this->validate([
                'nom_pere' => 'required|string',
                'prenom_pere' => 'required|string',
                'date_naissance_pere' => 'required|date',
                'nationalite_pere' => 'required|string',
                'lieu_naissance_pere' => 'required|string',
                'pere_meme_residence_mere' => 'required|boolean',
                'pere_pays_residence' => 'required_if:pere_meme_residence_mere,false|string',
                'pere_district_residence' => 'required_if:pere_meme_residence_mere,false|string',
                'pere_commune_residence' => 'required_if:pere_meme_residence_mere,false|string',
                'pere_fokontany_residence' => 'required_if:pere_meme_residence_mere,false|string',
                'profession_pere' => 'required|string',
                'etat_civil_pere' => 'required|string',
                'numero_pere' => 'required|numeric',
            ]);
        }
        $this->step++;
    }
        public function previousStep(){
            $this->step--;
        }

        public function submit()
        {
            $this->validate([
                // Étape 1
                'nom_enfant' => 'required|string',
                'prenom_enfant' => 'nullable|string',
                'sexe' => 'required',
                'date_naissance' => 'required|date',
                'heure_naissance_heure' => 'required|integer|min:0|max:23',
                'heure_naissance_minute' => 'required|integer|min:0|max:59',
                'poids_naissance' => 'required|numeric',
                'lieu_accouchement' => 'required',
                'numero_enregistrement' => 'required|unique:naissances,numero_enregistrement',
                'date_dressage' => 'required|date',
                'heure_dressage' => 'required',

                // Étape 2
                'lien_declarant' => 'required',
                'preciser_lien' => 'nullable|string',
                'numero' => 'required|numeric',
                'nom_declarant' => 'required|string',
                'prenom_declarant' => 'required|string',
                'date_naissance_declarant' => 'required|date',
                'nationalite_declarant' => 'required|string',
                'lieu_naissance_declarant' => 'required|string',
                'pays_declarant' => 'required|string',
                'district_declarant' => 'required|string',
                'commune_residence' => 'required|string',
                'fokontany_residence' => 'required|string',
                'profession' => 'required|string',

                // Étape 3
                'nom_mere' => 'required|string',
                'prenom_mere' => 'required|string',
                'date_naissance_mere' => 'required|date',
                'nationalite_mere' => 'required|string',
                'lieu_naissance_mere' => 'required|string',
                'pays_mere' => 'required|string',
                'district_mere' => 'required|string',
                'commune_mere' => 'required|string',
                'fokontany_mere' => 'required|string',
                'profession_mere' => 'required|string',
                'etat_civil_mere' => 'required|string',
                'numero_mere' => 'required|numeric',

                // Étape 4
                'nom_pere' => 'required|string',
                'prenom_pere' => 'required|string',
                'date_naissance_pere' => 'required|date',
                'nationalite_pere' => 'required|string',
                'lieu_naissance_pere' => 'required|string',
                'pere_meme_residence_mere' => 'required|boolean',
                'pere_pays_residence' => 'required_if:pere_meme_residence_mere,false|string',
                'pere_district_residence' => 'required_if:pere_meme_residence_mere,false|string',
                'pere_commune_residence' => 'required_if:pere_meme_residence_mere,false|string',
                'pere_fokontany_residence' => 'required_if:pere_meme_residence_mere,false|string',
                'profession_pere' => 'required|string',
                'etat_civil_pere' => 'required|string',
                'numero_pere' => 'required|numeric',
        ]);

            $heure_naissance = sprintf('%02d:%02d:00', $this->heure_naissance_heure, $this->heure_naissance_minute);

            Naissance::create([
                'nom_enfant' => $this->nom_enfant,
                'prenom_enfant' => $this->prenom_enfant,
                'sexe' => $this->sexe,
                'date_naissance' => $this->date_naissance,
                'heure_naissance' => $heure_naissance,
                'poids_naissance' => $this->poids_naissance,
                'lieu_accouchement' => $this->lieu_accouchement,
                'numero_enregistrement' => $this->numero_enregistrement,
                'date_dressage' => $this->date_dressage,
                'heure_dressage' => $this->heure_dressage,

                // Déclarant
                'lien_declarant' => $this->lien_declarant,
                'preciser_lien' => $this->preciser_lien,
                'numero' => $this->numero,
                'nom_declarant' => $this->nom_declarant,
                'prenom_declarant' => $this->prenom_declarant,
                'date_naissance_declarant' => $this->date_naissance_declarant,
                'nationalite_declarant' => $this->nationalite_declarant,
                'lieu_naissance_declarant' => $this->lieu_naissance_declarant,
                'pays_declarant' => $this->pays_declarant,
                'district_declarant' => $this->district_declarant,
                'commune_residence' => $this->commune_residence,
                'fokontany_residence' => $this->fokontany_residence,
                'profession' => $this->profession,

                // Mère
                'nom_mere' => $this->nom_mere,
                'prenom_mere' => $this->prenom_mere,
                'date_naissance_mere' => $this->date_naissance_mere,
                'nationalite_mere' => $this->nationalite_mere,
                'lieu_naissance_mere' => $this->lieu_naissance_mere,
                'pays_mere' => $this->pays_mere,
                'district_mere' => $this->district_mere,
                'commune_mere' => $this->commune_mere,
            ]);

            // Logique pour enregistrer les données dans la base de données

            session()->flash('message', "Enregistrement réussi !");
            $this->reset();
            $this->step = 1;
        }
}
