<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    // Hiển thị form đăng nhập
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Xử lý đăng nhập
    public function login(Request $request)
    {
        // Validate dữ liệu đầu vào
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Thử xác thực bằng Auth::attempt()
        if (Auth::attempt($credentials)) {
            // Nếu xác thực thành công, chuyển hướng tới trang /sinhvien
            return redirect()->route('sinhvien.index');
        }

        // Nếu không thành công, trả về thông báo lỗi
        return back()->withErrors(['username' => 'Thông tin đăng nhập không đúng']);
    }

    // Đăng xuất
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
