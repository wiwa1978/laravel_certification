<?php

namespace App\Models\Exam;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category\Category;
use App\Models\Exam\Traits\Attribute\ExamAttribute;


class Exam extends Model
{
    use ExamAttribute;

	protected $fillable = ['certification_id', 'category_id', 'exam_name', 'exam_code', 'description'];

    public function certification()
    {
        return $this->belongsTo('App\Models\Certification\Certification');
    }

    public function questions()
    {
        //return $this->hasMany('App\Models\Exam\Exam');
        return $this->hasMany('App\Models\Question\Question');
    }

    public function category()
    {
        return $this-> hasOne('App\Models\Category\Category');
    }

    public function categoryname_from_id($category_id)
    {
        return Category::find($category_id)->category;
    }

    public function examname_from_id($exam_id)
    {
        return Exam::find($exam_id)->exam_name;
    }

}
