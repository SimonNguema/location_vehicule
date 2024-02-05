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
        Schema::create('administrateurs', function (Blueprint $table) {
            $table->id();
            $table->string('nom_admin');
            $table->string('prenom_admin');
            $table->string('email_utilisateur')->unique();
            $table->string('telephone_admin');
            $table->integer('niveau_acces');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password_admin');
            $table->rememberToken();

            $table->timestamps();

            $table->index('email_utilisateur');
        });
        DB::statement('CREATE VIEW administrateur_details AS SELECT id, nom_admin, prenom_admin, email_utilisateur, telephone_admin FROM administrateurs');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('administrateurs');
        DB::statement('DROP VIEW IF EXISTS administrateur_details');
    }
};
