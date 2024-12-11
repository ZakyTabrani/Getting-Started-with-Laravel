<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Fungsi untuk menampilkan halaman register
    public function showSignupForm()
    {
        return view('signup');
    }

    // Fungsi untuk memproses data register
    public function signup(Request $request)
    {
        // Validasi data input
        $data = $request->all();
        
        // Simpan data pengguna ke session
        session()->put('user', $data);
        
        // Redirect ke halaman login setelah sukses mendaftar
        return redirect('/signin')->with('success', 'Signup Successful!');
    }

    // Fungsi untuk menampilkan halaman login
    public function showSigninForm()
    {
        return view('signin');
    }

    // Fungsi untuk memproses data login
    public function signin(Request $request)
    {
        // Ambil data dari session
        $user = session()->get('user');
        
        // Periksa apakah data login cocok dengan data di session
        if ($user && $user['email'] === $request->input('email') && $user['password'] === $request->input('password')) {
            // Simpan status login ke session
            session()->put('user', ['is_login' => true, 'email' => $user['email']]);
            
            return redirect('/profile')->with('success', 'Login Successful!');
        }
        
        // Jika gagal login
        return redirect('/signin')->with('error', 'Invalid credentials');
    }
}
