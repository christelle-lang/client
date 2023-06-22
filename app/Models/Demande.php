<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class demande extends Model
{
    use HasFactory;
     /**
         * The attributes that are mass assignable.
         *
         * @var array<int, string>
         */
   protected $filiable=[
    'id', 'user_id', 'client_id', 'camion_id', 'typeMarchandise', 'lieuEnlevement', 'lieuExpedition', 'dateEnlevement', 'montant', 'codeDemande', 'lu', 'dateLecture', 'statutPaiement', 'statut'
   ];
}
