<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
    protected $table      = 'user';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $allowedFields = ['id','email','password','username'];

    public function getAllDesc() {
        $query= $this
            ->select('*')
            ->from('user as u')
            ->orderBy('u.id', 'desc')
            ->groupBy('u.id')
            ->get();
        return $query->getResult();
    }
}