<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController
{
    // =========================
    // HALAMAN LOGIN
    // =========================
    public function showLogin()
    {
        return view('auth.login');
    }


    // =========================
    // PROSES LOGIN
    // =========================
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ])) {

            $request->session()->regenerate();

            return redirect()->route('home');
        }

        return back()->withErrors([
            'login' => 'Email atau password salah.'
        ])->withInput();
    }


    // =========================
    // HALAMAN REGISTER
    // =========================
    public function showRegister()
    {
        return view('auth.register');
    }


    // =========================
    // PROSES REGISTER
    // =========================
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ]);

        // Simpan user baru
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Login otomatis
        Auth::login($user);

        // Buat session baru
        $request->session()->regenerate();

        // Langsung ke beranda
        return redirect()->route('home');
    }


    // =========================
    // LOGOUT
    // =========================
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}