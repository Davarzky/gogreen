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
       
        
            if (!$this->validate([
                'username' => [
                    'rules' => 'required|is_unique[user.username]',
                    'errors' => [
                        'required' => '{field} harus di isi',
                        'is_unique' => '{field} sudah terpakai',
                    ]
                    ],
                    'email' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => '{field} harus diisi'
                            ]
                    ],
                    'password' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => '{field} harus diisi'
                        ]
                    ],
            ])){
    
                $validation = \Config\Services::validation();
    
                session()->setFlashdata('email', $validation->getError('email'));
                session()->setFlashdata('email', $validation->getError('email'));
                session()->setFlashdata('password', $validation->getError('password'));
        return view('register');
            
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
        
        
        
        
        
        
        
        
        
        
        
        
        
