<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{
    //
    function addProduct(Request $req)
    {
        return $req->file('file')->store('products'); //products is a folder name which file has been saved
    }
}
