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

            $table->foreignId('vendor_id')->constrained('users')->onDelete('cascade');

            $table->string('nom');
            $table->string('slug')->unique();

            $table->text('description')->nullable();
            $table->string('localisation')->nullable();

            $table->string('logo')->nullable(); // ✅ logo de la boutique
            $table->string('justificatif')->nullable(); // ✅ justificatif d'identité (uploadé)

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
