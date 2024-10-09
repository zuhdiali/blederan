<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function forms()
    {
        return view('admin.forms');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function loginPost(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/admin-dashboard')->with("success", "Berhasil login! Selamat datang " . Auth::user()->name . "!");
        }

        return back()->withErrors([
            'email' => 'Email atau kata sandi salah.',
            'password' => 'Email atau kata sandi salah.',
        ])->withInput();
    }

    public function daftar()
    {
        return view('auth.daftar');
    }

    public function daftarPost(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            // 'password' => 'required|string|min:8|confirmed',
            'password' => 'required',
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        if ($user->save()) {
            // Auth::login($user);
            return back()->with("success", "Akun berhasil didaftarkan!");
        }
        return redirect(route('daftar'))->with("error", "Gagal mendaftar")->withInput();
    }

    public function logout()
    {
        Auth::logout();
        return redirect(route('welcome'))->with("success", "Berhasil logout!");
    }
}
