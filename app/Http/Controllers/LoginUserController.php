<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginUserController extends Controller
{
    public function index() {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

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

        return redirect('/');
    }
}
