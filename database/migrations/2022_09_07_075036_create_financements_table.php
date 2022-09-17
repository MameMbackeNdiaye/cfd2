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
        Schema::create('financements', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('projet_id')->unsigned()->nullable();
            $table->foreign('projet_id')->references('id')->on('projets');
            $table->string('codeFinancement');
            $table->string('nom');
            $table->float('sommeFinancee');
            $table->dateTime('dateFinancement');
            $table->boolean('etatProjet');
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
        Schema::dropIfExists('financements');
    }
};
