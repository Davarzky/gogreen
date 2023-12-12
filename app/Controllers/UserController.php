<?php
namespace App\Controllers;
use App\Models\UserModel;

class UserController extends BaseController
{
    

    public function __construct() {
       if (!session()->has("username")) {
            // dd(session);
        return redirect()->to("login");
       }
    }
    public function index()
    {
        $model = new UserModel();
        $data['pengguna'] = $model->findAll();

        return view('pengguna/index', $data);
    }

    public function create()
    {
        return view('pengguna/create');
    }

    public function save()
{
    $model = new UserModel(); 

    $data = [
        'username' => $this->request->getPost('username'),
        'email'    => $this->request->getPost('email'),
        'password' => $this->request->getPost('password'),
        'level'=> $this->request->getPost('level'),
    ];

    $model->save($data);

    return redirect()->to('pengguna/'); 
}


public function edit($id){
    $model = new UserModel();

    $data = $model->find($id);


    return view('pengguna/edit',['data'=>$data]);
}
    
public function update($id){
    $model = new UserModel();

    $data=[
        'username' => $this->request->getPost('username'),
        'email' => $this->request->getPost('email'),
        'password' => $this->request->getPost('password'),
        'level' => $this->request->getPost('level'),
        
    ];
    if($model->update($id,$data)){
        return redirect()->to('pengguna/')->with('pesan','Data Berhasil di Update');
    };
    return redirect()->back()->with('pesan','data gagal di update');
}  

public function signout()
{
    session()->remove(['id', 'email', 'level', 'isLoggedIn']);


    return redirect()->to('Pages/')->with('pesan', 'Anda berhasil logout.');
}



public function profile()
{
    $session = session();
    $userId = $session->get('id');

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

        echo view('profile', $data);
    } else {
        
         echo 'User not found';
    }
}

    public function updateProfile()
    {
        $session = session();
        $userId = $session->get('id');
    
        if (!$userId) {
            return redirect()->to('/Pages/login');
        }
    
        $model = new UserModel();
        $user = $model->find($userId);
    
        if ($this->request->getMethod() === 'post') {
            $rules = [
                'username' => 'required',
                'email'    => 'required|valid_email',
                'password' => 'min_length[6]',
            ];
    
            if ($this->validate($rules)) {
                $userUpdate = [
                    'username' => $this->request->getPost('username'),
                    'email'    => $this->request->getPost('email'),
                ];
    
                if ($this->request->getPost('password')) {
                    $userUpdate['password'] = password_hash($this->request->getVar('password'), PASSWORD_DEFAULT);
                }
    
                $model->update($userId, $userUpdate);
    
                session()->setFlashdata('success', 'Profile updated successfully!');
            } else {
                session()->setFlashdata('errors', $this->validator->getErrors());
            }
        }
    
        return redirect()->to('/UserController/profile');
    }
    public function delete($id){
        $model = new UserModel();
    
        $model->delete($id);
        return redirect()->to('pengguna/')->with('pesan','Data Berhasil di Hapus');
    }
    
}




