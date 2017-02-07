<?php

namespace App\Models\Modules;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
	protected $fillable = [ ];

    public function exam()
    {
        return $this->belongsTo('App\Models\Modules\Exam');
    }

    public function options()
    {
        return $this->hasMany('App\Models\Modules\Option');
    }

    public function answers()
    {
        return $this->hasMany('App\Models\Modules\Answer');
    }
}
