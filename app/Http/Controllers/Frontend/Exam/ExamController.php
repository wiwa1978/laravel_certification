<?php

namespace App\Http\Controllers\Frontend\Exam;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Exam\Exam;
use App\Models\Certification\Certification;
use App\Models\Question\Question;
use App\Models\Answer\Answer;
use App\Models\Option\Option;



class ExamController extends Controller
{
    public function getAllExams()
    {
              
        $exams = Exam::all();

        return view('frontend.exams.index', ['exams' => $exams]);
    }

    public function getExamsPerCertification($certification_id)
    {
              
        $exams = Exam::where('certification_id', '=', $certification_id)->get();
        return view('frontend.exam.index', array(
            'exams' => $exams,
        ));
    }

    public function getSingleExam(Exam $exam)
    {    
        /* 
        $question_ids = \DB::table('questions')->select('id')->where('exam_id','=',$exam->id)->get();
        
        foreach($question_ids as $question) 
        {
            $questions[$this->getQuestion($question->id)][] = \DB::table('options')->where('question_id','=',$question->id)->select('id','option','question_id')->get();

        }
        return view('frontend.modules.questions', ['questions' => $questions,'exam' => $exam]);
        */

      

       
            /* $questions = Question::inRandomOrder()->where('exam_id', '=', $exam->id )->with(['options' => function($query) {
                            $query->orderBy(DB::raw('RAND()'));
                         }])->simplePaginate(1);
            */

            $questions = Question::where('exam_id', '=', $exam->id )->with(['options'])->get();

    
        
        //dd($questions);User::->get();
        
        
        return view('frontend.question.question-wizard', ['questions' => $questions,'exam' => $exam]);
    }


    
    //Get the question name
    public function getTotalQuestions($exam_id)
    {
        $count = Question::where('exam_id', $exam_id)->count();
        return $count;
    }


    public function calculateResultforExam(Request $req, Exam $exam)
    {
        $input = $req->all();
        $total_questions = $this->getTotalQuestions($exam->id);
        
        if(isset($input['option'])){
            $array_of_options = $input['option'];

            foreach($array_of_options as $key => $value)
            {
                //$key = question id
                //$value = user submitted answer
                $answer = Answer::select('option_id')->where('question_id','=',$key)->get();
                if(count($answer) === 1)
                {
                    //Single answer
                    $answer = $answer->first();
                    if($answer->option_id === $value)
                    {
                        //User answer is correct
                        $correct_answer[$key] = $value;
                    }
                    else
                    {
                        //User answer isn't correct
                        $wrong_answer[$key] = $value;
                    }
                }
                else
                {
                    //Multiple answer
                    foreach($answer as $ans)
                    {
                        foreach ($value as $val) 
                        {
                            if($ans->option_id === $val)
                            {
                                $multiple_right_answer[] = $val;
                            }
                        }
                    }
                    if(isset($multiple_right_answer))
                    {
                        if(count($multiple_right_answer) === count($answer))
                        {
                            $correct_answer[$key] = $value;
                        }
                        else
                        {
                            $wrong_answer[$key] = $value;
                        }
                    }
                    else
                    {
                        $wrong_answer[$key] = $value;
                    }
                }//End of Multiple answer
                $multiple_right_answer = null;
            }
            if(isset($correct_answer))
            {
                //correct_answer_count contains amount if correct answers
                $correct_answer_count = count($correct_answer);
                //correct_answer_array contains the correct answers
                $correct_answer_array = array_keys($correct_answer);
                //$chart = $this->getSkillResult($correct_answer_array);
                //$this->generatePdf($chart);
            }
            else
            {
                $correct_answer_count = 0;
                $correct_answer = null;
                $chart = null;
            }
            if(isset($wrong_answer))
            {
                $wrong_answer_count = count($wrong_answer);
            }
            else 
            {
                $wrong_answer_count = 0;
                $wrong_answer = null;
            }
            $success_percentage = ($correct_answer_count * 100)/($correct_answer_count + $wrong_answer_count);
            $result_data = [
                'user_id' => access()->user()->id,
                'exam_id' => $req->input('exam_id'),
                'total_attempt' => ($correct_answer_count + $wrong_answer_count),
                'correct_answers' => $correct_answer_count,
                'percentage' => $success_percentage
            ];
            \DB::table('results')->insert($result_data);
            $user_given_inputs = $input['option'];
            //Call the pdf creation and sending email function here to include the $skill data and user result data

            //return view('frontend.modules.result')->with(['chart' => $chart,'user_given_inputs' => $user_given_inputs,'percentage' => $success_percentage,'correct_answer' => $correct_answer,'wrong_answer' => $wrong_answer]);

            return view('frontend.exam.result')->with(['user_given_inputs' => $user_given_inputs, 'total_questions' => $total_questions,'percentage' => $success_percentage,'correct_answer' => $correct_answer,'wrong_answer' => $wrong_answer]);
        }
        else
        {
            //return redirect()->route('frontend.user.dashboard')
                //->withFlashError(trans('You did not answer any question. Try again!'));

            return redirect()->route('frontend.exam.questions-exam', $exam->id)->withFlashDanger('You did not answer any question. Try again!');
        }
    }
            
    //Calculate the skill result for piechart
    public function getSkillResult(&$ids){
        if(count($ids) > 0){
            foreach($ids as $id){
                $skill_id = \DB::table('skill_question')->join('skills','skill_question.skill_id','=','skills.id')->select('skills.id')->where('question_id','=',$id)->get();
                foreach($skill_id as $id){
                    $skills_id_array[] = $id->id;
                }
            }
            // var_dump($skills_id_array);
            //Get the number of occurance of an skill into array
            $b = array_count_values($skills_id_array);
            //Make the array from $b
            $skill_id_array = array_keys($b);
            //Make the key, value pair of skill_id => $number_of_current_answer
            $a = array_combine($b,$skill_id_array);
            // var_dump($a);
            // var_dump($skill_id_array);
            foreach($a as $key => $value ){
                $skill_name = $this->getSkillName($key);
                $chart[$skill_name[0]->title] = round(($value *100)/count($ids));
            }
            $this->skill_chart_stat = $chart;
            return $chart;
        }
    }
}


