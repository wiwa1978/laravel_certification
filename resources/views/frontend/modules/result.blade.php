@extends('frontend.layouts.app')

@section('content')
    <div class="row">

        <div class="col-xs-12">

            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('navs.frontend.modules.result-overview')}}</div>

                <div class="panel-body">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="panel panel-success">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-comments fa-5x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <div class="huge">{{ count($correct_answer) }}</div>
                                                <div>Total correct answers</div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="panel panel-danger">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-tasks fa-5x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <div class="huge">{{ count($wrong_answer) }}</div>
                                                <div>Total wrong answers</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{ $total_questions }}</div>
                                    <div>Total questions</div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-support fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{ round($percentage, 2) }}%</div>
                                    <div>Total percentage</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->

    


                    @if(isset($wrong_answer) || isset($correct_answer))
                    
                       @if(isset($wrong_answer))
                            <h4 class="alert alert-danger">Wrong Answers</h4>

                            <ul class="list-group questions">
                            @foreach($wrong_answer as $key => $value )
                                <li class="list-group-item">Question: <b>{{ \App::make('App\Http\Controllers\Frontend\User\QuestionController')->getQuestion($key) }}</b>
                                
                                <?php $options =  \App::make('App\Http\Controllers\Frontend\User\QuestionController')->getOptions($key);?>
                                 <?php $wrong_single_answers = \App::make('App\Http\Controllers\Frontend\User\QuestionController')->getSingleCorrectAnswer($key);?>
                                @foreach($options as $option)
                                       @if(!is_array($value))

                                            @if($option->id == $value )
                                                <li class="list-group-item text-danger">{{ $option->option }}</li>
                                            @else
                                                <!--<li class="list-group-item">{{ $option->option }}</li>-->
                                            @endif
                                        @else
                                            <!-- For multiple values -->
                                            @if(in_array($option->id,$value))
                                                <li class="text-danger"> {{ $option->option }} </li>
                                            @else
                                                <li>{{ $option->option }}</li>
                                            @endif
                                        @endif
                                    @endforeach
                                    <dl>
                                    <dt>Correct Answer:</dt>
                                    @if(count($wrong_single_answers) == 1)
                                    <dd class="text-success">{{ \App::make('App\Http\Controllers\Frontend\User\QuestionController')->getAnswer($wrong_single_answers[0]->option_id)->option }}</dd>
                                    @else
                                        @foreach($wrong_single_answers as $answers)
                                            <dd class="text-success">{{ \App::make('App\Http\Controllers\Frontend\User\QuestionController')->getAnswer($answers->option_id)->option }}</dd>
                                        @endforeach
                                    @endif
                                    </dl>
                                </li> 
                               
                            @endforeach
                            </ul>
                        @endif


                       

                       @if(isset($correct_answer))
                        <h4 class="alert alert-success">Correct Answers</h4>
                        <ul class="list-group questions">
                        @foreach($correct_answer as $key => $value )
                            <li class="list-group-item">Question: <b>{{ \App::make('App\Http\Controllers\Frontend\User\QuestionController')->getQuestion($key) }}</b>
                           
                                <?php $options =  \App::make('App\Http\Controllers\Frontend\User\QuestionController')->getOptions($key);?>
                                @foreach($options as $option)
                                @if(!is_array($value))
                                    @if($option->id == $value )
                                        <li class="list-group-item text-success">Correct answer: {{ $option->option }}</li>
                                    @else
                                        <!--<li class="list-group-item">{{ $option->option }}</li>-->
                                    @endif
                                    @else
                                        <!-- For multiple values -->
                                        @if(in_array($option->id,$value))
                                            <li class="list-group-item text-success"> {{ $option->option }} </li>
                                        @else
                                            <li class="list-group-item">{{ $option->option }}</li>
                                        @endif
                                    @endif
                                @endforeach

                            </li>
                             <dl>
                                    <dt></dt>
                                    
                                    
                                    </dl>
                        @endforeach
                        
                        </li>
                    @endif
         
             
                @else
                    
                    <h4 class="text-center">Please go back to select an exam </a></h4>
                @endif

                </div><!--panel body-->

            </div><!-- panel -->

        </div><!-- col-md-10 -->

    </div><!-- row -->
@endsection



