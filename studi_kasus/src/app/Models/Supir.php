<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supir extends Model
{
    protected $table = 'supirs';

    protected $fillable = [
    'name',
    'license_number',
    'phone_number',
    'address',
];

}
