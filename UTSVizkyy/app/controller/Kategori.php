<?php

class Kategori extends Controller
{
    public function index()
    {
        $data['judul'] = 'Kategori';
        $this->view('template/header', $data);
        $this->view('kategori/kategori', $data);
        $this->view('template/footer', $data);
    }

    public function produk()
    {
        $data['judul'] = 'Produk';
        $this->view('template/header', $data);
        $this->view('kategori/produk', $data);
        $this->view('template/footer', $data);
    }
}
