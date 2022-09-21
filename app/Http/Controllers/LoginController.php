<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('loginPage.login');
    }

    public function indexCompany()
    {
        return view('loginPage.loginCompany');
    }

    public function companyLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        $email      = $request->input('email');
        $password   = $request->input('password');

        if (auth()->attempt(['email' => $email, 'password' => $password])) {
            return redirect()->route('dashboard.company');
        }

        return redirect()->route('login.company')->withErrors([
            'error' => 'Email atau password salah'
        ]);
    }

    public function indexEmployes()
    {
        return view('loginPage.loginEmploye');
    }
}
