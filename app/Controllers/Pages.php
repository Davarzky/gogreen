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

    public function about()
    {
        
        $data = [
            'title' => 'About | GoGreen'
        ];
       return view('about',$data);
    }

    public function Berita()

    {
        $data = [
            'title' => 'Berita | GoGreen'
        ];
        return view('berita',$data);
    }

    public function Kontak()

    {
        $data = [
            'title' => 'Kontak | GoGreen'
        ];
        return view('k
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        ontak',$data);
    }

}