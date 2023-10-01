<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function __construct()
    {
    }

    public function index()
    {
        return view('auth/login');
    }

    public function logout()
    {
        return redirect('');
    }

    public function register()
    {
        return view('');
    }

    public function register_user()
    {
        return view('');
    }

    public function logout_user()
    {
        return redirect('');
    }

    public function login_user()
    {
        return view('');
    }
}
