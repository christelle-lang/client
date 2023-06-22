<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyTableCamion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('camions', function (Blueprint $table) {
                $table->unsignedBigInteger('typeCamion');
                $table->foreign('typeCamion')->references('id')->on('type_camions');
            
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('camions', function (Blueprint $table) {
            //
        });
    }
}
