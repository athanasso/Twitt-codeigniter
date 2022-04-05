<?php

namespace App\Controllers;

class Account extends BaseController
{
    public function login()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }
    public function profile()
    {
        return view('profile');
    }
}
