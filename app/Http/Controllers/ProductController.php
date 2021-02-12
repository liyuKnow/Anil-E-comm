<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Product;

class ProductController extends Controller
{
    //
    function index () {
        $data = Product::all();
        return view('product', ["products"=>$data]);
    }
    function detail ($id) {
        $data = Product::find($id);
        // return $data;
        return view('detail',["product"=>$data]);
    }
    function search (Request $req) {
        $data = Product::where('name', 'like', '%'.$req->searchKey.'%')->get();
        return view('search', ["results"=>$data]);
    }
}
