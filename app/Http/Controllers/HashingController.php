<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HashingController extends Controller
{
    public function index()
    {
        $pass = Hash::make('1234');
        dd($pass);
    }
}
