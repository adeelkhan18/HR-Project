@extends('administrator.master')
@section('title', __('Manage Tasks'))

@section('main_content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
          {{ __(' Performance') }}
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/dashboard') }}"><i class="fa fa-dashboard"></i> {{ __('Dashboard') }}</a></li>
            <li><a>{{ __('Performance') }}</a></li>
            <li class="active">{{ __('Performance') }}</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">{{ __('Employee Performance') }}</h3>

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
                            <th>{{ __('Employee Name') }}</th>
                            <th>{{ __('Total Task') }}</th>
                            <th>{{ __('Completed Task') }}</th>
                            <th>{{ __('Pending task') }}</th>
                            
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        @php ($sl = 1)
                        @foreach($Task as $data)
                        

                        
                        <tr>
                            <td>{{ $sl ++ }}</td>
                            <td>{{$data['name']}}</td>
                            <td>{{$data['total_task']}}</td>
                            <td>{{$data['completed_task']}}</td>
                            <td>{{$data['pending_task']}}</td>
                            
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
