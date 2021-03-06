<?php $__env->startSection('title', __('Employee Award')); ?>

<?php $__env->startSection('main_content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
           <?php echo __('MANAGE EMPLOYEE AWARD'); ?>  
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo url('/dashboard'); ?>"><i class="fa fa-dashboard"></i> <?php echo __('Dashboard'); ?> </a></li>
            <li><a><?php echo __('Setting'); ?> </a></li>
            <li class="active"><?php echo __('Manage employee awards'); ?> </li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title"><?php echo __('Manage employee awards'); ?> </h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin')): ?>
                <div class="col-md-6">
                    <a href="<?php echo url('/hrm/employee-awards/create'); ?>" class="btn btn-primary btn-flat"><i class="fa fa-plus"></i><?php echo __(' Add employee award'); ?></a>
                </div>
                <?php endif; ?>
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
                <div class="col-md-12 table-responsive">
                    <table  class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th><?php echo __('SL#'); ?></th>
                                <th><?php echo __('Employee Name'); ?></th>
                                <th><?php echo __('Award Category'); ?></th>
                                <th><?php echo __('Gift'); ?></th>
                                <th><?php echo __('Month'); ?></th>
                                <th><?php echo __('Award Details'); ?></th>
                                <th><?php echo __('Created at'); ?></th>
                                <th class="text-center"><?php echo __('Status'); ?></th>
                                <th class="text-center"><?php echo __('Actions'); ?></th>
                            </tr>
                        </thead>
                        <tbody id="myTable">
                          <?php ($sl=1); ?>
                          <?php $__currentLoopData = $employee_awords; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee_aword): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo $sl ++; ?></td>
                                <td>
                                <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <?php if($employee['id'] == $employee_aword['employee_id']): ?>
                                <?php echo $employee['name']; ?>

                              <?php endif; ?>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </td>
                                <td><?php echo $employee_aword['award_title']; ?></td>
                                <td><?php echo $employee_aword['gift_item']; ?></td>
                                <td><?php echo date("d F Y", strtotime($employee_aword['select_month'])); ?></td>
                                <td><?php echo str_limit($employee_aword['description'], 65); ?></td>
                                <td><?php echo date("D d F Y h:ia", strtotime($employee_aword['created_at'])); ?></td>
                                <td class="text-center">
                                  <?php if( $employee_aword['publication_status'] == 1): ?>
                                    <span class="label label-success"><?php echo __('Published'); ?></span>
                                <?php else: ?>
                                <span class="label label-warning"><?php echo __('Unpublished'); ?></span>
                                  <?php endif; ?>

                                </td>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin')): ?>
                                <td class="text-center">
                                   <a href="<?php echo url('/hrm/employee-awards/edit/' . $employee_aword['id']); ?>"><i class="icon fa fa-edit"></i> <?php echo __('Edit'); ?></a>
                                </td>
                                <?php endif; ?>
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