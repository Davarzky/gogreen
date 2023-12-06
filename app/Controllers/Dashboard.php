<?php

namespace App\Controllers;
use App\Models\UserModel;
 
class Dashboard extends BaseController
{
    public function index()
    {

        echo view('template/template'); 
        
        return redirect()->to('pengguna/');

    }
    
}