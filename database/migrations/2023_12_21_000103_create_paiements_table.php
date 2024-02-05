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
        Schema::create('paiements', function (Blueprint $table) {
            $table->id();
            $table->decimal('montant_paiement');
            $table->string('methode_paiement');
            $table->date('date_paiement');
            $table->timestamps();

            $table->index('date_paiement');
        });

        DB::statement('CREATE VIEW paiement_details AS SELECT id, montant_paiement, methode_paiement, date_paiement FROM paiements');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paiements');
        DB::statement('DROP VIEW IF EXISTS paiement_details');
    }
};
