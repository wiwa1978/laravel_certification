<?php

namespace App\Models\Certification;

use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
	protected $fillable = ['name', 'small_description', 'long_description', 'features', 'price' ];

    public function purchases()
    {
        return $this->hasMany('App\Models\Purchase\Purchase');
    }

    public function exams()
    {
        return $this->hasMany('App\Models\Exam\Exam');
    }



}
