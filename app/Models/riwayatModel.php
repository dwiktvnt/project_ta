<?php

namespace App\Models;

use CodeIgniter\Model;

class riwayatModel extends Model
{
    protected $table = 'riwayat';
    protected $primaryKey = 'idRiwayat';
    protected $allowedFields = [
        'nama', 'tanggal_lahir', 'email', 'jenis_kelamin', 'alamat'
    ];
}
