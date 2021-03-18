<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function list() {
        $products = \App\Models\Product::all();
    
        return view('product', ['products' => $products]);
    }
    public function detail($id) {
        $products = \App\Models\Product::find($id);
        
        return view('detail', ['product' => $products]);
    }
    public function cart(){
        session(['cart' => []]);
        return view('cart', ['products' => session('cart')]);
    }
    public function cartAdd($id){
        if(session('cart') == null){
            session(['cart' => []]);
        }
        array_push(session('cart'), \App\Models\Product::find($id));
    }
}
