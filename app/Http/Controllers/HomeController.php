<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home.index');
    }

    public function addToCart(){
        return view(('home.add-to-cart'));
    }
    public function wishlist(){
        return view('home.wishlist');
    }
    public function order(){
        return view(('home.order'));
    }
    public function deliverinfo(){
        return view('home.deliver-info');
    }
    public function productdetail(){
        return view('home.product-detail');
    }

}
