<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddTamuUndangan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'country_code' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'phone' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'tamu_id' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'status' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addUniqueKey('tamu_id');
        $this->forge->createTable('tamu_undangan');
    }

    public function down()
    {
        $this->forge->dropTable('tamu_undangan');
    }
}