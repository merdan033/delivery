<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Transport extends Model
{
    use HasFactory;

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function manager(): BelongsTo
    {
        return $this->belongsTo(Manager::class);
    }

    public function vehicle(): BelongsTo
    {
        return $this->belongsTo(Manager::class);
    }

    public function driver(): BelongsTo
    {
        return $this->belongsTo(Driver::class);
    }

    public function loadingLocation(): BelongsTo
    {
        return $this->belongsTo(Location::class, 'loading_location_id');
    }

    public function unloadingLocation(): BelongsTo
    {
        return $this->belongsTo(Location::class, 'unloading_location_id');
    }

    public function loads(): HasMany
    {
        return $this->hasMany(Load::class);
    }
}
