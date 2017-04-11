<?php

namespace App\Models\Certification;

use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
	protected $fillable = [ ];

    public function purchases()
    {
        return $this->hasMany('App\Models\Purchase\Purchase');
    }

    public function exams()
    {
        return $this->hasMany('App\Models\Exam\Exam');
    }



}
