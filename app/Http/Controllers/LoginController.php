<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show(){
        return view('layout.auth.login', [
            'title' => 'Login Page'
        ]);
    }

    public function register(){
        return view('layout.auth.register', [
            'title' => 'Register Page'
        ]);
    }

    public function create(Request $request){
        $user = $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'no_phone' => 'required|'
        ]);

        $user['password'] = bcrypt($user['password']);

        User::create($user);

        $request->session()->flash('success', 'Registarasi Berhasil');

        return redirect('/login');
     
    }

    public function login(Request $request){
        
        $credential = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($credential)){
            $request->session()->regenerate();
            return redirect()->intended('/dasbord');
        }

        return back()->with('loginGagal', 'Login Gagal');

    }
}
