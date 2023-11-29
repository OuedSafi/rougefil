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
        Schema::create('inscript', function (Blueprint $table) {
            $table->id();
            $table->string('nom_de_l_eleve', 50);
            $table->string('prenom_de_l_eleve', 50);
            $table->string('genre_de_l_eleve', 50);
            $table->string('email_de_l_eleve', 50);
            $table->string('extrait_de_naissance_de_l_eleve', 50);
            $table->string('bulletin_de_l_eleve', 50);
            $table->string('tel_du_pere', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscript');
    }
};
