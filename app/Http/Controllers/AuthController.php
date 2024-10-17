<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function halLogin(){
        return view('content.login')->with(['header'=>'login']);
    }

    public function halRegister(){
        return view('content.register')->with(['header'=>'register']);

    }

    public function login(Request $request){
        $request->validate([
            'username'=>'required|min:4',
            'password'=>'required|min:8'
        ],[
            'username.required'=>'anda wajib memasuka username',
            'username.min'=>'minimal password 4 karakter',
            'password.required'=>'anda wajib memasuka password',
            'password.min'=>'minimal password 8 karakter',
        ]);

        if(Auth::attempt(['username' => $request->username, 'password' => $request->password])){
            return redirect('/product')->with(['header'=>'products','suksesLogin','anda berhasil login']);
        }else{
            return redirect('/login')->with(['header'=>'login','gagallogin','login yang anda lakukan tidak valid']);
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/halamanlogin');
    }
}
