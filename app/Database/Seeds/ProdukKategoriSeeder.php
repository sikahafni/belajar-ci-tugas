<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProdukKategoriSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama' => 'Laptop',
            ],
            [
                'nama' => 'Printer',
            ],
        ];

        $this->db->table('produk_kategori')->insertBatch($data);
    }
}
