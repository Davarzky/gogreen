<?php

namespace App\Controllers;
use App\Models\ContactModel;
 
class ContactController extends BaseController
{
    
        public function index()
        {   
            $data = [
            'title' => 'Halaman Contact',
        ];

            $model = new ContactModel();
            $data['contact'] = $model->findAll();
    
            return view('contact/index', $data);
        }
        public function create()
        {
            return view('contact/create');
        }
    
        public function save()
    {
        $model = new ContactModel(); 
        
        $data = [
            'name' => $this->request->getPost('name'),
            'email'    => $this->request->getPost('email'),
            'subject' => $this->request->getPost('subject'),
            'message'=> $this->request->getPost('message'),
        ];
    
        $model->save($data);
        return redirect()->back()->with('notif','Pesan Anda telah di Terima');
        // return redirect()->to('/Pages/'); 
    }
}