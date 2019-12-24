<?php

namespace App\Http\Controllers;

use http\Client\Curl\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        $this->validate(request(), [
            'email' => 'required',
            'password' => 'required'
        ]);
        session_start();

        $user = User::where("email", 'mesa@gmail.com')
            ->where("password", 'ventana123')
            ->first();
        $_SESSION["user"] = $user->email;
        if(isset($_SESSION["user"])){
            return view("/");
        }
    }
}
