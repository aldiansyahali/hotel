<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pemesanan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama'       => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
            ],
            'nomor_identitas'   => [
                'type'              => 'VARCHAR',
                'constraint'        => 50,
            ],
            'jenis_kelamin' => [
                'type'          => 'VARCHAR',
                'constraint'    => 50,
            ],
            'tipe_kamar' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
            ],
            'tanggal'       => [
                'type'          => 'DATE',
            ],
            'durasi'        => [
                'type'          => 'INT',
                'constraint'    => 5,
            ],
            'discount' => [
                'type' => 'INT',
                'constraint' => 9,
            ],
            'total_bayar' => [
                'type' => 'INT',
                'constraint' => 9,
            ],

        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('pemesanan');
    }

    public function down()
    {
        $this->forge->dropTable('pemesanan');
    }
}
