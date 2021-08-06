<?php

namespace App\Models;

use CodeIgniter\Model;

class profileModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'email',
        'username',
        'fullname',
        'user_image',
        'password_hash',
        'reset_at',
        'active_hash',
        'status',
        'status_message',
        'active',
        'force_pass_reset',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function getData($id = FALSE)
    {
        if ($id == False) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
