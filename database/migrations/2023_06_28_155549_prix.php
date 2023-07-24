<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Prix extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prix', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('depart_id');
            $table->foreign('depart_id')->references('id')->on('villes');
            $table->unsignedBigInteger('arrive_id');
            $table->foreign('arrive_id')->references('id')->on('villes');
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
