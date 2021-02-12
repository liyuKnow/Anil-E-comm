<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    function login (Request $req) {
        // return $req->input();
        $user = User::where(['email'=>$req->email])->first();
        // return $user ;
        if ($user && Hash::check($req->password,$user->password)){
            // return session()->has();
            return redirect('/');
        } else {
            $req->session()->put('user',$user);
            return "Email or passwors is noy matched";
        }
    }
}
