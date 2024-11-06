<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {   
        $users = DB::table('users')->get();
        return view('admin.manajemen_pengguna.index', ['users'  => $users]);
    }

    public function loginPost(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/')->with("success", "Berhasil login! Selamat datang " . Auth::user()->name . "!");
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
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

    public function destroy($id)
    {
        $user = User::find($id);
        if($user->email == 'admin@admin.com'){
            return redirect(route('admin-manajemen-pengguna'))->with("error", "Tidak dapat menghapus akun admin!");
        }
        if ($user->delete()) {
            return redirect(route('admin-manajemen-pengguna'))->with("success", "Pengguna berhasil dihapus!");
        }
        return redirect(route('admin-manajemen-pengguna'))->with("error", "Gagal menghapus pengguna!");
    }
}
