<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login'); // Pastikan Anda membuat tampilan login di resources/views/admin/login.blade.php
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->intended('/admin/dashboard'); // Redirect ke dashboard admin
        }

        return back()->withErrors([
            'email' => 'Login failed, please check your credentials',
        ]);
    }


    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin/login');
    }
}
