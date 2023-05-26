<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class shop_controller extends Controller
{
    public function shop(){
        return view('web.shop');
    }
    public function shop_detail(){
        return view('web.shop-details');
    }
    public function shop_panier(){
        return view('web.cart');
    }
}
