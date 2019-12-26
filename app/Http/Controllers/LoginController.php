<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request){
        session_start();
        $this->validate(request(), [
            'email' => 'required',
            'password' => 'required'
        ]);
        if($request->email == "admin@admin.admin" && $request->password == "admin"){
            $_SESSION["user"]= "admin@admin.admin";
            return redirect()->to("/admin");
        }else {
            $user = User::where("email", $request->email)
                ->where("password", $request->password)
                ->first();
            if ($user != null) {
                $_SESSION["user"] = $user->email;
                return redirect()->to("/");
            } else {
                return redirect()->to("/login");
            }
        }
    }

    public function logout(){
        session_start();
        session_unset();
        return redirect()->to("/");
    }
}
