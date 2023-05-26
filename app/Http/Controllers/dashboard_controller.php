<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dashboard_controller extends Controller
{
    public function dashboard_view(){
        return view('web.dashboard_perso');
    }
    public function reservation_view(){
        return view('web.reservation');
    }
    public function old_reservation_view(){
        return view('web.old_reservation');
    }
}
