<?php

namespace App\Models;

use CodeIgniter\Model;

class Follow extends Model
{
    protected $table      = 'follow';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $allowedFields = ['id','personA','personB'];
}