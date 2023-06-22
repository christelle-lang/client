<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    use HasFactory;

   protected $filiable=[
        'id', 'name', 'state_id', 'country_id', 'order', 'is_default', 'is_featured', 'image', 'status', 'created_at', 'updated_at', 'slug', 'record_id'
   ];
}
