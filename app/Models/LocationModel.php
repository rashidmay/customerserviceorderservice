<?php

namespace App\Models;

use CodeIgniter\Model;

class LocationModel extends Model
{
    protected $table = 'locations';
    protected $allowedFields = [
        'customer_id',
        'latitude',
        'longitude',
        'pin_code'
    ];
}