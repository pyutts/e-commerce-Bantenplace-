<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function admin()
    {
        return view('Pagesadmin/home-dashboard');
    }
}
