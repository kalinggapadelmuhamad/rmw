<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function indexEmployes()
    {
        return view('loginPage.loginEmploye');
    }
}
