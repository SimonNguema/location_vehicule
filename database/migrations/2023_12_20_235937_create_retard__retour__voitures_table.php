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
        Schema::create('retard_retour_voitures', function (Blueprint $table) {
            $table->id();
            $table->date('date_retour_prevu');
            $table->date('date_retour_retard');
            $table->decimal('montant_penalite');
            $table->string('status_retard');
            $table->text('commentaire');
            $table->timestamps();

            $table->index('date_retour_prevu');
        });

        // Création de la vue retard_retour_voiture_details
        DB::statement('CREATE VIEW retard_retour_voiture_details AS SELECT id, date_retour_prevu, status_retard FROM retard_retour_voitures');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('retard__retour__voitures');
        DB::statement('DROP VIEW IF EXISTS retard_retour_voiture_details');
    
    }
};
