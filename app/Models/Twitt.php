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

    public function getAllFollowingWithUserInfo() {
        $userId = 1;
        $query= $this
            ->select('t.body, t.created_at, user.username, follow.personA, follow.personB')
            ->from('twitt as t')
            ->join('user', 'user.id = t.user_id')
            ->join('follow', 'follow.personB = t.user_id')
            ->where('follow.personA', $userId)
            ->groupBy('t.id')
            ->orderBy('t.created_at', 'desc')
            ->get();
            return $query->getResult();
    }
}