<?php

namespace App\Controllers;

class Twitt extends BaseController
{
    public function post()
    {
        return view('post');
    }
    public function submitPost(){
        $twittModel = new \App\Models\Twitt();

        $session = \Config\Services::session();

        $data = [
            'body' => $this->request->getVar('body'),
            'user_id' => $session->get('user_id'),
        ];
        $twittModel->save($data);
        return redirect()->to('/home/index');
    }
}
