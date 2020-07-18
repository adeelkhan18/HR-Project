<?php $__env->startSection('title', __('Error 403')); ?>

<?php $__env->startSection('main_content'); ?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>403 <?php echo __('Error Page'); ?></h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo url('/dashboard'); ?>"><i class="fa fa-dashboard"></i> <?php echo __('Home'); ?></a></li>
            <li class="active">404 <?php echo __('error'); ?></li>
        </ol>
    </section>

    <section class="content">
        <div class="error-page">
            <h2 class="headline text-yellow"> 403</h2>

            <div class="error-content">
                <h3><i class="fa fa-warning text-yellow"></i> <?php echo __('Oops! Forbidden'); ?></h3>
                <p><?php echo __('You dont have permission to access this page.'); ?></p>
            </div>
            <!-- /.error-content -->
        </div>
        <!-- /.error-page -->
    </section>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('administrator.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>