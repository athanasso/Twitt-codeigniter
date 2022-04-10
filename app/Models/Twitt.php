<?php

namespace App\Models;

use CodeIgniter\Model;

class Twitt extends Model
{
    protected $table      = 'twitt';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType     = 'object';
    protected $allowedFields = ['id','body','user_id'];

    public function getAllWithUserInfo() {
        $query= $this
        ->select('t.body, t.created_at, user.username')
        ->from('twitt as t')
        ->join('user', 'user.id = t.user_id')
        ->get();
        return $query->getResult();
    }
}