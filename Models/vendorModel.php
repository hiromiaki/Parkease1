<?php namespace App\Models;

use CodeIgniter\Model;

class vendorModel extends Model
{
    protected $table = 'vendors_table';
    protected $primaryKey = 'StoreID';
    protected $allowedFields = [
        'Name',
        'StoreName',
        'Email',
        'MonthlyRent'
    ];
}



?>