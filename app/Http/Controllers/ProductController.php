<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product($product){
        if($product == "food-beverage"){
            return view('category.food-beverage');
        }
        else if($product == "beauty-health"){
            return view('category.beauty-health');
        }
        else if($product == "home-care"){
            return view('category.home-care');
        }
        else if($product == "baby-kid"){
            return view('category.baby-kid');
        }
    }
}
