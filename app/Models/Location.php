<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Location extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function loadingTransports(): HasMany
    {
        return $this->hasMany(Transport::class, 'loading_location_id');
    }

    public function unloadingTransports(): HasMany
    {
        return $this->hasMany(Transport::class, 'unloading_location_id');
    }
}
