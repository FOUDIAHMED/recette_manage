<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function LoginShow(){
        return view('auth.Login');
    }
    public function login(Request $request)
{
    $email = $request->input('email');
    $password = $request->input('password');
    $credentials = [
        'email' => $email,
        'password' => $password
    ];

    if (Auth::attempt($credentials)) {

        return redirect()->intended('/');
    } else {
    
        return back()->withErrors([
            'email' => 'Les informations d\'identification fournies ne correspondent pas à nos enregistrements.'
        ])->withInput($request->only('email', 'remember'));
    }

}



    public function Register(){

    }
}
