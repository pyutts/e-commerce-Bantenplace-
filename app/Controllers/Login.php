<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function Masuk(): string
    {
        return view('auth/login');
    }
}
