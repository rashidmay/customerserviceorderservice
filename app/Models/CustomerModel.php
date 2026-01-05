<?php

namespace App\Models;

use CodeIgniter\Model;

class CustomerModel extends Model
{
    protected $table = 'customers';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'age',
        'gender',
        'marital_status',
        'occupation',
        'monthly_income',
        'education',
        'family_size'
    ];
}
