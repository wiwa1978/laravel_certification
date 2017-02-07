<?php

namespace App\Models\Modules;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
	protected $fillable = [ ];

    public function product()
    {
        return $this->belongsTo('App\Models\Modules\Product');
    }

    public function questions()
    {
        return $this->hasMany('App\Models\Modules\Exam');
    }
}
