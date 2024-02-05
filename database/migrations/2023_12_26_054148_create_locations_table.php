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
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->date('date_debut_location');
            $table->date('date_fin_location');
            $table->decimal('montant_total_location');
            $table->date('date_reserve_location');
            $table->string('status_location');
            $table->timestamps();

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('voiture_id');
            $table->unsignedBigInteger('paiement_id')->nullable();
            $table->unsignedBigInteger('retard_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('voiture_id')->references('id')->on('voitures');
            $table->foreign('paiement_id')->references('id')->on('paiements');
            $table->foreign('retard_id')->references('id')->on('retard_retour_voitures');

            $table->index('date_debut_location');



        });

        DB::statement('CREATE VIEW location_details AS SELECT id, date_debut_location, date_fin_location, montant_total_location FROM locations');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locations');
        DB::statement('DROP VIEW IF EXISTS location_details');
    }
};
