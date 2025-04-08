<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RuffierIndex extends Model
{
    protected $fillable = [
      'pulse_1',
      'pulse_2',
      'pulse_3',
      'index',
      'result',
      'user_id'
    ];
}
