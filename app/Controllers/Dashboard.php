<?php

namespace App\Controllers;
use App\Models\UserModel;
 
class Dashboard extends BaseController
{
    public function index()
    {
        $model = new UserModel();
        $data['pengguna'] = $model->findAll(); // Mengambil semua data pengguna dari tabel

        echo view('admin_header');
        echo view('dashboard_view', $data);
        echo view('admin_footer');
    }
    
}