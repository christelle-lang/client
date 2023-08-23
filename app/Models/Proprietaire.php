<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proprietaire extends Model
{
    use HasFactory;

    protected $filiable=[ 
        'id', 'create_by', 'name', 'user_id', 'region_id', 'ville_id', 'email', 'phone1', 'phone2', 'password', 'photoCNI', 'dateExpi', 'statut', 'created_at', 'updated_at'
    ];
}
