<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    public function index()
    {
        return view('halaman_auth/login');
    }

    public function login(request $request)
    {
       $request->validate([
        'username' => 'required',
        'password' => 'required|min:8'
       ], [
        'username.required' => 'Username wajib diisi',
        'password.required' => 'Password wajib diisi',
        'password.min' => 'Password minimal 8 karakter'
       ]);

       $infologin = [
        'username' => $request->username,
        'password' => $request->password
       ];

      


       if (Auth::attempt($infologin)) {
           // $request->session()->regenerate();
    if (Auth::user()->role === 'admin') {
        return redirect()->route('admin')
            ->with('success', 'Halo Admin, Anda berhasil login');
    } 
    else if (Auth::user()->role === 'user') {
        return redirect()->route('user')
            ->with('success', 'Berhasil login');
    }

} else {
    return redirect()->route('auth')
        ->withErrors('Username atau kata sandi salah');
}

      
       

    }
}
