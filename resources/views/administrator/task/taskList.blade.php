@extends('administrator.master')
@section('title', __('Manage Tasks'))

@section('main_content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
          {{ __(' Manage Tasks') }}
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/dashboard') }}"><i class="fa fa-dashboard"></i> {{ __('Dashboard') }}</a></li>
            <li><a>{{ __('Tasks') }}</a></li>
            <li class="active">{{ __('Manage Tasks') }}</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">{{ __('Manage Tasks') }}</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                @if(Auth::user()->access_label ==1)
                <div  class="col-md-3">
                <a href="{{ url('/tasks/create') }}" class="btn btn-primary btn-flat"><i class="fa fa-plus"></i> {{ __('add new Tasks') }}</a>
            </div>
                @endif
                <div  class="col-md-3">
                <button type="button" class="tip btn btn-primary btn-flat" title="Print" data-original-title="Label Printer" onclick="printDiv('printable_area')">
                    <i class="fa fa-print"></i>
                    <span class="hidden-sm hidden-xs"> {{ __('Print') }}</span>
                </button>
            </div>
                <div  class="col-md-6">
                    <input type="text" id="myInput" class="form-control" placeholder="{{ __('Search..') }}">
                </div>

                <!-- Notification Box -->
                <div class="col-md-12">
                    @if (!empty(Session::get('message')))
                    <div class="alert alert-success alert-dismissible" id="notification_box">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <i class="icon fa fa-check"></i> {{ Session::get('message') }}
                    </div>
                    @elseif (!empty(Session::get('exception')))
                    <div class="alert alert-warning alert-dismissible" id="notification_box">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <i class="icon fa fa-warning"></i> {{ Session::get('exception') }}
                    </div>
                    @endif
                </div>
                <!-- /.Notification Box -->
                <div id="printable_area" class="col-md-12 table-responsive">

                <table  class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>{{ __('SL') }}</th>
                            <th>{{ __('ID NO') }}</th>
                            <th>{{ __('Created For') }}</th>
                            <th>{{ __('Don Task') }}</th>
                            <th>{{ __('Create at') }}</th>
                            <th>{{ __('Task Detail') }}</th>
                            <th>{{ __('Task Status') }}</th>
                            <th class="text-center">{{ __('Actions') }}</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        @php ($sl = 1)

                        @foreach($Task as $data)
                        <tr>
                            <td>{{ $sl ++ }}</td>
                            <td>{{$data['id']}}</td>
                            <td>{{$data['name']}}</td>
                            <td>{{$data['count']}}</td>
                            <td>{{ date("d F Y", strtotime($data['created_at'])) }}</td>
                            <td>{{$data['task_detail']}}</td>
                            <td>{{$data['task_status']}}</td>
                            <td class="text-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary btn-xs btn-flat dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    {{ __('Action') }} <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">

                                    <li><a  href="{{route('taskcom',$data['id'])}}"><i class="icon fa fa-file-text"></i> {{ __('Completed') }}</a></li>

                                    <li><a href="{{route('taskpend',$data['id'])}}"><i class="icon fa fa-file-text"></i> {{ __('Pending') }}</a></li>

                                </ul>
                            </div>
                        </td>

                        </tr>
                        @endforeach

                    </tbody>
                </table>

  


            </div><!--printable-->
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>



@endsection
