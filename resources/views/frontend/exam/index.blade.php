@extends('frontend.layouts.app')

@section('content')
    <div class="row">

        <div class="col-xs-12">

            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('navs.frontend.exam.exam-overview')}}</div>

                <div class="panel-body">

                      <div class="row">
                            @foreach ($exams as $exam)
                                    <div class="col-sm-4 col-md-4">
                                        <div class="thumbnail">
                                            <div class="caption">
                                                <h3>{{ $exam->exam_name }}</h3>
                                                <h5>{{ $exam->categoryname_from_id($exam->category_id) }}</h5>
                                                
                                                 <a href="{{ URL::route('frontend.exam.questions-exam', $exam->id) }}" class="btn btn-primary">Select this exam </a>
                                            </div>
                                        </div>
                                    </div>
                               
                            @endforeach
                        </div><!--row-->

                </div><!--panel body-->

            </div><!-- panel -->

        </div><!-- col-md-10 -->

    </div><!-- row -->
@endsection



