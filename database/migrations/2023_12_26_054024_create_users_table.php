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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nom_utilisateur');
            $table->string('prenom_utilisateur');
            $table->string('adresse_utilisateur');
            $table->string('email_utilisateur')->unique();
            $table->string('telephone_utilisateur');
            $table->enum('role_utilisateur', ['Admin', 'Client'])->default('Client');            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            $table->unsignedBigInteger('admin_id')->nullable();
            $table->foreign('admin_id')->references('id')->on('administrateurs');

            $table->index('email_utilisateur');

        });

        DB::statement('CREATE VIEW user_details AS SELECT id, nom_utilisateur, prenom_utilisateur, adresse_utilisateur, email_utilisateur, telephone_utilisateur, role_utilisateur FROM users');

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        DB::statement('DROP VIEW IF EXISTS user_details');
    }
};
