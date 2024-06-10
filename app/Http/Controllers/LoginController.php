<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Admin.Login.index',[
            "judul" => "Login"
        ]);
    }

    public function aunthenticate(Request $request)
    {
        $credentials = $request->validate([
            'identity' => ['required'],
            'password' => ['required'],
        ]);

        // Menentukan bidang untuk autentikasi berdasarkan apakah 'identity' adalah alamat email atau nama pengguna
        $field = filter_var($credentials['identity'], FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        $validatedData = [
            $field => $credentials['identity'],
            'password' => $credentials['password'],
        ];

        // Melakukan upaya autentikasi pengguna
        if (Auth::attempt($validatedData)) {
            // Autentikasi berhasil, arahkan pengguna ke halaman yang dimaksud
            return redirect()->intended('/Admin-Dashboard');
        } else {
            // Autentikasi gagal, kembalikan pengguna ke halaman sebelumnya dengan pesan kesalahan
            return back()->with(['LoginError' => 'Login Gagal']);
        }
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/Admin-Login');
    }

    public function show(User $user)
    {
        return view('Admin.Login.account', [ 
            "id" =>$user,
            "judul" => "Setting Account",
            "kategori" => "Account",
        ]);
    }
    public function edit(User $user)
    {
        return view('Admin.Login.account', [ 
            "id" =>$user,
            "judul" => "Setting Account",
            "kategori" => "Account",
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }
}

