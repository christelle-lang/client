<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Demande extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demandes', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('id')->on('clients');
            $table->unsignedBigInteger('camion_id');
            $table->foreign('camion_id')->references('id')->on('camions');
            $table->string('typeMarchandise');
            $table->string('lieuEnlevement');
            $table->string('lieuExpedition');
            $table->date('dateEnlevement');
            $table->integer('montant');
            $table->string('codeDemande');
            $table->boolean('lu');
            $table->date('dateLecture');
            $table->string('statutPaiement');
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
