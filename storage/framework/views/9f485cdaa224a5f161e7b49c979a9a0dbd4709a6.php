<?php $__env->startSection('title', __('Manage Tasks')); ?>

<?php $__env->startSection('main_content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
          <?php echo __(' Manage Tasks'); ?>

        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo url('/dashboard'); ?>"><i class="fa fa-dashboard"></i> <?php echo __('Dashboard'); ?></a></li>
            <li><a><?php echo __('Tasks'); ?></a></li>
            <li class="active"><?php echo __('Manage Tasks'); ?></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title"><?php echo __('Manage Tasks'); ?></h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <?php if(Auth::user()->access_label ==1): ?>
                <div  class="col-md-3">
                <a href="<?php echo url('/tasks/create'); ?>" class="btn btn-primary btn-flat"><i class="fa fa-plus"></i> <?php echo __('add new Tasks'); ?></a>
            </div>
                <?php endif; ?>
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
                            <th><?php echo __('SL'); ?></th>
                            <th><?php echo __('ID NO'); ?></th>
                            <th><?php echo __('Created For'); ?></th>
                            <th><?php echo __('Completed Task'); ?></th>
                            <th><?php echo __('Create at'); ?></th>
                            <th><?php echo __('Task Detail'); ?></th>
                            <th><?php echo __('Task Status'); ?></th>
                            <th class="text-center"><?php echo __('Actions'); ?></th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        <?php ($sl = 1); ?>

                        <?php $__currentLoopData = $Task; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo $sl ++; ?></td>
                            <td><?php echo $data['id']; ?></td>
                            <td><?php echo $data['name']; ?></td>
                            <td><?php echo $data['count']; ?></td>
                            <td><?php echo date("d F Y", strtotime($data['created_at'])); ?></td>
                            <td><?php echo $data['task_detail']; ?></td>
                            <td><?php echo $data['task_status']; ?></td>
                            <td class="text-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary btn-xs btn-flat dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <?php echo __('Action'); ?> <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">

                                    <li><a  href="<?php echo route('taskcom',$data['id']); ?>"><i class="icon fa fa-file-text"></i> <?php echo __('Completed'); ?></a></li>

                                    <li><a href="<?php echo route('taskpend',$data['id']); ?>"><i class="icon fa fa-file-text"></i> <?php echo __('Pending'); ?></a></li>

                                </ul>
                            </div>
                        </td>

                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

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



<?php $__env->stopSection(); ?>

<?php echo $__env->make('administrator.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>