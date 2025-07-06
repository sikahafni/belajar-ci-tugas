<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DiskonModel;

class DiskonController extends BaseController
{
    protected $diskon;

    public function __construct()
    {
        $this->diskon = new DiskonModel();
        helper('form');
    }

    public function index()
{
    $redirect = $this->checkAdmin();
    if ($redirect) return $redirect;

    $data['diskon'] = $this->diskon->findAll();
    return view('v_diskon', $data);
}


    public function store()
    {
        $tanggal = $this->request->getPost('tanggal');

        if ($this->diskon->where('tanggal', $tanggal)->first()) {
            return redirect()->back()->withInput()->with('failed', 'The tanggal field must contain a unique value.');
        }

        $rules = [
            'tanggal' => 'required|valid_date',
            'nominal' => 'required|numeric',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $this->diskon->insert([
            'tanggal' => $tanggal,
            'nominal' => $this->request->getPost('nominal'),
        ]);

        return redirect()->to('diskon')->with('success', 'Data diskon berhasil ditambahkan.');
    }

    public function update($id)
    {
        $rules = [
            'nominal' => 'required|numeric',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $this->diskon->update($id, [
            'nominal' => $this->request->getPost('nominal'),
        ]);

        return redirect()->to('diskon')->with('success', 'Data diskon berhasil diperbarui.');
    }

    public function delete($id)
    {
        $this->diskon->delete($id);
        return redirect()->to('diskon')->with('success', 'Data diskon berhasil dihapus.');
    }

    private function checkAdmin()
{
    if (session()->get('role') !== 'admin') {
        return redirect()->to('/')->with('failed', 'Akses hanya untuk admin.');
    }
}

}
