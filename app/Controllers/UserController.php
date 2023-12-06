<?php
namespace App\Controllers;
use App\Models\UserModel;
class UserController extends BaseController
{
    


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

public function delete($id){
    $model = new UserModel();

    $model->delete($id);
    return redirect()->to('pengguna/')->with('pesan','Data Berhasil di Hapus');
}
 

}
