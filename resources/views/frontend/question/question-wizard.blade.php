@extends('frontend.layouts.app')

@section('content')
    <div class="row">

        <div class="col-xs-12">

            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('navs.frontend.question.question-overview') }} for exam {{ $exam->id}}</div>

                <div class="panel-body">
                    @if(isset($questions))
                        <form class="" action="{{ URL::route('frontend.exam.exam-result', $exam->id) }}" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="exam_id" value="{{ $exam->id }}">
                            <ul class="list-group questions">
                                @foreach($questions as $question)

                                    <li class="list-group-item">Question: <b>{{ $question->question }}</b>
                                         @foreach($question->options as $option)
                                            @if(\App::make('App\Http\Controllers\Frontend\Question\QuestionController')->multipleAnswersPerQuestion($option->question_id) == true)
                                                <div class="checkbox">
                                                    <label><input type="checkbox" class="" name="option[{{$option->question_id}}][]" value="{{ $option->id }}"> {{ $option->option}}</label>
                                                </div>
                                            @else
                                                <div class="radio">
                                                    <label><input type="radio" class="" name="option[{{$option->question_id}}]" value="{{ $option->id }}"> {{ $option->option}}</label>
                                                </div>
                                            @endif
                                             
                                       
                                        @endforeach
                                    </li>


                                   


                                @endforeach

                               



                                <div class="form-group final-submit text-center">
                                    <h4>Click the below button to see your result!</h4>
                                    <button type="submit" name="submit" class="btn btn-success">See results for this exam</button>
                                </div>
                            </ul>
                        </form>
                    @else
                    <h4 class="text-warning text-center">Please go back to select a <a href"{{ URL::route('frontend.user.products') }}> exam </a></h4>
                    @endif


                  













                </div><!--panel body-->

            </div><!-- panel -->

        </div><!-- col-md-10 -->

    </div><!-- row -->
@endsection



