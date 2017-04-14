@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.exams.management'))

@section('after-styles')
    {{ Html::style("css/backend/plugin/datatables/dataTables.bootstrap.min.css") }}
@endsection

@section('page-header')
    <h1>{{ trans('labels.backend.exams.management') }}</h1>
@endsection

@section('content')
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('labels.backend.exams.management') }}</h3>

            <div class="box-tools pull-right">
                @include('backend.exams.partials.exams-header-buttons')
            </div>
        </div><!-- /.box-header -->

        <div class="box-body">
            <div class="table-responsive">
                <table id="exams-table" class="table table-condensed table-hover">
                    <thead>
                        <tr>
                            <th>{{ trans('labels.backend.exams.table.id') }}</th>
                            <th>{{ trans('labels.backend.exams.table.certification_id') }}</th>
                            <th>{{ trans('labels.backend.exams.table.category_id') }}</th>
                            <th>{{ trans('labels.backend.exams.table.exam_name') }}</th>
                            <th>{{ trans('labels.backend.exams.table.exam_code') }}</th>
                            <th>{{ trans('labels.general.actions') }}</th>
                        </tr>
                    </thead>
                </table>
            </div><!--table-responsive-->
        </div><!-- /.box-body -->
    </div><!--box-->

    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('history.backend.recent_history') }}</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div><!-- /.box tools -->
        </div><!-- /.box-header -->
        <div class="box-body">
            {!! history()->renderType('Exams') !!}
        </div><!-- /.box-body -->
    </div><!--box box-success-->
@endsection

@section('after-scripts')
    {{ Html::script("js/backend/plugin/datatables/jquery.dataTables.min.js") }}
    {{ Html::script("js/backend/plugin/datatables/dataTables.bootstrap.min.js") }}

    <script>
        $(function() {
            $('#exams-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{{ route("admin.exam.get") }}',
                    type: 'post'
                },
                columns: [
                    {data: 'id', name: 'exams.id'},
                    {data: 'certification_id', name: 'exams.certification_id'},
                    {data: 'category_id', name: 'exams.category_id'},
                    {data: 'exam_name', name: 'exams.exam_name'},
                    {data: 'exam_code', name: 'exams.exam_code'},
                    {data: 'actions', name: 'actions', searchable: false, sortable: false}
                ],
                order: [[0, "asc"]],
                searchDelay: 500
            });
        });
    </script>
@endsection