<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\EventModel;

class Event extends BaseController
{
    protected $EventModel;

    public function __construct()
    {
        $this->EventModel = new EventModel();
    }

    public function index()
    {
        $data = [
            'lists' => $this->EventModel->get_event(),
        ];

        return view('event/get', $data);
    }

    // Menampilkan view tambah data
    public function add_event()
    {

        return view('event/add');
    }

    // Fungsi untuk save data dari form
    public function save()
    {
        $data = [
            'nama_event' => $this->request->getPost('nama_event'),
            'tgl_event' => $this->request->getPost('tgl_event'),
            'info_event' => $this->request->getPost('info_event'),
        ];

        $this->EventModel->insert_event($data);
        session()->setFlashdata('success', 'Add data Success');

        return redirect()->to(site_url('event'));
    }

    // Menampilkan view edit data dengan parameter id
    public function edit($id_event)
    {
        $data = [
            'event' => $this->EventModel->get_event_id($id_event),
        ];
        return view('event/edit', $data);
    }

    // Fungsi untuk update data 
    public function update($id_event)
    {
        $data = [
            'nama_event' => $this->request->getPost('nama_event'),
            'tgl_event' => $this->request->getPost('tgl_event'),
            'info_event' => $this->request->getPost('info_event'),
        ];

        $this->EventModel->update_event($data, $id_event);
        session()->setFlashdata('success', 'Update data Success');

        return redirect()->to(site_url('event'));
    }

    // FUngsi untuk delete data
    public function delete($id_event)
    {
        $this->EventModel->delete_event($id_event);
        session()->setFlashdata('success', 'Update data dihapus.');

        return redirect()->to(site_url('event'));
    }
}
