<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class booking extends Model
{
    use HasFactory;
    protected $guarded =[];
    protected $fillable = [
        'numberOfGustes',
        'adults',
        'chaildren',
        'typeOfBooking',
        'from',
        'to',
        'guster_id',
        'room_id',
        'status',
    ];
    public function guster(): BelongsTo
    {
        return $this->belongsTo(guster::class, 'guster_id');
    }
    public function room(): BelongsTo
    {
        return $this->belongsTo(rooms::class, 'room_id');
    }
   
}
