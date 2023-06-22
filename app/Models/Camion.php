<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Camion extends Model
{
    
        use HasFactory;
    
        /**
         * The attributes that are mass assignable.
         *
         * @var array<int, string>
         */
           protected $fillable = [
            'id', 'proprio_id', 'conducteur_id', 'typeCamion', 'detailCamion', 'numImmatriculation', 'capaciteDeCharge', 'photoCamion', 'statut'
           ];
    
    
}
