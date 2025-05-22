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
        Schema::create('shops', function (Blueprint $table) {
            $table->id();

            // Lien vers le vendeur
            $table->foreignId('vendor_id')->constrained('users')->onDelete('cascade');

            // Informations principales
            $table->string('nom');
            $table->string('slug')->unique();

            // Informations additionnelles
            $table->text('description')->nullable();
            $table->string('localisation')->nullable();

            // Fichiers uploadés
            $table->string('logo')->nullable();
            $table->string('justificatif')->nullable();

            // Statut de validation
            $table->enum('statut', ['en_attente', 'valide', 'refuse'])->default('en_attente');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shops');
    }
};
