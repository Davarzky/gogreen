<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | GoGreen'
        ];
      
        echo view('home',$data);
    }
}
        
        
        
        
        
        
        
        
        
        
        
        
        
