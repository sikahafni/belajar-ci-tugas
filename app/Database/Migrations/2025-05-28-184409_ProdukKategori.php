<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ProductCategory extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'unsigned' => FALSE,
            ]
        ]);

        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('produk_kategori');
    }

    public function down()
    {
        $this->forge->dropTable('produk_kategori');
    }
}