<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Proprietaires extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proprietaires',function(Blueprint $table){
            $table->id();
            $table->string('create_by')->default('proprietaire');
            $table->string('name');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('email')->unique()->nullable()->email();
            $table->integer('phone1');
            $table->integer('phone2')->nullable();
            $table->string('password');
            $table->string('photoCNI');
            $table->date('dateExpi');
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
