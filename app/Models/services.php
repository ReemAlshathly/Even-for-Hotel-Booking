<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class services extends Model
{
    use HasFactory;
    
    protected $table      = 'services';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'cost',
        'type',
        'pic',
    ];
}
