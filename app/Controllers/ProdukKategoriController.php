<?php

namespace App\Controllers;

use App\Models\ProdukKategoriModel;

class ProdukKategoriController extends BaseController
{
    protected $category;

    public function __construct()
    {
        $this->category = new ProdukKategoriModel();
    }

    // Menampilkan daftar kategori
    public function index()
    {
        $data['kategori'] = $this->category->findAll();
        return view('v_kategori', $data);
    }

    // Menambahkan kategori baru
    public function create()
    {
        $dataForm = [
            'nama' => $this->request->getPost('nama'),
        ];

        $this->category->insert($dataForm);

        return redirect('kategori')->with('success', 'Kategori berhasil ditambah');
    }

    // Mengedit kategori berdasarkan ID
    public function edit($id)
    {
        $dataForm = [
            'nama' => $this->request->getPost('nama'),
        ];

        $this->category->update($id, $dataForm);

        return redirect('kategori')->with('success', 'Kategori berhasil diubah');
    }

    // Menghapus kategori berdasarkan ID
    public function delete($id)
    {
        $this->category->delete($id);

        return redirect('kategori')->with('success', 'Kategori berhasil dihapus');
    }
}
