<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hotel extends Model
{
    use HasFactory;
    protected $fillable = [
        'logo',
        'street',
        'address',
        'city',
        'country',
        'reception',
        'service',
        'Restaurant',
        'description',
    ];
}
