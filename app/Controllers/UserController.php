<?php

namespace App\Controllers;

class UserController extends BaseController
{
    public function landingPage()
    {
        return view('user/home-dashboard');
    }
}
