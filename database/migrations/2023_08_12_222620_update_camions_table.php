<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateCamionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('camions', function (Blueprint $table) {
            $table->unsignedBigInteger('typeCamions')->nullable(); // Permettre la valeur NULL
            $table->foreign('typeCamions')->references('id')->on('typecamions')->nullOnDelete(); // Clé étrangère pour typeCamion
    
            $table->unsignedBigInteger('typeMarchandise')->nullable(); // Permettre la valeur NULL
            $table->foreign('typeMarchandise')->references('id')->on('types_de_marchandise')->nullOnDelete(); // Clé étrangère pour typeMarchandise
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
