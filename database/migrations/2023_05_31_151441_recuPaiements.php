<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RecuPaiements extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recuPaiements', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('demande_id');
            $table->foreign('demande_id')->references('id')->on('demandes');
            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('id')->on('clients');
            $table->string('codeDemande');
            $table->integer('montantPaye');
            $table->integer('montantAPaye');
            $table->text('tokenPaiement');
            $table->integer('restePaye');
            $table->string('codeFacture');
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
