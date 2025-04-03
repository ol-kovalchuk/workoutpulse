<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WorkoutTracker extends Model
{
    protected $fillable = [
        'pushups',
        'situps' ,
        'squats' ,
        'dips',
        'pullups',
        'user_id'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
