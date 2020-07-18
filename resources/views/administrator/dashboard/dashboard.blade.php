@extends('administrator.master')
@section('title', __('Dashboard'))

@section('main_content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>{{ __('Dashboard') }}
      
      <small>{{ __('Control panel') }}</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i>{{ __(' Home') }}</a></li>
      <li class="active">{{ __('Dashboard') }}</li>
    </ol>
  </section>
  @php($user = Auth::user())
  @if($user->access_label == 1)
  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">
          <h3><i class="fa fa-users"></i> {{ count($employees) }}</h3>

          <center><b>{{ __('Employees') }}</b></center>
        </div>
        <div class="icon">
          
        </div>
        <a href="{{ url('/people/employees') }}" class="small-box-footer">{{ __('More info') }} <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-orange">
        <div class="inner">
         <h3><i class="fa fa-envelope"></i> {{ count($references) }}</h3>

          <center><b>{{ __('References') }}</b></center>
        </div>
        <div class="icon">
          
        </div>
        <a href="{{ url('/people/references') }}" class="small-box-footer">{{ __('More info ') }}<i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-blue">
        <div class="inner">
          <h3><i class="fa fa-file"></i> {{ count($clients) }}</h3>

            <center><b>{{ __('Clients') }}</b></center>
        </div>
        <div class="icon">
          
        </div>
        <a href="{{ url('/people/clients') }}" class="small-box-footer">{{ __('More info ') }}<i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-red">
        <div class="inner">
          <h3><i class="fa fa-image"></i> {{ count($files) }}</h3>

          <center> <b>{{ __('Files') }}</b></center> 
        </div>
        <div class="icon">
          
        </div>
        <a href="{{ url('/folders') }}" class="small-box-footer">{{ __('More info') }} <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->





@endif


<!-- =================Statistics start ========================-->
<script src="{{ asset('public/backend/Chart.bundle.js') }}"></script>
<?php
$notics= \App\Notice::all();
$holidays= \App\Holiday::all();
$files= \App\File::all();


$personalevents= \App\PersonalEvent::all();

?>
<div class="row">
    <div class="col-lg-6">
        <canvas id="myChart2"></canvas>
    </div>
    <div class="col-lg-6">
        <canvas id="myChart"></canvas>
    </div>
</div>

<div class="row myrow">
    <div class="col-lg-6 col-sm-6">
      <h2 class="myh2">{{ __('Holiday') }}</h2>
      <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>{{ __('SL') }}</th>
                                <th>{{ __('Holiday Name') }}</th>
                                <th>{{ __('Dated') }}</th>
                                <th>{{ __('Description') }}</th> 
                            </tr>
                        </thead>
                        <tbody>
                          <?php $sl=1;?>
                           
                            @foreach($holidays as $holiday)
                            <tr>
                                <td>{{$sl++}}</td>
                                <td>{{$holiday->holiday_name}}</td>
                                <td>{{$holiday->date}}</td>
                                <td>{{$holiday->description}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
    </div>
    
    <div class="col-lg-6 col-sm-6">
      <h2 class="myh2">{{ __('Events') }}</h2>
      <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>{{ __('SL') }}</th>
                                <th>{{ __('Event') }}</th>
                                <th>{{ __('Dated Start') }}</th>
                                 <th>{{ __('Dated End') }}</th>
                                <th>{{ __('Description') }}</th> 
                            </tr>
                        </thead>
                        <tbody>
                          <?php $sl=1;?>
                           
                            @foreach($personalevents as $events)
                            <tr>
                                <td>{{$sl++}}</td>
                                <td>{{$events->personal_event}}</td>
                                <td>{{$events->start_date}}</td>
                                <td>{{$events->end_date}}</td>
                                <td>{{$events->personal_event_description}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
    
    </div>
  </div>
    <div class="col-lg-6 col-sm-6">
      <h2 class="myh2-1">{{ __('Notice') }}</h2>
       <table class="table table-bordered table-striped">

                        <thead>
                            <tr>
                                <th>{{ __('SL') }}</th>
                                <th>{{ __('Title') }}</th>
                                <th>{{ __('Description') }}</th> 
                            </tr>
                        </thead>
                        <tbody>
                          <?php $sl=1;?>
                           
                            @foreach($notics as $notic)
                            <tr>
                                <td>{{$sl++}}</td>
                                <td>{{$notic->notice_title}}</td>
                                <td>{{$notic->description}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
    </div>


<script type="text/javascript">
var ctx = document.getElementById('myChart');
var myChart = new Chart(ctx, {
type: 'pie',
data: {
labels: ['Employees', 'Notices', 'Holidays', 'Files'],
datasets: [{
label: 'Evaluation report by pie chart',
data: [{{ count($employees) }}, {{ count($notics) }}, {{ count($holidays) }} , {{ count($files) }} ],
backgroundColor: [
'#17B6A4',
'#2184DA',
'#c16275',
'#3C454D',
],
borderColor: [
'#c16275',
'#2184DA',
'#17B6A4',
'#3C454D'
],
borderWidth: 0
}]
},
options: {
scales: {
yAxes: [{
ticks: {
beginAtZero: true
}
}]
}
}
});
</script>
<script type="text/javascript">
var ctx = document.getElementById('myChart2');
var myChart2 = new Chart(ctx, {
type: 'bar',
data: {
labels: ['Employees', 'Notices', 'Holidays', 'Files'],
datasets: [{
label: 'Evaluation Report By Bar Chart',
data: [{{ count($employees) }}, {{ count($notics) }}, {{ count($holidays) }} , {{ count($files) }} ],
backgroundColor: [
'#17B6A4',
'#2184DA',
'#c16275',
'#3C454D',
'#8A8F94'
],
borderColor: [
'#c16275',
'#2184DA',
'#17B6A4',
'#3C454D',
'#8A8F94'
],
borderWidth: 0
}]
},
options: {
scales: {
yAxes: [{
ticks: {
beginAtZero: true
}
}]
}
}
});
</script>




<!-- =================Statistics end ========================-->














  </div>

    

  </section>
  <!-- /.content -->
  
</div>
@endsection