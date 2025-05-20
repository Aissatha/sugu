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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vendor_id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->decimal('price', 15, 2)->change();
            $table->integer('stock')->default(0);
            $table->string('image_url')->nullable();
            $table->enum('status', ['actif', 'inactif', 'en_attente'])->default('en_attente');
            $table->timestamps();

            $table->foreign('vendor_id')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //Schema::dropIfExists('products');
        Schema::table('products', function (Blueprint $table) {
            $table->integer('price')->change(); // ou ce qu’il y avait avant
        });
    }
};
