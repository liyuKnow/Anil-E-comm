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
            $req->session()->put('user',$user);
            return redirect('/');
        } else {
            return "Email or passwors is not matched";
        }
    }

    function registerForm (Request $req) {
        $user = new User;

        $user->name = $req->name;
        $user->email = $req->email;
        if ($req->password == $req->confirmed_password) {
            $user->password = Hash::make($req->password);
        } else {
            return "password is not matched";
        }
        $user->save();

        return redirect('/login');
    }
}
