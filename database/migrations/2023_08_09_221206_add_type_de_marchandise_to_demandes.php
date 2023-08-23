<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTypeDeMarchandiseToDemandes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('demandes', function (Blueprint $table) {
            // Ajouter une colonne pour la clé étrangère type_de_marchandise_id
            $table->unsignedBigInteger('type_de_marchandise_id')->nullable();
            $table->foreign('type_de_marchandise_id')->references('id')->on('types_de_marchandise');
        });
    }
    
    public function down()
    {
       
    }
    
  

    /**
     * Reverse the migrations.
     *
     * @return void
     */

}
