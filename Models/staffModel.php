<?php namespace App\Models;

use CodeIgniter\Model;

class staffModel extends Model
{
    protected $table = 'staff_table';
    protected $primaryKey = 'staff_ID';
    protected $allowedFields = [
        'Name',
        'Gender',
        'ContactNo',
        'Position',
        'Username',
        'Password'
    ];
}



?>