@extends('administrator.master')
@section('title', __('Jobs'))

@section('main_content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            {{ __('Jobs') }}
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/dashboard') }}"><i class="fa fa-dashboard"></i> {{ __('Dashboard') }}</a></li>
            <li><a>{{ __('Jobs') }}</a></li>
            <li class="active">{{ __('Jobs') }}</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">{{ __('Manage Jobs') }}</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <div  class="col-md-3">
                <a href="{{ route('c_job') }}" class="btn btn-primary btn-flat"><i class="fa fa-plus"></i>{{ __(' Add') }} </a>
            </div>
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
                            <th>{{ __(' SL#') }}</th>
                            <th>{{ __(' ID') }}</th>
                            <th>{{ __(' Title') }}</th>
                            <th>{{ __(' Category') }}</th>
                            <th>{{ __(' JobType') }}</th>
                            <th class="text-center">{{ __('status') }}</th>
                            <th class="text-center">{{ __('Created_at') }}</th>
                            <th class="text-center">{{ __('Actions') }}</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        @php $sl = 1; @endphp
                        @foreach($jobs as $employee)
                        <tr>
                            <td>{{ $sl++ }}</td>
                            <td>{{ $employee['id'] }}</td>
                            <td>{{ $employee['title'] }}</td>
                            <td>{{ $employee['Category'] }}</td>
                            <td>{{ $employee['JobType'] }}</td>
                            <td>{{ $employee['status'] }}</td>
                            <td class="text-center">{{ date("d F Y", strtotime($employee['created_at'])) }}</td>
                           
                            <td class="text-center">
                               <a href="{{route('deletejob', $employee['id'])}}"><i class="icon fa fa-trash"></i> {{ __('delete') }}</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
@endsection