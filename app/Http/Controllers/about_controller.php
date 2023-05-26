<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class about_controller extends Controller
{
    public function about(){
        return view("web.about");
    }
}
