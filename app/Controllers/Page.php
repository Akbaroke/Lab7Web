<?php

namespace App\Controllers;

class Page extends BaseController
{
  public function home()
  {
    $data = [
      'title' => 'Halaman Home',
      'content' => 'Ini adalah halaman home yang menjelaskan tentang isi halaman ini.',
      'page' => 'home'
    ];

    return view('home', $data);
  }

  public function about()
  {
    $data = [
      'title' => 'Halaman About',
      'content' => 'Ini adalah halaman about yang menjelaskan tentang isi halaman ini.',
      'page' => 'about'
    ];

    return view('about', $data);
  }

  public function kontak()
  {
    $data = [
      'title' => 'Halaman Kontak',
      'content' => 'Ini adalah halaman kontak yang menjelaskan tentang isi halaman ini.',
      'page' => 'kontak'
    ];

    return view('kontak', $data);
  }

  public function artikel()
  {
    $data = [
      'title' => 'Halaman Artikel',
      'content' => 'Ini adalah halaman artikel yang menjelaskan tentang isi halaman ini.',
      'page' => 'artikel'
    ];

    return view('artikel', $data);
  }
}
