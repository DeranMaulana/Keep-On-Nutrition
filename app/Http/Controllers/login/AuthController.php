<?php

namespace App\Http\Controllers\login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    //
    public function proses_login(Request $request) 
    {
        $valid = request()->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        if (Auth::attempt($valid)) {
                // Jika otentikasi berhasil, arahkan pengguna ke halaman dashboard
                return redirect('/main/landing_page');
            } else {
                // Jika otentikasi gagal, kembalikan pengguna ke halaman login dengan pesan error
                return redirect('/')->with('login_gagal', 'Maaf username atau password salah');
            }            
    }


    public function logout()
    {
        Auth::logout();
        return redirect('/login')->with('logout', 'Anda berhasil logout');
    }
    
      
}
