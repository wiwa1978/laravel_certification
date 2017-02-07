<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Modules\Exam;
use App\Models\Modules\Product;

class ExamController extends Controller
{
    public function getAllExams()
    {
              
        $exams = Exam::all();

        return view('frontend.modules.exams', ['exams' => $exams]);
    }

    public function getExamsPerProduct($product_id)
    {
              
        $exams = Exam::where('product_id', '=', $product_id)->get();
        //$product = Product::where('id', $product_id)->get();
        //$exam = Exam::find('1000')->get();
        //$product = Product::find($product_id)->get();
        

        return view('frontend.modules.exam', array(
            'exams' => $exams,
        

            ));
    }
}


