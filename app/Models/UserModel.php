<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'nom',
        'prenom',
        'date_of_birth',
        'niveau',
        'section',
    ];

    protected $useTimestamps = false;
}
