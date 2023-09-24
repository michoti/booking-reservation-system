<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Hotel extends Model
{
    use HasFactory;

    protected $fillable = 
       [
        'city_id',
        'name',
        'address',
        'state',
        'country',
        'zipcode',
        'description',
        ];

    public function rooms(): HasMany
    {
        return $this->hasMany(Room::class);
    }  
    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }  
}
