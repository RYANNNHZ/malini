<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\coment;
use App\Models\product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function halLogin(){
        return view('content.Auth.login')->with(['header'=>'login']);
    }

    public function halRegister(){
        return view('content.Auth.register')->with(['header'=>'register']);

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
            return redirect('/halamanlogin')->with(['header'=>'login','gagallogin','login yang anda lakukan tidak valid']);
        }
    }


    public function register(Request $request){
        // $request->dd();
        $request->validate([
            'username' => 'required|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8'
        ], [
            'email.required' => 'maaf anda harus memasukan email terlebih dahulu',
            'password.required' => 'maaf anda harus memasukan password terlebih dahulu',
            'username.required' => 'maaf anda harus memasukan username terlebih dahulu',
            'username.unique' => 'maaf sepertinya username yang anda masukan sudah ada mohon ganti username dengan username baru🙏',
            'email.email' => 'maaf anda  salah memasukan format email tolong masukan email dengan format yang benar',
            'email.unique' => 'maaf email yang anda masukan sudah di pakai',
            'password.min' => 'password minimal wajib 8 karakter',
        ]);


        User::create([
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'role' => 'user',
            'password' => Hash::make($request->input('password'))
            // 'password' => Hash::make($request->input('password'))
        ]);

        if(Auth::attempt(['username' => $request->username, 'password' => $request->password])){
            return redirect('/product')->with(['header'=>'products','suksesRegister','anda berhasil register']);
        }else{
            return redirect('/halamanregister')->with(['header'=>'register','gagalRegister','register yang anda lakukan tidak valid']);
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/halamanlogin');
    }


}
