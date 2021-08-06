<?php

namespace App\Models;

use CodeIgniter\Model;

class historyModel extends Model
{
    protected $table = 'history';
    protected $primaryKey = 'idPilihan';
    protected $allowedFields = [
        'email', 'pertanyaan', 'jawaban', 'next', 'tglDiagnosa'
    ];

    public function getHistory($email)
    {
        return $this->where(['email' => $email])->findAll();
    }
}
