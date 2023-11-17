<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        echo view('admin_header');
        echo view('dashboard_view');
        echo view('admin_footer');
    }
}
