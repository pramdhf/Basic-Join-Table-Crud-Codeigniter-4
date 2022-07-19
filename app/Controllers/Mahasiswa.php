<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\MahasiswaModel;
use App\Models\FakultasModel;
use App\Models\JurusanModel;

class Mahasiswa extends BaseController
{
    protected $MahasiswaModel;
    protected $FakultasModel;
    protected $JurusanModel;

    public function __construct()
    {
        $this->MahasiswaModel = new MahasiswaModel();
        $this->FakultasModel = new FakultasModel();
        $this->JurusanModel = new JurusanModel();
    }

    public function index()
    {
        $data_mhs = $this->MahasiswaModel->get_mahasiswa();
        $data_fakultas = $this->FakultasModel->get_fakultas();
        $data = array(
            'lists' => $data_mhs,
            'list_fakultas' => $data_fakultas
        );

        return view('mahasiswa/get', $data);
    }

    // Menampilkan view tambah data
    public function add_mhs()
    {
        $data = [
            'fakultas' => $this->FakultasModel->get_fakultas(),
            'jurusan' => $this->JurusanModel->get_jurusan()
        ];
        return view('mahasiswa/add', $data);
    }

    // Fungsi untuk save data dari form
    public function save()
    {
        $data = [
            'nama_mhs' => $this->request->getPost('nama_mhs'),
            'id_fakultas' => $this->request->getPost('id_fakultas'),
            'id_jurusan' => $this->request->getPost('id_jurusan'),
            'alamat' => $this->request->getPost('alamat')
        ];

        $this->MahasiswaModel->insert_mhs($data);
        session()->setFlashdata('success', 'Add data Success');

        return redirect()->to(site_url('mahasiswa'));
    }

    // Menampilkan view edit data dengan parameter id
    public function edit($id_mahasiswa)
    {
        $data = [
            'mhs' => $this->MahasiswaModel->get_mhs_id($id_mahasiswa),
            'fakultas' => $this->FakultasModel->get_fakultas(),
            'jurusan' => $this->JurusanModel->get_jurusan()
        ];
        return view('mahasiswa/edit', $data);
    }

    // Fungsi untuk update data 
    public function update($id_mahasiswa)
    {
        $data = [
            'nama_mhs' => $this->request->getPost('nama_mhs'),
            'id_fakultas' => $this->request->getPost('id_fakultas'),
            'id_jurusan' => $this->request->getPost('id_jurusan'),
            'alamat' => $this->request->getPost('alamat')
        ];

        $this->MahasiswaModel->update_mhs($data, $id_mahasiswa);
        session()->setFlashdata('success', 'Update data Success');

        return redirect()->to(site_url('mahasiswa'));
    }

    // FUngsi untuk delete data
    public function delete($id_mahasiswa)
    {
        $this->MahasiswaModel->delete_mhs($id_mahasiswa);
        session()->setFlashdata('success', 'Data berhasil dihapus.');

        return redirect()->to(site_url('mahasiswa'));
    }
}
