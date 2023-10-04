<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index (){
        return view ('register');
    }


    public function store (Request $request){
        $users = New User();
        $users->name =  $request->name;
        $users->email = $request->email;
        $users->password = bcrypt($request->password);
        $users->save();

        return redirect()->route('register.index');
    }
}
