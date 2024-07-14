<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('home.login', [
            "title" => 'Login | Prediksi Tanaman',
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $user = Auth::user(); // Mendapatkan instance user yang diautentikasi

            if ($user->role_id == 1) {
                // Jika role_id adalah 1, redirect ke halaman admin
                return redirect()->route('datatraining');
            } elseif ($user->role_id == 2) {
                // Jika role_id adalah 2, redirect ke halaman prediksi
                return redirect()->route('prediksi.view');
            }
        }

        return back()->with('loginErrors', 'Login failed');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function registrasi()
    {
        return view('home.register', [
            "title" => 'Registrasi | Prediksi Tanaman',
        ]);
    }

    public function addRegistrasi(Request $request)
    {
        // dd($request);
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|confirmed',
        ]);

        // Buat user baru
        $user = new User();
        $user->role_id = $request->role_id;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->email_verified_at = Carbon::now();
        $user->password = Hash::make($request->password);

        // dd($user);

        $user->save();

        if (Auth::check()) {
                return redirect()->back()->with('status', 'success')->with('message', 'Registrasi user berhasil');
        } else {
            return redirect()->route('login')->with('status', 'success')->with('message', 'Registrasi berhasil, silahkan login.');
        }

    }
}
