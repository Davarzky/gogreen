<?php

namespace App\Controllers;
use App\Models\ContactModel;

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
        $data = [
            'title' => 'Register | GoGreen'
        ];

        echo view('register',$data);
    }
    public function contact()
    {
        $data = [
            'title' => 'Contact | GoGreen'
        ];

        echo view('contact',$data);
    }
    public function data()
    {
        //object form contact
    $contact = new ContactModel();
    $contact->insert([
        "name"=> $this->request->getPost("name"),
        "email"=> $this->request->getPost("email"),
        "subject"=> $this->request->getPost("subject"),
        "message"=> $this->request->getPost("message"),
    ]);

     return redirect()->to('/pengguna');

    }
    
}
        
        
        
        
        
        
        
        
        
        
        
        
        
