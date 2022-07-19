<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TbEvent extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_event' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_event' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'tgl_event' => [
                'type'       => 'DATE',
            ],
            'info_event' => [
                'type' => 'TEXT',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id_event', true);
        $this->forge->createTable('tb_event');
    }

    public function down()
    {
        $this->forge->dropTable('tb_event');
    }
}
