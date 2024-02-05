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
        Schema::create('contacters', function (Blueprint $table) {
            $table->id();
            $table->string('sujet_message');
            $table->longText('contenu_message');
            $table->date('date_envoi_message')->default(DB::raw('CURRENT_DATE'));
            $table->timestamps();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->index('date_envoi_message');

        });

        // Création de la vue contact_details
        DB::statement('CREATE VIEW contact_details AS SELECT id, sujet_message, date_envoi_message FROM contacters');

    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacters');
        DB::statement('DROP VIEW IF EXISTS contact_details');
    }
};
