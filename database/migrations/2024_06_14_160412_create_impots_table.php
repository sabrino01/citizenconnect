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
        Schema::create('impots', function (Blueprint $table) {
            $table->id();
            $table->integer('code');
            $table->string('nom_complet');
            $table->string('adresse');
            $table->string('emplacement');
            $table->double('hp');
            $table->double('ht');
            $table->double('aup');
            $table->double('aut');
            $table->double('valeur_venale');
            $table->double('rom');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('impots');
    }
};
