<?php

namespace App\Models\Modules;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{

	protected $fillable = [ ];

    public function exams()
    {
        return $this->belongsTo('App\Models\Modules\Question');
    }
}
