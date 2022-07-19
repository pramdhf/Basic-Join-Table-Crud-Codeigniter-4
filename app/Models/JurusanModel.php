<?php

namespace App\Models;

use CodeIgniter\Model;

class JurusanModel extends Model
{
    public function get_jurusan()
    {
        return $this->db->table('tb_jurusan')->get()->getResultArray();
    }
}
