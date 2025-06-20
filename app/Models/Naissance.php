<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Naissance extends Model
{
    protected $fillable = [
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
        'lien_declarant',
        'preciser_lien',
        'numero_declarant',
        'nom_declarant',
        'prenom_declarant',
        'date_naissance_declarant',
        'nationalite_declarant',
        'lieu_naissance_declarant',
        'pays_declarant',
        'district_declarant',
        'commune_residence',
        'fokontany_residence',
        'profession_declarant',
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
        'numero_mere',
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

    ];
}
