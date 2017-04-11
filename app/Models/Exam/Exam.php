<?php

namespace App\Models\Exam;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category\Category;


class Exam extends Model
{
	protected $fillable = [ ];

    public function certification()
    {
        return $this->belongsTo('App\Models\Certification\Certification');
    }

    public function questions()
    {
        return $this->hasMany('App\Models\Exam\Exam');
    }

    public function categories()
    {
        return $this->hasOne('App\Models\Category\Category');
    }

    public function categoryname_from_id($category_id)
    {
        return Category::find($category_id)->category;
    }

}
