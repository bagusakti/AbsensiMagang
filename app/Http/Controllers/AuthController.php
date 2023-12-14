<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function Index() {
        return view('auth.page.login', [
            'title' => 'Login' 
        ]);
    }

    public function login(Request $request)
    {
        Session::flash('email', $request->email);
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ], [
            'email.required' => 'Silahkan Masukkan Email Terlebih Dahulu',
            'password.required' => 'Silahkan Masukkan Kata Sandi Terlebih Dahulu',
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($infologin)) {
            return redirect()->route('Home')->with('success', 'Berhasil Login');
        }

        return back()->withErrors([
            'email' => 'Email yang anda masukkan tidak valid',
            'password' => 'Password yang anda masukkan tidak valid'
        ])->onlyInput('email');
    }

    function logout(){
        Auth::logout();
        return redirect()->route('UserAuth');
    }

    function register() {

        return view('auth.page.register', [
            'title' => 'Daftar'
        ]);

    }

    function create(Request $request){

        Session::flash('name', $request->name);
        Session::flash('asal', $request->asal);
        Session::flash('email', $request->email);
        $request->validate([
            'name' => 'required',
            'asal' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ], [

            'name.required' => 'Silahkan Masukkan Nama Terlebih Dahulu',
            'email.required' => 'Silahkan Masukkan Email Terlebih Dahulu',
            'email.email' => 'Silahkan Masukkan Email Yang Valid',
            'email.unique' => 'Email Sudah Digunakan, Silahkan Gunakan Email Yang Lain',
            'password.required' => 'Silahkan Masukkan Kata Sandi Terlebih Dahulu',
            'password.min' => 'Minimum Password 6 Karakter',
        ]);

        $data = [
            'name' => $request->name,
            'asal' => $request->asal,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ];

        User::create($data);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($infologin)) {
            return redirect()->route('UserAuth')->with('success', 'Berhasil Membuat Akun');
        }
    }

    

}
