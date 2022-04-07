<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $session = \Config\Services::session();

        if(!$session->get('isSignedIn')){
            return redirect()->to('/account/login');
        }

        return view('home');
    }
}
