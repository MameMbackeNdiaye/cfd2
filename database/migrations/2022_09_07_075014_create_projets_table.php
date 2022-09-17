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
        Schema::create('projets', function (Blueprint $table) {
            $table->id();
            $table->string('codeProjet')->unique();
            $table->bigInteger('users_id')->unsigned();
            $table->foreign('users_id')->references('id')->on('users');
            $table->bigInteger('themes_id')->unsigned();
            $table->foreign('themes_id')->references('id')->on('themes')->onDelete('cascade');
            $table->bigInteger('owners_id')->unsigned()->nullable();
            $table->foreign('owners_id')->references('id')->on('owners');
            $table->bigInteger('commissions_id')->unsigned()->nullable();
            $table->foreign('commissions_id')->references('id')->on('commissions');
            $table->bigInteger('cagnottes_id')->unsigned()->nullable();
            $table->foreign('cagnottes_id')->references('id')->on('cagnottes');
            $table->bigInteger('contrats_id')->unsigned()->nullable();
            $table->foreign('contrats_id')->references('id')->on('contrats');
            $table->bigInteger('articles_id')->unsigned()->nullable();
            $table->foreign('articles_id')->references('id')->on('articles');
            $table->string('nom');
            $table->text('description');
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
        Schema::dropIfExists('projets');
    }
};
