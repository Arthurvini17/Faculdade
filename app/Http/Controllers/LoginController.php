<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }


    public function store(Request $request){
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect()->route('home.index');
        } else{
           return redirect()->route('logins.index')->with('mensagem', 'Email ou senha incorretos');
        }
    }
}
