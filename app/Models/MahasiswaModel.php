<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    public function get_mahasiswa()
    {
        $query = $this->db->table('tb_mahasiswa')
            ->join('tb_fakultas', 'tb_fakultas.id_fakultas = tb_mahasiswa.id_fakultas')
            ->join('tb_jurusan', 'tb_jurusan.id_jurusan = tb_mahasiswa.id_jurusan')
            ->get()->getResultArray();

        return $query;
    }

    // Menginsert data ke database
    public function insert_mhs($data)
    {
        return $this->db->table('tb_mahasiswa')->insert($data);
    }

    // Mengambil data dengan parameter id
    public function get_mhs_id($id_mahasiswa)
    {
        return $this->db->table('tb_mahasiswa')->where('id_mahasiswa', $id_mahasiswa)->get()->getRowArray();
    }

    // Menginsert data baru yang telah di update
    public function update_mhs($data, $id_mahasiswa)
    {
        return $this->db->table('tb_mahasiswa')->update($data, array('id_mahasiswa' => $id_mahasiswa));
    }

    // Menghapus data dari database
    public function delete_mhs($id_mahasiswa)
    {
        return $this->db->table('tb_mahasiswa')->delete(array('id_mahasiswa' => $id_mahasiswa));
    }
}
