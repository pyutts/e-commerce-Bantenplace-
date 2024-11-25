<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        return view('auth/login');
    }

    public function attemptLogin()
    {
        $session = session();
        $userModel = new UserModel();

        $username = $this->request->getVar('username');
        $password = md5($this->request->getVar('password')); 
        $user = $userModel->where('username', $username)->first();

        if ($user && $user['password'] === $password) {
            $session->set([
                'id_users'  => $user['id_users'],
                'username'  => $user['username'],
                'level'     => $user['level'],
                'logged_in' => true,
            ]);

            if ($user['level'] === 'admin') {
                return redirect()->to('/admin/home-dashboard');
            } elseif ($user['level'] === 'user') {
                return redirect()->to('/user/landing-page');
            }
        }

        return redirect()->back()->with('error', 'Username atau password salah.');
    }

    public function register()
    {
        return view('auth/register');
    }

    public function attemptRegister()
    {
        $userModel = new UserModel();

        $validation = $this->validate([
            'username'  => 'required|min_length[3]|is_unique[users.username]',
            'email'     => 'required|valid_email|is_unique[users.email]',
            'password'  => 'required|min_length[6]',
            'nama'      => 'required|min_length[3]',
            'alamat'    => 'required|min_length[10]',
            'kode_pos'  => 'required|numeric|exact_length[5]',
        ]);

        if (!$validation) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $userModel->save([
            'username' => $this->request->getVar('username'),
            'email'    => $this->request->getVar('email'),
            'password' => md5($this->request->getVar('password')),
            'nama'     => $this->request->getVar('nama'),
            'alamat'   => $this->request->getVar('alamat'),
            'kode_pos' => $this->request->getVar('kode_pos'),
            'level'    => 'user',
        ]);

        return redirect()->to('/login')->with('success', 'Registrasi berhasil! Silakan login.');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
