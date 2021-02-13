<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Product;
Use App\Models\Cart;
use Session;

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
    function addToCart (Request $req) {
        if($req->session()->has('user')){
            $cart = new Cart;
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect('/');
        } else {
            return redirect('/login');
        }
    }
    static function cartItem () {
        if (Session::has('user')) {
            $user_id = Session::get('user')['id'];
            return Cart::where('user_id',$user_id)->count();
        } else {
            return 0;
        }
    }
}
