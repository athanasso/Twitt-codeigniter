<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $session = \Config\Services::session();

        if(!$session->get('user_id')){
            return redirect()->to('/account/login');
        }

        $userModel = new \App\Models\User();

        $users = $userModel->findAll();

        $twittModel = new \App\Models\Twitt();

        $twitts = $twittModel->findAll();

        return view('home', ['recentUsers' => $users, 'recentTwitts' => $twitts]);
    }
}
