<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tarif extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarifs',function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('typeCamion_id');
            $table->foreign('typeCamion_id')->references('id')->on('typeCamions');
            $table->integer('prixDistance');
            $table->integer('prixPoids');
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
