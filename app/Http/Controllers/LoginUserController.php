<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class LoginUserController extends Controller
{
    public function index() {
        return view('login');
    }

  public function authenticate(Request $request)
{
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);

    $user = User::where('email', $credentials['email'])->first();

    if ($user && $credentials['password'] === $user->password) {
        $request->session()->regenerate();
        return redirect('/dashboardpetugas'); 
    } else {
        dd($credentials);
    }
}



    public function logout(Request $request)
    {
        Auth::logout();         

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
