<?php

namespace App\Models;

use CodeIgniter\Model;

class ticketModel extends Model
{
    protected $table = 'ticket_info'; // Use the appropriate table name
    protected $primaryKey = 'id'; // Use the appropriate primary key
    protected $allowedFields = ['Name', 'Price', 'Description', 'Quantity', 'Img']; // Define allowed fields
}