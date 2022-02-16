<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function index(){
        return view('auth.index');
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'nim' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/dashboard_pengurus');
        }

        return back()->with('loginError', 'Login failed! Something went wrong...');
    }
}
