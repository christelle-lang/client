<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Clients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients',function(Blueprint $table){
            $table->id();
            $table->string('name');
            $table->string('email')->unique()->nullable()->email();
            $table->integer('phone1');
            $table->integer('phone2')->nullable();
            $table->string('password');
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
