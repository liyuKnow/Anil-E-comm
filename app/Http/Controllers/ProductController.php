<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Product;
Use App\Models\Cart;
use Session;
use Illuminate\Support\Facades\DB;


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
    function cartlist () {
        if (Session::has('user')) {
            $userId = Session::get('user')['id'];
            $product = DB::table('cart')
            ->join('products', 'cart.product_id', '=', 'products.id')
            ->where('cart.user_id', $userId)
            ->select('products.*', 'cart.id as cart_id')
            ->get();
            return view('cartlist',['cartItems'=>$product]);
        } else {
            return redirect('/login');
        }
        
    }
    function RemoveFromCart ($id) {
        Cart::destroy($id);

        return redirect('/cartlist');
    }
}
