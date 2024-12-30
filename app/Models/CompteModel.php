<?php

namespace App\Models;

use CodeIgniter\Model;

class CompteModel extends Model
{
    protected $table = 'comptes';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'id',
        'username',
        'password_hash',
        'email',
        'role_name',
        'created_at',
        'updated_at',
    ];

    protected $useTimestamps = false;
}
