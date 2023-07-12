<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelUser;

class Login extends BaseController
{
    public function index()
    {
        return view('login');
    }
    public function process()
    {
        $users = new ModelUser();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $dataUser = $users->where([
            'username' => $username,
        ])->first();
       // print_r($dataUser['username']);
        if ($dataUser) {
            if ($password == $dataUser['password']) {
                session()->set([
                    'username'  => $dataUser['username'],
                    'fullname'  => $dataUser['fullname'],
                    'divisi'    => $dataUser['divisi'],
                    'logged_in' => TRUE
                ]);
                return redirect()->to(base_url('/'));
            } else {
                session()->setFlashdata('error', 'Wrong Username & Password');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'Wrong Username & Password');
            return redirect()->back();
        }
    }

    function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
