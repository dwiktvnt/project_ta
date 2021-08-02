<?php

namespace App\Models;

use CodeIgniter\Model;

class penyakitModel extends Model
{
    protected $table = 'penyakit';
    protected $primaryKey = 'idpenyakit';
    protected $allowedFields = [
        'kodePenyakit', 'namaPenyakit'
    ];

    public function getPenyakit($id = FALSE)
    {
        if ($id == False) {
            return $this->findAll();
        }

        return $this->where(['idpenyakit' => $id])->first();
    }
}
