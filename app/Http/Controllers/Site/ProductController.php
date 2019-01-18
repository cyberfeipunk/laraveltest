<?php

namespace App\Http\Controllers\Site;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return $products;
    }

    public function show($id){
        return Product::find($id);
    }
}
