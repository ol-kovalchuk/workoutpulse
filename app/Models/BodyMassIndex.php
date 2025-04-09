<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BodyMassIndex extends Model
{
    protected $fillable = [
        'weight',
        'height',
        'index',
        'result',
        'user_id'
    ];
}
