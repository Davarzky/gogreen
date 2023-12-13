<?php

namespace App\Controllers;
use App\Models\ContactModel;
use App\Models\UserModel;
use App\Models\NewsModel;
class Pages extends BaseController
{
    public function index()
{   
    $model = new NewsModel();
   
    $data = [
        'title' => 'Home | GoGreen',
        'gambar' => $model->findAll()
    ];

    foreach ($data['gambar'] as &$berita) {
        $berita['gambar_url'] = base_url('public/uploads/' . $berita['gambar']);
    }

    echo view('home', $data);
}
public function login()
{
    $data = [
        'title' => 'Login | GoGreen'
    ];

    echo view('login',$data);
} 
    

public function profile()
{
    $session = session();
    $userId = $session->get('usersData')['id'];

    if (!$userId) {
        return redirect()->to('/Pages/login');
    }

    $model = new UserModel();
    $user = $model->find($userId);

    if ($user) {
        $data = [
            'title' => 'Profile | GoGreen',
            'user'  => $user,
        ];

        return view('/layout/profile', $data);
    } else {
        return redirect()->to('/Pages/login'); // Redirect ke halaman login jika user tidak ditemukan
    }
}

    
    public function processLogin()
{
    helper(['form', 'url']);
    $session = session();
    $model = new UserModel();

    $rules = [
        'email'    => 'required|valid_email',
        'password' => 'required|min_length[6]',
    ];

    if ($this->validate($rules)) {

        $email = $this->request->getPost('email');
        $password = $this->request->getVar('password');

        $user = $model->where('email', $email)->first();
        if ($user) {
            if (password_verify($password,  $user['password'])) {
                $userData = [
                    'id'       => $user['id'],
                    'username' => $user['username'],
                    'email'    => $user['email'],
                    'level'    => $user['level'],
                    'isLoggedIn' => TRUE
                ];
                $session->set('usersData',$userData); 
                    
                if ($userData['level'] == 'admin') {
                    return $this->redirectToDashboard();
                } else {
                    return $this->redirectToIndex();
                }
            } else {
                session()->setFlashdata('errors', ['password' => 'Password is incorrect.']);
            }
        } else {
            session()->setFlashdata('errors', ['email' => 'Email does not exist.']);
        }
    } else {
        session()->setFlashdata('errors', $this->validator->getErrors());
    }

    return redirect()->to('/Pages/login');
    
}

public function redirectToDashboard()
    {
        
        return redirect()->to('dashboard');
    }

    public function redirectToIndex()
    {
       
        return redirect()->to('/');
    }
    
   
    public function register()
    {   

        return view('register');
    }

    public function processRegister()
{
   
    helper(['form', 'url']);

    
    $model = new UserModel();

    
    $rules = [
        'username' => 'required|is_unique[users.username]',
        'email'    => 'required|valid_email|is_unique[users.email]',
        'password' => 'required|min_length[6]', 
    ];


    if ($this->validate($rules)) {
        // echo $this->request->getVar('password'); exit;
        $data = [
            'username' => $this->request->getPost('username'),
            'email'    => $this->request->getPost('email'),
            'level'    => $this->request->getPost('level'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
        ];
    
        $model->save($data);
    
        session()->setFlashdata('success', 'Registration successful!');

        return redirect()->to('/Pages');
    } else {
       session()->setFlashdata('errors', $this->validator->getErrors());

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
    public static function logout()
    {
        session()->destroy();

        return redirect()->to('Pages/');
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
    
        if($model->save($data)){
            return redirect()->to('Pages/')->with('pesan','Data Berhasil di Update');
        };
        return redirect()->back()->with('pesan','data gagal di update');
    }


 
}
        
        
        
        
        
        
        
        
        
        
        
        
        
