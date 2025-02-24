<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
{
    $user = User::where('username', $request->username)->first();

    if ($user && Hash::check($request->password, $user->password)) {
        auth()->login($user);
        return redirect('/sinhvien');
    }

    return back()->withErrors(['login' => 'Sai tài khoản hoặc mật khẩu']);
}
    
    
    public function logout()
    {
        session()->forget('is_admin');
        return redirect('/login');
    }
}
