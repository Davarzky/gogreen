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
    public function profile()
    {
        $data = [
            'title' => 'profile | GoGreen'
        ];

        return view('/layout/profile',$data);
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
   
    helper(['form', 'url']);

    
    $model = new UserModel();

    
    $rules = [
        'username' => 'required|is_unique[users.username]',
        'email'    => 'required|valid_email|is_unique[users.email]',
        'password' => 'required|min_length[6]', 
    ];


    if ($this->validate($rules)) {
     
        $data = [
            'username' => $this->request->getPost('username'),
            'email'    => $this->request->getPost('email'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
        ];

        
        $model->save($data);

       
        return redirect()->to('Pages/');
    } else {
       
        
        return view('register', ['validation' => $this->validator]);
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
        
        
        
        
        
        
        
        
        
        
        
        
        
