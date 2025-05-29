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

                $table->foreignId('user_id')->constrained()->onDelete('cascade'); // ✅ nécessaire
    $table->string('nom');
    $table->string('adresse')->nullable();
    $table->string('phone')->nullable();
    $table->string('email')->nullable();
    $table->string('logo')->nullable();
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
