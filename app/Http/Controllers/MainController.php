<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('index');
    }

    public function categories(){
        return view('categories');
    }

    public function product($product = null) {
        return view('product', ['product' => $product]);
    }

    public function category($category){
        //return view('category', ['category' => $category]);
        return view('category', compact('category'));
    }
}
