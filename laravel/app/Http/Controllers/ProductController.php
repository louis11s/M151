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
    public function cartAdd($id){
        if(session('cart') !== null){
            $array = session('cart');
            array_push($array, $id);
            session(['cart' => $array]);
        }else{
            session(['cart' => []]);
        }
    }
    public function cartOpen(){
        $products = \App\Models\Product::all();

        $cartIds = session('cart');
        $cartProducts = [];

        foreach($cartIds as $cartId){
            foreach($products as $product){
                if($product->id == $cartId){
                    array_push($cartProducts, $product);
                }
            }
        }

        return view('cart', ['products' => $cartProducts]);
    }
    public function login(){
        return view('login');
    }
}
