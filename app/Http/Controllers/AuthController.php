<?php

namespace App\Http\Controllers;

use App\Models\User;
use Dotenv\Exception\ValidationException;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

// use Illuminate\Support\Facades\Log as FacadesLog;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        if (session('register')) {
            return redirect()->route('register');
        }

        return view('auth.login');
    }

    public function showRegistrationForm()
    {
        session()->flash('register', true);
        return view('auth.register');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'requered',
            'password' => 'required',
        ], [
            'email.required' => 'Email tidak boleh kosong',
            'password.required' => 'Password tidak boleh kosong',
        ]);

        $infoLogin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infoLogin)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        } else {
            return redirect('/')->withErrors('Username atau password salah');
        }
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Cek apakah email sudah ada di database
        if (User::where('email', $request->email)->exists()) {
            return redirect()->back()->withErrors([
                'email' => 'Email sudah terdaftar. Silakan gunakan email lain.',
            ])->withInput()->with('register', true);
        }

        Log::info('masuk register');

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect()->back()->with('success', 'Registrasi berhasil! Silakan login.')->with('register', false);
    }


    public function logout(Request $request)
    {
        //
    }
}
