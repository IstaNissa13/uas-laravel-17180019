<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function showAll(){
        $dataDariModel ="Inilah datanya";
        return view('product.display',["products"=> $dataDariModel]);
    }
}