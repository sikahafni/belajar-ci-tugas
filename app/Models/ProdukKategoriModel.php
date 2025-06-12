<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukKategoriModel extends Model
{
    protected $table = 'produk_kategori'; 
	protected $primaryKey = 'id';
	protected $allowedFields = [
		'nama'
	];  
}


