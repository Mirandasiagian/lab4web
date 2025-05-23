<?php
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table            = 'user'; // Pastikan nama tabel benar
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $allowedFields    = ['username', 'useremail', 'userpassword'];
    protected $useTimestamps    = false; // Atau true jika pakai created_at/updated_at
}
