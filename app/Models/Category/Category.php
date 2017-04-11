<?php

namespace App\Models\Category;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function exam()
    {
        return $this->belongsTo('App\Models\Exam\Exam');
    }
}
