<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Product;
Use App\Models\Cart;
use App\Models\Order;
use App\Models\User;
use Session;
use Illuminate\Support\Facades\DB;



class ProductController extends Controller
{
    //
    function index () {
        $data = Product::all();
        return view('products/product', ["products"=>$data]);
    }
    function detail ($id) {
        $data = Product::find($id);
        // return $data;
        return view('products/detail',["product"=>$data]);
    }
    function search (Request $req) {
        $data = Product::where('name', 'like', '%'.$req->searchKey.'%')->get();
        return view('products/search', ["results"=>$data]);
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
            return view('products/cartlist',['cartItems'=>$product]);
        } else {
            return redirect('/login');
        }
        
    }
    function RemoveFromCart ($id) {
        Cart::destroy($id);
        return redirect('/cartlist');
    }
    function orderNow () {
        if (Session::has('user')) {
            $userId = Session::get('user')['id'];
            $price = DB::table('cart')
            ->join('products', 'cart.product_id', '=', 'products.id')
            ->where('cart.user_id', $userId)
            ->sum('products.price');

            return view('products/ordernow',['price'=>$price]);
        } else {
            return redirect('/login');
        }
    }
    function placeOrder(Request $req) {
        $user_id = Session::get('user')['id'];
        $allCart = Cart::where('user_id', $user_id)->get();

        foreach($allCart as $item) {
            $order = new Order;

            $order->product_id = $item['product_id'];
            $order->user_id = $item['user_id'] ;
            $order->status = "Pending";
            $order->payment_method = $req->payment;
            $order->payment_status = "Pending";
            $order->adress = $req->address;

            $order->save();

            $allCart = Cart::where('user_id', $user_id)->delete();

        }
        return redirect('/');
    }

    function myOrders () {
        if (Session::has('user')) {
            $userId = Session::get('user')['id'];
            $orders = DB::table('orders')
            ->join('products', 'orders.product_id', '=', 'products.id')
            ->where('orders.user_id', $userId)
            ->get();

            return view('products/myorders',['orders'=>$orders]);
        } else {
            return redirect('/login');
        }
    }
    
}
