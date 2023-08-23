<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conducteur extends Model
{
    use HasFactory;
    protected $filiable=['id', 'name', 'proprio_id', 'user_id', 'ville_id', 'region_id', 'create_by', 'email', 'password', 'phone1', 'phone2', 'photoCNI', 'dateExpiCNI', 'photoPermis', 'dateExpiPermis', 'statut', 'created_at', 'updated_at'];
}
