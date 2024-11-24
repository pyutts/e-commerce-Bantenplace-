<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id_users';
    protected $allowedFields = ['username', 'email', 'password', 'nama', 'alamat', 'kode_pos', 'level'];
    protected $useTimestamps = true;
}
