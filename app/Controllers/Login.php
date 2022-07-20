<?php

namespace App\Controllers;

use App\Models\LoginModel;

class Login extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->LoginModel = new LoginModel();
    }

    public function index()
    {
        return view('auth/login');
    }

    public function cek_login()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $cek = $this->LoginModel->cek_login($username, $password);

        if ((null !== ($cek['username'] == $username)) && null !== ($cek['password'] == $password)) {
            // jika username dan password benar
            session()->set('username', $cek['username']);
            session()->set('nama', $cek['nama']);
            session()->set('level', $cek['level']);

            return redirect()->to(site_url('home'));
        } else {
            // jika username dan passwor salah
            session()->setFlashdata('gagal', 'Username atau password salah!!');
            return redirect()->to(site_url('login'));
        }
    }
}
