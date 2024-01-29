<?php

namespace App\Http\Controllers\login;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class DaftarController extends Controller
{
    public function index()
    {
        return view('login/daftar');
    }
    public function store(Request $request)
{
    // Cek apakah username sudah ada
    $cek_username = User::where('username', $request->username)->first();

    if ($cek_username) {
        // Jika username sudah ada, kembali ke halaman daftar dengan pesan error
        return redirect('/daftar')->with('username_ada', 'Username sudah digunakan.');
    }

    // Jika username belum ada, lakukan validasi dan pendaftaran seperti biasa
    $request->validate([
        'nama' => 'required|max:255',
        'alamat' => 'required',
        'no_hp' => 'required',
        'username' => 'required|unique:users', // Pastikan username unik
        'password' => 'required|min:6',
    ],
    [
        'nama.required' => 'Nama belum diisi',
        'alamat.required' => 'Alamat belum diisi',
        'no_hp.required' => 'No Handphone belum diisi',
        'username.required' => 'Username belum diisi',
        'password.required' => 'Password belum diisi',
    ]);

    // Buat pengguna baru
    $user = DB::table('users')->insert([
        'nama' => $request->nama,
        'alamat' => $request->alamat,
        'no_hp' => $request->no_hp,
        'username' => $request->username,
        'password' => Hash::make($request->password),
    ]);

    return redirect('/login')->with('daftar_berhasil', 'Pendaftaran berhasil!');
}


}