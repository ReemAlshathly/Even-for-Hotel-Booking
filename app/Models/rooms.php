<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rooms extends Model
{
    use HasFactory;
    protected $table      = 'rooms';
    protected $primaryKey = 'id';
    protected $guarded =[];
    protected $fillable = [
        'image',
        'code',
        'floor',
        'cost',
        'status',
        'is_active',
        'bids',
        'TV',
        'wifi',
        'parking',
        'AC',
        'pool',
        'type',








       
       
    ];
}
