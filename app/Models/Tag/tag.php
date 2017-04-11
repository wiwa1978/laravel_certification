<?php

namespace App\Models\Tag;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function question()
    {
        return $this->belongsTo('App\Models\Question\Question');
    }
}
