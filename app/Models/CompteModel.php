<?php

namespace App\Models;

use CodeIgniter\Model;

<<<<<<< HEAD
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
=======
class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['email', 'password'];

    public function checkUser($email, $password)
    {
        $user = $this->where('email', $email)->first();
        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }
        return null;
    }
>>>>>>> 1a0eafbaacd79187a3fd1099ef78a72fef66bb8e
}
