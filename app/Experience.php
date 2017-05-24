<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $guarded = [];
    protected $dates = [
        'start_date',
        'end_date',
        'created_at'
    ];
}
