<?php

namespace App\Models\Option;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
	protected $fillable = [ ];

    public function question()
    {
        return $this->belongsTo('App\Models\Question\Question');
    }
}
