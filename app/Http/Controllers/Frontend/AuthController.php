<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    //

    public function login()
    {
        if (Auth::check()) {
            return redirect('/'); // Jika sudah login, alihkan ke dashboard
        }
        $title = 'Masuk | SMP Islam Nurul Ulum';
        return view('frontend.auth.login', compact(['title']));
    }

    public function register()
    {
        if (Auth::check()) {
            return redirect('/'); // Jika sudah login, alihkan ke dashboard
        }
        $title = 'Registrasi | SMP Islam Nurul Ulum';
        return view('frontend.auth.register', compact(['title']));
    }

    function postLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            Alert::success('Selamat Datang!', 'Login berhasil.');

            if (Auth::user()->role == 'admin') {
                return redirect('/admin/');
            }
            return redirect('/');
        }

        Alert::error('Gagal!', 'Email atau password salah.');
        return back();
    }

    function postRegister(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'users',
            'email_verified_at' => now(),
        ]);

        Alert::success('Berhasil!', 'Registrasi berhasil, silakan login.');

        return redirect('/users/login');
    }

    function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
