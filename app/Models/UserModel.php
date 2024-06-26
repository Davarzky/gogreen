<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{
    public function isUsernameExists($username) {
        return $this->where('username', $username)->countAllResults() > 0;
    }

    public function isEmailExists($email) {
        return $this->where('email', $email)->countAllResults() > 0;
    }

    public function search($keyword)
    {
        $builder = $this->table('users');
        $builder->like('username', $keyword);
        return $builder;
    }

    protected $table            = 'Users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ["username","email","password","nama","level"];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
