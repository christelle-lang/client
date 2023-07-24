<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableMontant extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('montants', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('villeEnlevement_id');
            $table->foreign('villeEnlevement')->references('id')->on('villes');
            $table->unsignedBigInteger('villeLivraison_id');
            $table->foreign('villeLivraison')->references('id')->on('villes');
            $table->unsignedBigInteger('type_id');
            $table->foreign('type_id')->references('id')->on('typecamions');
            $table->string('montant');

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
