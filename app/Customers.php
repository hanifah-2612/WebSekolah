<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    protected $table='customers';
    protected $primaryKey = 'customers_id';
    protected $fillable = [
        'customers_name',
        'email',
        'phone',
        'address',
        'member_status'
    ];

};
