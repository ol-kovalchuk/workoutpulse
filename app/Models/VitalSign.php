<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VitalSign extends Model
{
    protected $fillable = [
        'temperature',
        'pulse',
        'breathing',
        'systolic',
        'diastolic',
        'user_id'
    ];
}
