<?php

namespace App\Models\Category;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $fillable = ['category'];

    public function exam()
    {
        return $this->belongsTo('App\Models\Exam\Exam');
    }
}
