<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        try {
            $data = $request->all();
            if (User::where('email', $data['email'])->first()) {
                return redirect()->back()->with('error', 'Email đã tồn tại trong hệ thống');
            }
            $data['level'] = 1;
            $data['password'] = Hash::make($data['password']);
            User::create($data);
        } catch (Exception $exception) {
            return redirect()->back()->with('error','Lỗi: ' . $exception->getMessage());
        }
        return redirect()->back()->with('success', 'Đăng ký thành công');
    }

    public function loginUser(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Authentication successful
            if (Auth::user()->level == 2) {
                return redirect()->route('home');
            } elseif (Auth::user()->level == 1) {
                // Redirect to the admin page for level 1 users
                return redirect()->route('admin.user.list');
            }
        }
        // Authentication failed
        return back();
    }

    public function logoutUser()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
