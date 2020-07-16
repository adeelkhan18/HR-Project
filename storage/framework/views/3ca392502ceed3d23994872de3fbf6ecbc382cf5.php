<?php $__env->startSection('title', __('Jobs')); ?>

<?php $__env->startSection('main_content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?php echo __('Candidates'); ?>

        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo url('/dashboard'); ?>"><i class="fa fa-dashboard"></i> <?php echo __('Dashboard'); ?></a></li>
            <li><a><?php echo __('Candidates'); ?></a></li>
            <li class="active"><?php echo __('Candidates'); ?></li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title"><?php echo __('Manage Candidates'); ?></h3>

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
                    <span class="hidden-sm hidden-xs"> <?php echo __('Print'); ?></span>
                </button>
            </div>
                
                <div  class="col-md-6">
                    <input type="text" id="myInput" class="form-control" placeholder="<?php echo __('Search..'); ?>">
                </div>

                <!-- Notification Box -->
                <div class="col-md-12">
                    <?php if(!empty(Session::get('message'))): ?>
                    <div class="alert alert-success alert-dismissible" id="notification_box">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <i class="icon fa fa-check"></i> <?php echo Session::get('message'); ?>

                    </div>
                    <?php elseif(!empty(Session::get('exception'))): ?>
                    <div class="alert alert-warning alert-dismissible" id="notification_box">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <i class="icon fa fa-warning"></i> <?php echo Session::get('exception'); ?>

                    </div>
                    <?php endif; ?>
                </div>
                <!-- /.Notification Box -->
        <div id="printable_area" class="col-md-12 table-responsive">
               <table  class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th><?php echo __(' SL#'); ?></th>
                            <th><?php echo __(' ID'); ?></th>
                            <th><?php echo __(' Cv'); ?></th>
                            <th><?php echo __(' Name'); ?></th>
                            <th><?php echo __(' email'); ?></th>
                            <th><?php echo __(' phone'); ?></th>
                            <th><?php echo __(' Job title'); ?></th>
                            <th><?php echo __(' Job level'); ?></th>
                            <th class="text-center"><?php echo __('status'); ?></th>
                            <th class="text-center"><?php echo __('Created_at'); ?></th>
                            <th class="text-center"><?php echo __('Actions'); ?></th> 
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        <?php $sl = 1; ?>
                        
                        <?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo $sl++; ?></td>
                            <td><?php echo $employee['id']; ?></td>
                            <td><a href="<?php echo route('download_pdf',$employee['id']); ?>"><i class="fa fa-download" aria-hidden="true"></i>
                            </a> </td>
                            <td><?php echo $employee['name']; ?></td>
                            <td><?php echo $employee['email']; ?></td>
                            <td><?php echo $employee['phone']; ?></td>
                            <td><?php echo $employee['title']; ?></td>
                            <td><?php echo $employee['Joblevel']; ?></td>
                            <td><?php echo $employee['application_status']; ?></td>
                            <td class="text-center"><?php echo date("d F Y", strtotime($employee['created_at'])); ?></td>
                            <td class="text-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary btn-xs btn-flat dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <?php echo __('Action'); ?> <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">

                                    <li><a  href="<?php echo route('cand_app',$employee['id']); ?>"><i class="icon fa fa-file-text"></i> <?php echo __('Approved'); ?></a></li>

                                    <li><a href="<?php echo route('cand_not_app',$employee['id']); ?>"><i class="icon fa fa-file-text"></i> <?php echo __('Not Approved'); ?></a></li>

                                </ul>
                            </div>
                            </td>   
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('administrator.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>