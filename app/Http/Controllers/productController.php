<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
class productController extends Controller
{
    //
    function addProduct(Request $req)
    {
       // return $req->file('file')->store('products'); //products is a folder name which file has been saved
       $product= new product;
       $product->name=$req->input('name');
       $product->price=$req->input('price');
       $product->description=$req->input('description');
       $product->filePath=$req->file('file')->store('products');
       $product->save();
       return $product;    
    }

    function list()
    {
        return Product::all();
    }
}
