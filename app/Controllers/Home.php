<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $session = \Config\Services::session();

        $userId = $session->get('user_id');

        if(!$userId){
            return redirect()->to('/account/login');
        }

        $userModel = new \App\Models\User();

        $users = $userModel->getAllDesc();

        $twittModel = new \App\Models\Twitt();

        $twitts = $twittModel->getAllFollowingWithUserInfo($userId);

        return view('template',['body' => 'home','recentUsers' => $users, 'recentTwitts' => $twitts]);
    }
}
