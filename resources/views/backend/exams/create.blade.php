@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.exams.management') . ' | ' . trans('labels.backend.exams.create'))

@section('page-header')
    <h1>
        {{ trans('labels.backend.exams.management') }}
        <small>{{ trans('labels.backend.exams.create') }}</small>
    </h1>
@endsection

@section('content')
    {{ Form::open(['route' => 'admin.exams.store', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'POST', 'id' => 'create-question']) }}

        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">{{ trans('labels.backend.exams.create') }}</h3>

                <div class="box-tools pull-right">
                    @include('backend.exams.partials.exams-header-buttons')
                </div><!--box-tools pull-right-->
            </div><!-- /.box-header -->

            <div class="box-body">
                <div class="form-group">
                        {{ Form::label('exam_id', trans('validation.attributes.backend.certification.certification-id'), ['class' => 'col-lg-2 control-label']) }}

                        <div class="col-lg-10">
                            {{ Form::select('certification_id', $certifications, null, ['class' => 'form-control'] ) }}
                        </div><!--col-lg-3-->
                </div><!--form control-->

       
                <div class="form-group">
                    {{ Form::label('exam', trans('validation.attributes.backend.category.category-id'), ['class' => 'col-lg-2 control-label']) }}

                    <div class="col-lg-10">
                            {{ Form::select('category_id', $categories, null, ['class' => 'form-control'] ) }}
                        </div><!--col-lg-3-->
                </div><!--form control-->


                <div class="form-group">
                    {{ Form::label('exam_name', trans('validation.attributes.backend.exams.exam_name'), ['class' => 'col-lg-2 control-label']) }}

                    <div class="col-lg-10">
                        {{ Form::text('exam_name', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.exams.exam_name')]) }}
                    </div><!--col-lg-10-->
                </div><!--form control-->


                <div class="form-group">
                    {{ Form::label('exam_code', trans('validation.attributes.backend.exams.exam_code'), ['class' => 'col-lg-2 control-label']) }}

                    <div class="col-lg-10">
                        {{ Form::text('exam_code', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.exams.exam_code')]) }}
                    </div><!--col-lg-10-->
                </div><!--form control-->

                <div class="form-group">
                    {{ Form::label('exam_code', trans('validation.attributes.backend.exams.description'), ['class' => 'col-lg-2 control-label']) }}

                    <div class="col-lg-10">
                        {{ Form::text('description', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.exams.description')]) }}
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
                    {{ Form::submit(trans('buttons.general.crud.create'), ['class' => 'btn btn-success btn-xs']) }}
                </div><!--pull-right-->

                <div class="clearfix"></div>
            </div><!-- /.box-body -->
        </div><!--box-->

    {{ Form::close() }}
@endsection

@section('after-scripts')
    {{ Html::script('js/backend/questions/script.js') }}
@endsection