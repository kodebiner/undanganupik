<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddInvitationSession extends Migration
{
    public function up()
    {
        $fields = [
            'sesi'  => [
                'type'          => 'INT',
                'constraint'    => 11,
                'after'         => 'tamu_id',
                'null'          => true,
            ],
        ];
        $this->forge->addColumn('tamu_undangan', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('tamu_undangan', 'sesi');
    }
}