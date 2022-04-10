<?php

namespace App\Models;

use CodeIgniter\Model;

class Twitt extends Model
{
    protected $table      = 'twitt';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $allowedFields = ['id','body','user_id'];
}