<?php

namespace App\Controllers;

class Register extends BaseController
{
    public function Daftar(): string
    {
        return view('auth/register');
    }
}

