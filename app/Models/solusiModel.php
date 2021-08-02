<?php

namespace App\Models;

use CodeIgniter\Model;

class solusiModel extends Model
{
    protected $table = 'solusi';
    protected $primaryKey = 'idsolusi';
    protected $allowedFields = [
        'kodeSolusi', 'namaSolusi'
    ];

    public function getSolusi($id = FALSE)
    {
        if ($id == False) {
            return $this->findAll();
        }

        return $this->where(['idsolusi' => $id])->first();
    }
}
