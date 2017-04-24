<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public function categories() {
        $this->belongsToMany(Category::class)->withTimestamps();
    }
}
