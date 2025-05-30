<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vendor_id')->constrained('users')->onDelete('cascade');
            $table->string('nom');
            $table->string('slug')->nullable();
            $table->text('description')->nullable();
            $table->string('localisation')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable(); // Si nécessaire
            $table->string('logo')->nullable();
            $table->string('justificatif')->nullable(); // Si tu gères les documents
            $table->enum('statut', ['en_attente', 'valide', 'refuse'])->default('en_attente');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('shops');
    }
};
