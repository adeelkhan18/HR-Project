@extends('administrator.master')
@section('title', __('Jobs'))

@section('main_content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            {{ __('Candidates') }}
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/dashboard') }}"><i class="fa fa-dashboard"></i> {{ __('Dashboard') }}</a></li>
            <li><a>{{ __('Candidates') }}</a></li>
            <li class="active">{{ __('Candidates') }}</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">{{ __('Manage Candidates') }}</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <div  class="col-md-3">
                
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
                            <th>{{ __(' Cv') }}</th>
                            <th>{{ __(' Name') }}</th>
                            <th>{{ __(' email') }}</th>
                            <th>{{ __(' phone') }}</th>
                            <th>{{ __(' Job title') }}</th>
                            <th>{{ __(' Job level') }}</th>
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
                            <td><a href="{{route('download_pdf',$employee['id'])}}"><i class="fa fa-download" aria-hidden="true"></i>
                            </a> </td>
                            <td>{{ $employee['name'] }}</td>
                            <td>{{ $employee['email'] }}</td>
                            <td>{{ $employee['phone'] }}</td>
                            <td>{{ $employee['title'] }}</td>
                            <td>{{ $employee['Joblevel'] }}</td>
                            <td>{{ $employee['application_status'] }}</td>
                            <td class="text-center">{{ date("d F Y", strtotime($employee['created_at'])) }}</td>
                            <td class="text-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary btn-xs btn-flat dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    {{ __('Action') }} <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">

                                    <li><a  href="{{route('cand_app',$employee['id'])}}"><i class="icon fa fa-file-text"></i> {{ __('Approved') }}</a></li>

                                    <li><a href="{{route('cand_not_app',$employee['id'])}}"><i class="icon fa fa-file-text"></i> {{ __('Not Approved') }}</a></li>

                                </ul>
                            </div>
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