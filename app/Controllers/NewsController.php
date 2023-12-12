<?php

namespace App\Controllers;

use App\Models\NewsModel;

class NewsController extends BaseController
{
    public function index()
    {
        $model = new NewsModel();
        $data['gambar'] = $model->findAll();

        return view('news/index', $data); // Sesuaikan dengan nama view Anda
    }

    public function create()
    {
        return view("news/create"); // Sesuaikan dengan nama view create Anda
    }

    public function save()
    {
        $model = new NewsModel();

        $validationRules = [
            'name'    => 'required',
            'caption' => 'required',
            'gambar'  => 'uploaded[gambar]|max_size[gambar,1024]|is_image[gambar]',
        ];

        if (!$this->validate($validationRules)) {
            $errors = $this->validator->getErrors();

            if (!empty($errors['gambar'])) {
                $errors['gambar'] = 'Gambar wajib diunggah.';
            }

            return redirect()->to('news/create')->withInput()->with('errors', $errors);
        }

        $gambar = $this->request->getFile('gambar');

        if ($gambar->isValid() && !$gambar->hasMoved()) {
            $gambar->move(ROOTPATH . 'public/uploads', $gambar->getName());
            $gambarName = $gambar->getName();
        } else {
            $gambarName = '';
        }

        $data = [
            'gambar'  => $gambarName,
            'name'    => $this->request->getPost('name'),
            'caption' => $this->request->getPost('caption'),
        ];

        $model->save($data);

        return redirect()->to('news/')->with('message', 'News successfully edited.');
    }
    public function edit($id)
{
    $model = new NewsModel();
    $data['news'] = $model->find($id);

    $data['gambar_value'] = base_url('public/uploads/' . $data['news']['gambar']);

    return view('news/edit', $data);
}

public function update($id)
{
    $model = new NewsModel();

    $validationRules = [
        'name'    => 'required',
        'caption' => 'required',
        'gambar'  => 'max_size[gambar,1024]|is_image[gambar]',
    ];

    if (!$this->validate($validationRules)) {
        $errors = $this->validator->getErrors();

        if (!empty($errors['gambar'])) {
            $errors['gambar'] = 'Gambar wajib diunggah.';
        }

        return redirect()->to("news/edit/$id")->withInput()->with('errors', $errors);
    }

    $gambar = $this->request->getFile('gambar');

    if ($gambar->isValid() && !$gambar->hasMoved()) {
        $gambar->move(ROOTPATH . 'public/uploads', $gambar->getName());
        $gambarName = $gambar->getName();
    } else {
        $gambarName = '';
    }

    $data = [
        'gambar'  => $gambarName,
        'name'    => $this->request->getPost('name'),
        'caption' => $this->request->getPost('caption'),
    ];

    $model->update($id, $data);

    return redirect()->to('news/')->with('message', 'News successfully updated.');
}
public function detail($id)
{
    $model = new NewsModel();
    $data['berita'] = $model->find($id);

    if ($data['berita']) {
        return view('news/detail', $data);
    } else {
        // Jika berita tidak ditemukan, bisa ditangani sesuai kebutuhan
        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
    }
}

    public function delete($id){
        $model = new NewsModel();
    
        $model->delete($id);
        return redirect()->to('news/')->with('pesan','Data Berhasil di Hapus');
    }
}
