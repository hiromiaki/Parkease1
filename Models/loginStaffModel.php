<?php

namespace App\Models;

use CodeIgniter\Model;

class loginStaffModel extends Model
{
    protected $table = 'staff_table'; // Name of your admin table
    protected $allowedFields = ['Username', 'Password']; // Fields that can be saved

    // Additional methods for admin management can be defined here
}
