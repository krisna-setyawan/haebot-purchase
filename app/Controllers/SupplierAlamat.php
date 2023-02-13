<?php

namespace App\Controllers;

use App\Models\SupplierAlamatModel;
use CodeIgniter\RESTful\ResourcePresenter;

class SupplierAlamat extends ResourcePresenter
{
    public function index()
    {
        //
    }


    public function show($id = null)
    {
        //
    }


    public function new()
    {
        //
    }


    public function create()
    {
        $modelSupplierAlamat = new SupplierAlamatModel();
        $id_supplier = $this->request->getPost('id_supplier');

        $data = [
            'id_supplier' => $this->request->getPost('id_supplier'),
            'nama' => $this->request->getPost('nama'),
            'id_provinsi' => $this->request->getPost('id_provinsi'),
            'id_kota' => $this->request->getPost('id_kota'),
            'id_kecamatan' => $this->request->getPost('id_kecamatan'),
            'id_kelurahan' => $this->request->getPost('id_kelurahan'),
            'detail_alamat' => $this->request->getPost('detail_alamat'),
        ];
        $modelSupplierAlamat->save($data);

        session()->setFlashdata('pesan', 'Alamat Baru berhasil ditambahkan.');

        return redirect()->to('/supplier/' . $id_supplier);
    }


    public function edit($id = null)
    {
        //
    }


    public function update($id = null)
    {
        //
    }


    public function remove($id = null)
    {
        //
    }


    public function delete($id = null)
    {
        //
    }
}
