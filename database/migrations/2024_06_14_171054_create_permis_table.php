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
        Schema::create('permis', function (Blueprint $table) {
            $table->id();
            $table->integer('numero');
            $table->string('genre');
            $table->string('nom');
            $table->string('prenom');
            $table->date('naissance');
            $table->string('lieu');
            $table->string('adresse');
            $table->string('phone');
            $table->string('category');
            $table->string('formation');
            $table->date('date_obtention');
            $table->string('lieu_obtention');
            $table->date('date_expiration');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permis');
    }
};
