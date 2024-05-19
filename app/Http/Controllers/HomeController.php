<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('site.index');
    }

    public function cart(){
        return view('site.cart');
    }

    public function checkout(){
        return view('site.checkout');
    }

    public function contact(){
        return view('site.contact');
    }

    public function shop(){
        return view('site.shop');
    }
    
    public function shopDetails(){
        return view('site.shop-details');
    }
}
