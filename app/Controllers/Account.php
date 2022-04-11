<?php

namespace App\Controllers;

use CodeIgniter\HTTP\RequestInterface;

class Account extends BaseController
{
    public function login()
    {
        return view('template', ['body' => 'login']);
    }
    public function loginPost()
    {
        $session = \Config\Services::session();

        $userModel = new \App\Models\User();

        $users = $userModel->where('username',$this->request->getVar('username'))->where('password',$this->request->getVar('password'))
                    ->findAll();

        if (count($users) > 0) {
            $session->set(['user_id'=>$users[0]['id']]);
            return redirect()->to('/home/index');
        } else{
            return redirect()->to('/account/login');
        }
    }

    public function register()
    {
        return view('template', ['body' => 'register', 'hasError' => $this->request->getVar('error')]);
    }   
    public function registerPost()
    {
        $userModel = new \App\Models\User();

        $file = $this->request->getFile('profilepic');
        $newName = $file->getRandomName();
        $file->move('uploads', $newName);

        $data = [
            'username' => $this->request->getVar('username'),
            'email' => $this->request->getVar('email'),
            'password' => $this->request->getVar('password'),
            'profile_pic' => 'uploads/'. $newName
        ];

        if (!$data['username'] || !$data['email'] || !$data['password']) {
            return redirect()->to('/account/register?error=true');
        }

        $userModel->insert($data);
        return redirect()->to('/account/login');
    }

    public function logout() {
        $session = \Config\Services::session();
        $session->set('user_id',false);
        return redirect()->to('/account/login');
    }
}
