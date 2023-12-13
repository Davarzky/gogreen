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
        $currentPage = $this->request->getVar('page_users') ? $this->request->getVar('page_users') : 1;
    
        $keyword = $this->request->getPost('keyword');
        if ($keyword) {
            $user = $model->search($keyword)->paginate(6, 'users');
        } else {
            $user = $model->paginate(6, 'users');
        }
    
        $data['pengguna'] = [
            'users' => $user,
            'pager' => $model->pager,
            'currentPage' => $currentPage
        ];
    
        return view('pengguna/index', $data);
    }
    
    public function create()
    {
        return view('pengguna/create');
    }

    public function save()
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
                'level'    => $this->request->getPost('level'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            ];
    
            $model->save($data);
    
            session()->setFlashdata('success', 'User added successfully!');
    
            return redirect()->to('pengguna');
        } else {
            session()->setFlashdata('errors', $this->validator->getErrors());
    
            // Jika validasi gagal, kembalikan ke halaman yang sesuai (dalam hal ini, halaman pengguna)
            return redirect()->to('pengguna');
        }
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

        // Render the profile page with the editing form
        return view('/layout/profile', $data);
    } else {
        return redirect()->to('/Pages/login');
    }
}

public function updateProfile()
{
    $session = session();
    $userId = $session->get('usersData')['id'];

    if (!$userId) {
        return redirect()->to('/Pages/login');
    }

    $model = new UserModel();
    $user = $model->find($userId);

    if ($this->request->getMethod() === 'post') {
        $rules = [
            'username' => 'required|is_unique[users.username,id,' . $userId . ']',
            'email'    => 'required|valid_email|is_unique[users.email,id,' . $userId . ']',
        ];

        if ($this->validate($rules)) {
            $userUpdate = [
                'username' => $this->request->getPost('username'),
                'email'    => $this->request->getPost('email'),
            ];

            $model->update($userId, $userUpdate);

            // Ambil data pengguna yang sudah diperbarui setelah pembaruan
            $updatedUser = $model->find($userId);

            // Simpan data pengguna yang sudah diperbarui dalam sesi
            $session->set('usersData', $updatedUser);

            session()->setFlashdata('success', 'Profil berhasil diperbarui!');
        } else {
            session()->setFlashdata('errors', $this->validator->getErrors());
        }
    }

    // Redirect ke halaman profil setelah menyimpan perubahan
    return redirect()->to('Pages/');
}


    public function delete($id){
        $model = new UserModel();
    
        $model->delete($id);
        return redirect()->to('pengguna/')->with('pesan','Data Berhasil di Hapus');
    }


    
}




