<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

            return redirect()->route('dashboard.trial');
            // $idUser = auth()->user()->id;
            // $user = DB::table('role_members')->where('userid', $idUser)->first();
        }

        return redirect()->route('login.company')->withErrors([
            'error' => 'Email atau password salah'
        ]);
    }

    public function indexEmployes()
    {
        return view('loginPage.loginEmploye');
    }

    public function employesLogin(Request $request)
    {
        $request->validate([
            'companyid' => 'required|integer',
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        $companyId  = $request->input('companyid');
        $email      = $request->input('email');
        $password   = $request->input('password');

        if (auth()->attempt(['companyid' => $companyId, 'email' => $email, 'password' => $password])) {
            return redirect()->route('dashboard.trial');
        }

        return redirect()->route('login.employes')->withErrors([
            'error' => 'Email atau password salah'
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
    
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
