<?php namespace App\Models;

use CodeIgniter\Model;

class GuestModel extends Model
{
    protected $allowedFields = [
        'name', 'country_code', 'phone', 'tamu_id', 'status'
    ];

    protected $table      = 'tamu_undangan';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
}