<?php

namespace App\Http\Controllers;

use App\Models\User;
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
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
    
        $email = $request->input('email');
        $password = $request->input('password');
    
        $user = User::where('email', $email)->where('password', $password)->first();
    
        if ($user) {
            auth()->login($user);
            return redirect()->intended('/dashboardpetugas');
        }
    
        return back()->withInput()->with('loginError', 'Login failed. Please check your credentials.');
    }
    
    public function logout(Request $request)
    {
        Auth::logout();         

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}