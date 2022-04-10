<?php

namespace App\Controllers;

use CodeIgniter\HTTP\RequestInterface;

class Follow extends BaseController
{
    public function addFollow()
    {
        $followModel = new \App\Models\Follow();

        $session = \Config\Services::session();

        $userId = $session->get('user_id');

        if (!$userId) {
            return redirect()->to('login');
        }

        $data = [
            'personA' => $userId,
            'personB' => $this->request->getVar('user')
        ];

        $followModel->save($data);

        return redirect()->to('/home/');
    }
}
