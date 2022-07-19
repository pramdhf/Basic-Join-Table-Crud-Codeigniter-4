<?php

namespace App\Models;

use CodeIgniter\Model;

class EventModel extends Model
{
    public function get_event()
    {
        return $this->db->table('tb_event')->get()->getResultArray();
    }

    // Menginsert data ke database
    public function insert_event($data)
    {
        return $this->db->table('tb_event')->insert($data);
    }

    // Mengambil data dengan parameter id
    public function get_event_id($id_event)
    {
        return $this->db->table('tb_event')->where('id_event', $id_event)->get()->getRowArray();
    }

    // Menginsert data baru yang telah di update
    public function update_event($data, $id_event)
    {
        return $this->db->table('tb_event')->update($data, array('id_event' => $id_event));
    }

    // Menghapus data dari database
    public function delete_event($id_event)
    {
        return $this->db->table('tb_event')->delete(array('id_event' => $id_event));
    }
}
