<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('owners', function (Blueprint $table) {
            $table->id()->nullable();
            $table->string('matricule');
            $table->string('nom');
            $table->string('prenom');
            $table->dateTime('dateNaissance');
            $table->string('sexe');
            $table->string('villeNaissance');
            $table->string('paysNaissance');
            $table->string('nationaliteNaissance');
            $table->string('pays');
            $table->integer('codePostal');
            $table->string('adresse');
            $table->string('telephone');
            $table->string('numeroCNI');
            $table->string('contactAnnex');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('owners');
    }
};
