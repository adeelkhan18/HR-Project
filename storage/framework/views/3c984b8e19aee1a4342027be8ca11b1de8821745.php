<?php $__env->startSection('title', __('Dashboard')); ?>

<?php $__env->startSection('main_content'); ?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1><?php echo __('Dashboard'); ?>

      
      <small><?php echo __('Control panel'); ?></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i><?php echo __(' Home'); ?></a></li>
      <li class="active"><?php echo __('Dashboard'); ?></li>
    </ol>
  </section>
  <?php ($user = Auth::user()); ?>
  <?php if($user->access_label == 1): ?>
  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">
          <h3><i class="fa fa-users"></i> <?php echo count($employees); ?></h3>

          <center><b><?php echo __('Employees'); ?></b></center>
        </div>
        <div class="icon">
          
        </div>
        <a href="<?php echo url('/people/employees'); ?>" class="small-box-footer"><?php echo __('More info'); ?> <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-orange">
        <div class="inner">
         <h3><i class="fa fa-envelope"></i> <?php echo count($references); ?></h3>

          <center><b><?php echo __('References'); ?></b></center>
        </div>
        <div class="icon">
          
        </div>
        <a href="<?php echo url('/people/references'); ?>" class="small-box-footer"><?php echo __('More info '); ?><i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-blue">
        <div class="inner">
          <h3><i class="fa fa-file"></i> <?php echo count($clients); ?></h3>

            <center><b><?php echo __('Clients'); ?></b></center>
        </div>
        <div class="icon">
          
        </div>
        <a href="<?php echo url('/people/clients'); ?>" class="small-box-footer"><?php echo __('More info '); ?><i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-red">
        <div class="inner">
          <h3><i class="fa fa-image"></i> <?php echo count($files); ?></h3>

          <center> <b><?php echo __('Files'); ?></b></center> 
        </div>
        <div class="icon">
          
        </div>
        <a href="<?php echo url('/folders'); ?>" class="small-box-footer"><?php echo __('More info'); ?> <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->





<?php endif; ?>


<!-- =================Statistics start ========================-->
<script src="<?php echo asset('public/backend/Chart.bundle.js'); ?>"></script>
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
      <h2 class="myh2"><?php echo __('Holiday'); ?></h2>
      <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th><?php echo __('SL'); ?></th>
                                <th><?php echo __('Holiday Name'); ?></th>
                                <th><?php echo __('Dated'); ?></th>
                                <th><?php echo __('Description'); ?></th> 
                            </tr>
                        </thead>
                        <tbody>
                          <?php $sl=1;?>
                           
                            <?php $__currentLoopData = $holidays; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $holiday): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo $sl++; ?></td>
                                <td><?php echo $holiday->holiday_name; ?></td>
                                <td><?php echo $holiday->date; ?></td>
                                <td><?php echo $holiday->description; ?></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
    </div>
    
    <div class="col-lg-6 col-sm-6">
      <h2 class="myh2"><?php echo __('Events'); ?></h2>
      <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th><?php echo __('SL'); ?></th>
                                <th><?php echo __('Event'); ?></th>
                                <th><?php echo __('Dated Start'); ?></th>
                                 <th><?php echo __('Dated End'); ?></th>
                                <th><?php echo __('Description'); ?></th> 
                            </tr>
                        </thead>
                        <tbody>
                          <?php $sl=1;?>
                           
                            <?php $__currentLoopData = $personalevents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $events): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo $sl++; ?></td>
                                <td><?php echo $events->personal_event; ?></td>
                                <td><?php echo $events->start_date; ?></td>
                                <td><?php echo $events->end_date; ?></td>
                                <td><?php echo $events->personal_event_description; ?></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
    
    </div>
  </div>
    <div class="col-lg-6 col-sm-6">
      <h2 class="myh2-1"><?php echo __('Notice'); ?></h2>
       <table class="table table-bordered table-striped">

                        <thead>
                            <tr>
                                <th><?php echo __('SL'); ?></th>
                                <th><?php echo __('Title'); ?></th>
                                <th><?php echo __('Description'); ?></th> 
                            </tr>
                        </thead>
                        <tbody>
                          <?php $sl=1;?>
                           
                            <?php $__currentLoopData = $notics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo $sl++; ?></td>
                                <td><?php echo $notic->notice_title; ?></td>
                                <td><?php echo $notic->description; ?></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
data: [<?php echo count($employees); ?>, <?php echo count($notics); ?>, <?php echo count($holidays); ?> , <?php echo count($files); ?> ],
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
data: [<?php echo count($employees); ?>, <?php echo count($notics); ?>, <?php echo count($holidays); ?> , <?php echo count($files); ?> ],
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('administrator.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>