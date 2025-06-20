<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Naissance extends Model
{
    protected $fillable = [
    // Détail de l’enfant
    'nom_enfant',
    'prenom_enfant',
    'sexe',
    'date_naissance',
    'heure_naissance',
    'poids_naissance',
    'lieu_accouchement',
    'numero_enregistrement',
    'date_dressage',
    'heure_dressage',

    // Déclarant
    'lien_declarant',
    'preciser_lien',
    'numero', // c’est le champ réel dans ta migration
    'nom_declarant',
    'prenom_declarant',
    'date_naissance_declarant',
    'nationalite_declarant',
    'lieu_naissance_declarant',
    'pays_declarant',
    'district_declarant',
    'commune_residence',
    'fokontany_residence',
    'profession',

    // Mère
    'nom_mere',
    'prenom_mere',
    'date_naissance_mere',
    'nationalite_mere',
    'lieu_naissance_mere',
    'pays_mere',
    'district_mere',
    'commune_mere',
    'fokontany_mere',
    'profession_mere',
    'etat_civil_mere',
    'numero_mere',

    // Père
    'nom_pere',
    'prenom_pere',
    'date_naissance_pere',
    'nationalite_pere',
    'lieu_naissance_pere',
    'pere_meme_residence_mere',
    'pere_pays_residence',
    'pere_district_residence',
    'pere_commune_residence',
    'pere_fokontany_residence',
    'profession_pere',
    'etat_civil_pere',
    'numero_pere',
];

}
