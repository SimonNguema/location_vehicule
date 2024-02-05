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
        Schema::create('voitures', function (Blueprint $table) {
            $table->id();
            $table->string('marque_voiture');
            $table->string('model_voiture');
            $table->integer('annee');
            $table->string('description')->nullable;
            $table->decimal('prix_jour_voiture');
            $table->boolean('disponibilite_voiture')->default(true);
            $table->string('image');
            $table->timestamps();

            $table->index('marque_voiture');
        });

        DB::statement('CREATE VIEW voiture_details AS SELECT id, marque_voiture, model_voiture, annee, prix_jour_voiture, disponibilite_voiture FROM voitures');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voitures');
        DB::statement('DROP VIEW IF EXISTS voiture_details');
    }
};
