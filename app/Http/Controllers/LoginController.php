<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request){

        $this->validate(request(), [
            'email' => 'required',
            'password' => 'required'
        ]);
        $user = User::where("email", $request->email)
            ->where("password", $request->password)
            ->first();
        if($user != null){
            $_SESSION["email"] = $user->email;
            return redirect()->to("/");
        }

    }
}
