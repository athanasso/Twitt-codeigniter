<?php

namespace App\Controllers;

use CodeIgniter\HTTP\RequestInterface;

class Account extends BaseController
{
    public function login()
    {
        return view('login');
    }
    public function loginPost()
    {
        $session = \Config\Services::session();
        $userModel = new \App\Models\User();

        $users = $userModel->where('username',$this->request->getVar('username'))->where('password',$this->request->getVar('password'))
                    ->findAll();
        if (count($users) > 0) {
            $session->set(['isSignedIn'=>true]);
            return redirect()->to('/home/index');
        } else{
            return redirect()->to('/account/login');
        }
    }

    public function register()
    {
        return view('register');
    }   
    public function registerPost()
    {
        $userModel = new \App\Models\User();
        $data = [
            'username' => $this->request->getVar('username'),
            'email' => $this->request->getVar('email'),
            'password' => $this->request->getVar('password')
        ];

        $userModel->insert($data);
        return view('login');
    }
    public function profile()
    {
        return view('profile');
    }
}
