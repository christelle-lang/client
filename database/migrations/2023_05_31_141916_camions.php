<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Camions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camions', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('proprio_id');
            $table->foreign('proprio_id')->references('id')->on('proprietaires');
            $table->unsignedBigInteger('conducteur_id');
            $table->foreign('conducteur_id')->references('id')->on('conducteurs');
            $table->integer('typeCamion');
            $table->text('detailCamion');
            $table->string('numImmatriculation')->unique();
            $table->unsignedInteger('capaciteDeCharge');
            $table->string('photoCamion');
            $table->string('statut');

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
        //
    }
}
