<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table = 'admininfo'; // Name of your admin table
    protected $primaryKey = 'id'; // Primary key of the table
    protected $allowedFields = ['Username', 'Password']; // Fields that can be saved

    // Additional methods for admin management can be defined here
}
