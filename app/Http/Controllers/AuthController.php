<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function LoginPage(){
        return view('auth.login');
    }

    public function login(request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password'=> 'required',
        ]);

        if(Auth::attempt($credentials)){
                return redirect()->route('dashboard')->with('success', 'login successfully');
        }

        return back()->withErrors(['email'=> 'Invalid credentials']);
    }


    public function logout(){
        Auth::logout();
        return redirect()->route('login')->with('success', 'Logout Successfully');
    }
}
