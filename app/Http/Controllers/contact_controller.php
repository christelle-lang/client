<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class contact_controller extends Controller
{
            public function contact_view(){

        
              return view('web.contact');
}
}