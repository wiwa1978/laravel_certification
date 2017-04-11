<?php

namespace App\Models\Answer;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{

	protected $fillable = [ ];

    public function exams()
    {
        return $this->belongsTo('App\Models\Question\Question');
    }
}
