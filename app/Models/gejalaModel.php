<?php

namespace App\Models;

use CodeIgniter\Model;

class gejalaModel extends Model
{
    protected $table = 'gejala';
    protected $primaryKey = 'idgejala';
    protected $allowedFields = [
        'kodeGejala', 'namaGejala'
    ];

    public function getGejala($id = FALSE)
    {
        if ($id == False) {
            return $this->findAll();
        }

        return $this->where(['idgejala' => $id])->first();
    }

    public function getGejalaLimit()
    {
        return $this->findAll(29);
    }

    public function getKode($kode = FALSE)
    {
        if ($kode == False) {
            return $this->findAll();
        }

        return $this->where(['kodeGejala' => $kode])->first();
    }
}
