@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.questions.management') . ' | ' . trans('labels.backend.questions.edit'))

@section('page-header')
    <h1>
        {{ trans('labels.backend.questions.management') }}
        <small>{{ trans('labels.backend.questions.edit') }}</small>
    </h1>
@endsection

@section('content')
    {{ Form::model($question, ['route' => ['admin.questions.update', $question], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH', 'id' => 'edit-question']) }}

        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">{{ trans('labels.backend.questions.edit') }}</h3>

                <div class="box-tools pull-right">
                    @include('backend.questions.partials.questions-header-buttons')
                </div><!--box-tools pull-right-->
            </div><!-- /.box-header -->

   
            <div class="box-body">
                <div class="form-group">
                    {{ Form::label('exam_id', trans('validation.attributes.backend.exams.exam-id'), ['class' => 'col-lg-2 control-label']) }}

                    <div class="col-lg-10">
                        {{ Form::text('exam_id', $question->exam_id, ['class' => 'form-control', 'disabled' => 'true', 'placeholder' => trans('validation.attributes.backend.exams.exam-id')]) }}
                    </div><!--col-lg-10-->
                </div><!--form control-->

       
                <div class="form-group">
                    {{ Form::label('question', trans('validation.attributes.backend.questions.question'), ['class' => 'col-lg-2 control-label']) }}

                    <div class="col-lg-10">
                        {{ Form::text('question', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.questions.question')]) }}
                    </div><!--col-lg-10-->
                </div><!--form control-->


                
            </div><!-- /.box-body -->
        </div><!--box-->

        <div class="box box-success">
            <div class="box-body">
                <div class="pull-left">
                    {{ link_to_route('admin.questions.index', trans('buttons.general.cancel'), [], ['class' => 'btn btn-danger btn-xs']) }}
                </div><!--pull-left-->

                <div class="pull-right">
                    {{ Form::submit(trans('buttons.general.crud.update'), ['class' => 'btn btn-success btn-xs']) }}
                </div><!--pull-right-->

                <div class="clearfix"></div>
            </div><!-- /.box-body -->
        </div><!--box-->

    {{ Form::close() }}
@endsection

@section('after-scripts')
    {{ Html::script('js/backend/modules/questions/script.js') }}
@endsection