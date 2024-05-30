<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class relation extends Model
{
    use HasFactory;
}

class User extends Model
{
    public function vehicle(): HasMany
    {
        return $this->hasMany(vehicle::class);
    }
}

class vehicle extends Model
{   
    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function reminder(): HasMany
    {
        return $this->hasMany(reminder::class);
    }
}

class reminder extends Model
{
    public function vehicle(): BelongsTo
    {
        return $this->belongsTo(vehicle::class);
    }
}