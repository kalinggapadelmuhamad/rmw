<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('registerPage.register');
    }

    public function indexCompany()
    {
        return view('registerPage.registerCompany');
    }

    public function indexEmployes()
    {
        return view('registerPage.registerEmployes');
    }
}
