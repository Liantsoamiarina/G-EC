<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('naissances', function (Blueprint $table) {
            $table->id();

            //detail de l'enfant
            $table->string('nom_enfant');
            $table->string('prenom_enfant');
            $table->string('sexe'); // 'M' pour masculin, 'F' pour féminin
            $table->date('date_naissance');
            $table->time('heure_naissance')->nullable();
            $table->string('poids_naissance')->nullable(); // Poids à la naissance
            $table->string('lieu_accouchement')->nullable(); // Lieu de l'accouchement
            $table->string('numero_enregistrement')->unique(); // Numéro d'enregistrement de la naissance
            $table->date('date_dressage')->nullable(); // Date de l'enregistrement de la naissance
            $table->time('heure_dressage')->nullable(); // Heure de l'enregistrement de la naissance


            //detail du déclarant
            $table->string('lien_declarant');
            $table->string('preciser_lien')->nullable(); // Préciser le lien si autre
            $table->string('numero')->nullable(); // Numéro de téléphone du déclarant
            $table->string('nom_declarant');
            $table->string('nom_declarant');
            $table->string('prenom_declarant');
            $table->date('date_naissance_declarant');
            $table->string('nationalite_declarant');
            $table->string('lieu_naissance_declarant');
            $table->string('pays_declarant');
            $table->string('district_declarant');
            $table->string('commune_residence');
            $table->string('fokontany_residence');
            $table->string('profession');

            //detail de la mère
            $table->string('nom_mere');
            $table->string('prenom_mere');
            $table->date('date_naissance_mere');
            $table->string('nationalite_mere');
            $table->string('lieu_naissance_mere');
            $table->string('pays_mere');
            $table->string('district_mere');
            $table->string('commune_mere'); // Commune de résidence de la mère
            $table->string('fokontany_mere'); // Fokontany de résidence de la mère
            $table->string('profession_mere');
            $table->string('numero_mere')->nullable(); // Numéro de téléphone de la mère

            //datail du père
            $table->string('nom_pere');
            $table->string('prenom_pere');
            $table->date('date_naissance_pere');
            $table->string('nationalite_pere');
            $table->string('lieu_naissance_pere');
            // Résidence du père
            $table->boolean('pere_meme_residence_mere')->default(true); // true = même que la mère
           // Champs à remplir uniquement si "Non"
            $table->string('pere_pays_residence')->nullable();
            $table->string('pere_district_residence')->nullable();
            $table->string('pere_commune_residence')->nullable();
            $table->string('pere_fokontany_residence')->nullable();








            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('naissances');
    }
};
