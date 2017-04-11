<?php

namespace App\Http\Controllers\Frontend\Question;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Question\Question;
use App\Models\Exam\Exam;
use App\Models\Answer\Answer;
use App\Models\Option\Option;
use Session;

use DB;

class QuestionController extends Controller
{
    public function getQuestions()
    {
        $questions = Question::all();
        return view('frontend.modules.questions', ['questions' => $questions]);
    }

    //Get the options of a question
	public function getOptions($id){
		$options = \DB::table('options')->where('question_id','=',$id)->get();
		return $options;
	}

	//Get the right answer id of a question
	public function getSingleCorrectAnswer($id){
		$answer = Answer::where('question_id','=',$id)->get();
		return $answer;
	}

	public function getAnswer($option_id){
		$option = Option::find($option_id);
		if(isset($option) && count($option) > 0){
			return $option;
		}
	}

   
    //Get the question name
	public function getQuestion($id)
	{
		$question = Question::find($id);
		return $question->question;
	}



	public function multipleAnswersPerQuestion($question_id)
	{
		$answers = \DB::table('answers')->where('question_id','=',$question_id)->get();
		if(count($answers) > 1){
			return true;
		}else {
			return false;
		}
	}

	
       
    
}
