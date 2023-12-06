<?php

namespace App\Controllers;
use App\Models\ContactModel;
use App\Models\UserModel;
class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | GoGreen'
        ];
      
        echo view('home',$data);
    }
    public function login()
    {
        $data = [
            'title' => 'Login | GoGreen'
        ];

        echo view('login',$data);
    }
    public function register()
    {
        $model = new UserModel();

        // ... kode lainnya
    
        $validationRules = [
            'username' => [
                'rules' => 'required|alpha_numeric|min_length[3]|is_unique[users.username]',
                'errors' => [
                    'is_unique' => 'Username sudah digunakan.',
                ],
            ],
            'email' => [
                'rules' => 'required|valid_email|is_unique[users.email]',
                'errors' => [
                    'is_unique' => 'Email sudah digunakan.',
                ],
            ],
            // ... aturan validasi lainnya
        ];
    
        if ($this->validate($validationRules)) {
            // Lanjutkan dengan proses registrasi atau apa pun yang Anda lakukan
        } else {
            // Validasi gagal, kembalikan pesan kesalahan atau tindakan yang sesuai
            return redirect()->to('register')->withInput()->with('validation', $this->validator);
        }
    }
    public function contact()
    {
        $data = [
            'title' => 'Contact | GoGreen'
        ];

        echo view('contact',$data);
    }
 
}
        
        
        
        
        
        
        
        
        
        
        
        
        
