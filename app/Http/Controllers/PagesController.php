<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('homepage');
    }

    public function products(){
        $products = Product::all();
        return view('products')->with('products', $products);
    }

    public function bkr(){
        return view('bkr');
    }

    public function contact(){
        return view('contact');
    }

    public function offers($id){
        $productname = Product::findOrFail($id)->name;
        return view('offers')->with(compact('productname'));
    }
}
