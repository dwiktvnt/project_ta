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

    public function getRiwayat($email = FALSE)
    {

        $db      = \Config\Database::connect();
        $builder = $db->table('history');
        $builder->where('email', $email);
        $builder->selectMax('idPilihan');
        $query = $builder->get();
        return $query;
    }
}
