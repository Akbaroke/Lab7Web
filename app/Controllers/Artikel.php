<?php

namespace App\Controllers;

use App\Models\ArtikelModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Artikel extends BaseController
{
  public function index()
  {
    $page = 'artikel';
    $title = 'Daftar Artikel';
    $model = new ArtikelModel();
    $artikel = $model->findAll();
    return view('artikel/index', compact('artikel', 'title', 'page'));
  }

  public function view($slug)
  {
    $page = 'detail artikel';
    $model = new ArtikelModel();
    $artikel = $model->where([
      'slug' => $slug
    ])->first();
    // Menampilkan error apabila data tidak ada.
    if (!$artikel) {
      throw PageNotFoundException::forPageNotFound();
    }
    $title = $artikel['judul'];
    return view('artikel/detail', compact('artikel', 'title', 'page'));
  }

  public function admin_index()
  {
    $page = 'admin/artikel';
    $title = 'Daftar Artikel';
    $model = new ArtikelModel();
    $artikel = $model->findAll();
    return view('artikel/admin_index', compact('artikel', 'title', 'page'));
  }

  public function add()
  {
    // validasi data.
    $validation = \Config\Services::validation();
    $validation->setRules(['judul' => 'required']);
    $isDataValid = $validation->withRequest($this->request)->run();
    if ($isDataValid) {
      $artikel = new ArtikelModel();
      $judul = $this->request->getVar('judul');
      $artikel->insert([
        'judul' => $judul,
        'isi' => $this->request->getPost('isi'),
        'slug' => url_title($judul, '-', 'true'),
      ]);
      return redirect('admin/artikel');
    }
    $title = "Tambah Artikel";
    $page = 'admin/artikel/add';
    return view('artikel/form_add', compact('title', 'page'));
  }

  public function edit($id)
  {
    $artikel = new ArtikelModel();
    // validasi data.
    $validation = \Config\Services::validation();
    $validation->setRules(['judul' => 'required']);
    $isDataValid = $validation->withRequest($this->request)->run();
    if ($isDataValid) {
      $artikel->update($id, [
        'judul' => $this->request->getPost('judul'),
        'isi' => $this->request->getPost('isi'),
      ]);
      return redirect('admin/artikel');
    }
    // ambil data lama
    $data = $artikel->where('id', $id)->first();
    $title = "Edit Artikel";
    $page = '';
    return view('artikel/form_edit', compact('title', 'data', 'page'));
  }

  public function delete($id)
  {
    $artikel = new ArtikelModel();
    $artikel->delete($id);
    return redirect('admin/artikel');
  }
}
