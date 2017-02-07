<?php

namespace App\Models\Modules;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $fillable = [ ];

    public function purchases()
    {
        return $this->hasMany('App\Models\Modules\Purchase');
    }

    public function exams()
    {
        return $this->hasMany('App\Models\Modules\Exam');
    }



}
