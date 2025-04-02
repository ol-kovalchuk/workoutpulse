<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkoutTracker extends Model
{
    protected $fillable = [
        'pushups',
        'situps' ,
        'squats' ,
        'dips',
        'pullups',
        'user_id'
    ] ;
}
