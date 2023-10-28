<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginUserController extends Controller
{
    public function index() {
        $loginError = session('loginError');
        return view('login', compact('loginError'));
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // $credentials = [
        //     'email' => $request->input('email'),
        //     'password' => $request->input('password'),
        // ];
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboardpetugas');   
        }

        return back()->with('logingagal', 'Login gagal!');
        // return $credentials;
    }

    public function logout(Request $request)
    {
        Auth::logout();         

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login')->with('logoutSuccess', 'Berhasil log out');
    }
}
