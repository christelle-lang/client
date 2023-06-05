<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Conducteurs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conducteurs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('proprio_id');
            $table->foreign('proprio_id')->references('id')->on('proprietaires');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('create_by');
            $table->string('email');
            $table->string('password');
            $table->integer('phone1');
            $table->integer('phone2')->nullable();
            $table->string('photoCNI');
            $table->date('dateExpiCNI');
            $table->string('photoPermis');
            $table->string('dateExpiPermis');
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
