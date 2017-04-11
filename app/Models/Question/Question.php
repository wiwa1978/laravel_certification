<?php

namespace App\Models\Question;

use Illuminate\Database\Eloquent\Model;
use App\Models\Question\Traits\Attribute\QuestionAttribute;

class Question extends Model
{
    use QuestionAttribute;

	protected $fillable = ['exam_id', 'question' ];

    public function exam()
    {
        return $this->belongsTo('App\Models\Exam\Exam');
    }

    public function options()
    {
        return $this->hasMany('App\Models\Option\Option');
    }

    public function answers()
    {
        return $this->hasMany('App\Models\Answer\Answer');
    }

    public function tags()
    {
        return $this->hasMany('App\Models\Tag\Tag');
    }
}
