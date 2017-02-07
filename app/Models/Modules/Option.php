<?php

namespace App\Models\Modules;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
	protected $fillable = [ ];

    public function question()
    {
        return $this->belongsTo('App\Models\Modules\Question');
    }
}
