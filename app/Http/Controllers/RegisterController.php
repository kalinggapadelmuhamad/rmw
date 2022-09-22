<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('RegisterPage.register');
    }

    public function indexCompany()
    {
        return view('RegisterPage.registerCompany');
    }

    public function companyRegister(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
            'company_name' => 'required',
            'admin_name' => 'required',
            'phone_number' => 'required',
            'country' => 'required',
            'city' => 'required',
            'zip' => 'required',
            'company_address' => 'required',
        ]);

        $company = Company::create(['companyname' => $request->input('company_name')]);

        // dd($company->id);

        $user = User::create([
            'name' => $request->input('admin_name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'companyid' => $company->id,
        ]);

        return redirect()->route('login.company')->with('success', 'Register Success');
    }

    public function indexEmployes()
    {
        return view('RegisterPage.registerEmployes');
    }

    public function employeeRegister(Request $request)
    {
        $request->validate([
            'company_id' => 'required|exists:companies,id',
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
        ]);

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'companyid' => $request->input('company_id'),
        ]);

        return redirect()->route('login.employes')->with('success', 'Register Success');
    }
}
