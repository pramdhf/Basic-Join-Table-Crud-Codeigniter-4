<?php

namespace App\Models;

use CodeIgniter\Model;

class FakultasModel extends Model
{
    public function get_fakultas()
    {
        return $this->db->table('tb_fakultas')->get()->getResultArray();
    }
}
