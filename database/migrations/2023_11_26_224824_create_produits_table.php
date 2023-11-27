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
        Schema::disableForeignKeyConstraints();
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('image');
            $table->integer('montant')->nullable();
            $table->string('description')->nullable();
            $table->unsignedBigInteger('styliste_id');
            $table->foreign('styliste_id')->references('id')->on('stylistes');
            $table->unsignedBigInteger('categorie_id');
            $table->foreign('categorie_id')->references('id')->on('categories');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produits');
    }
};
