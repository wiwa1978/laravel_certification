@extends('frontend.layouts.app')

@section('content')
    <div class="row">

        <div class="col-xs-12">

            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('navs.frontend.modules.question-overview') }}</div>

                <div class="panel-body">
                    @if(isset($questions))
                        <form class="" action="{{ URL::route('frontend.exam.exam-result', $exam->id) }}" method="post">

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="exam_id" value="{{ $exam->id }}">
                            <ul class="list-group questions">
                                @foreach($questions as $key => $value)

                                    <li class="list-group-item">Question: <b>{{ $key }}</b>
                                         @foreach($value[0] as $q)
                                            @if(\App::make('App\Http\Controllers\Frontend\Question\QuestionController')->multipleAnswersPerQuestion($q->question_id) == true)
                                                <div class="checkbox">
                                                    <label><input type="checkbox" class="" name="option[{{$q->question_id}}][]" value="{{ $q->id }}"> {{ $q->option}}</label>
                                                </div>
                                            @else
                                                <div class="radio">
                                                    <label><input type="radio" class="" name="option[{{$q->question_id}}]" value="{{ $q->id }}"> {{ $q->option}}</label>
                                                </div>
                                            @endif
                                         @endforeach
                                        <div class="form-group text-left">
                                            <a href="#" id="submit-single-question" class="btn btn-primary" target="{{$key}}">Submit</a>
                                        </div>
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



