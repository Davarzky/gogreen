<?php
namespace App\Controllers;
use App\Models\UserModel;
class UserController extends BaseController
{
    


    public function index()
    {
        $model = new UserModel();
        $data['pengguna'] = $model->findAll();

        return view('dashboard_view', $data);
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
    ];

    $model->save($data);

    return redirect()->to('/dashboard'); 
}
public function delete($id)
{
    $model = new UserModel();

    $user = $model->find($id);

    if ($user) {
        $model->delete($id);
        return redirect()->to('/dashboard')->with('success', 'Data pengguna berhasil dihapus.');
    } else {
        return redirect()->to('/dashboard')->with('error', 'Data pengguna tidak ditemukan.');
    }
}

}
