<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\ProductCollection;
use App\Http\Resources\ProductResource;
use App\Http\Resources\Products;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    //
    public function index(){
//        return Product::all();
        //return new ProductResource(User::all());
        return ProductResource::collection(Product::all());
    }

    public function show($id){
       // return Product::find($id);
        return new ProductResource(Product::find($id));
    }


}
