<?php

namespace App\Controllers;

use CodeIgniter\HTTP\RequestInterface;

class Profile extends BaseController
{
    public function viewProfile()
    {
        $session = \Config\Services::session();

        $userId = $this->request->getVar('id');

        if (!$userId) {
            $userId = $session->get('user_id');
        }

        $userModel = new \App\Models\User();

        $user = $userModel->where('id', $userId)->first();

        $twittModel = new \App\Models\Twitt();

        $twitts = $twittModel->where('user_id', $userId)->findAll();

        return view('template', ['body' => 'profile', 'user' => $user, 'twitts' => $twitts]);
    }
}
