<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class contact_controller extends Controller
{
            public function contact_view(){
              session(['intended_url' => url()->current()]);

        
              return view('web.contact');
}
}