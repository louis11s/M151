<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function registerOpenView(){
        return view('register');
    }

    public function register(Request $request){
        $user = new \App\Models\User;
        $email = $request->i_email;
        $password = $request->i_password;
        $confirmPassword = $request->i_confirmPassword;
        $name = $request->i_lastname;

        if($password === $confirmPassword){
            $user->name=$name;
            $user->email=$email;
            $user->password = $password;

            $user->password = password_hash($user->password, PASSWORD_DEFAULT);

            $user->save();
            return redirect('/products');
        }else{
            return view('cart');
        }
    }
}
