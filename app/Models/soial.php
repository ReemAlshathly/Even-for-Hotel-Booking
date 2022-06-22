<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class soial extends Model
{
    use HasFactory;
    protected $fillable = [
        'email',
        'onlinefrom',
        'onlineto',
        'facebook',
        'instagram',
        'linkedin',
        'twitter',
        'youtube',
       
    ];
   
          
}
