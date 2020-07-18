<?php $__env->startSection('title', __('Add Award Category')); ?>

<?php $__env->startSection('main_content'); ?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <?php echo __('Award Lists'); ?>

    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo url('/dashboard'); ?>"><i class="fa fa-dashboard"></i> <?php echo __('Dashboard'); ?></a></li>
      <li><a><?php echo __('Setting'); ?></a></li>
      <li><a href="<?php echo url('/setting/award_categories'); ?>"><?php echo __('Award Category Lists'); ?></a></li>
      <li class="active"><?php echo __('Add Award Category'); ?></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- SELECT2 EXAMPLE -->
    <div class="box box-default">
      <div class="box-header with-border">
        <h3 class="box-title"><?php echo __('Add Award Category'); ?></h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
        </div>
      </div>
      <!-- /.box-header -->
      <form action="<?php echo url('/setting/award_categories/store'); ?>" method="post" name="award_add_form">
        <?php echo csrf_field(); ?>

        <div class="box-body">
          <div class="row">
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
              <?php else: ?>
              <p class="text-yellow"><?php echo __('Enter Awards Title. All field are required.'); ?> </p>
              <?php endif; ?>
            </div>
            <!-- /.Notification Box -->

            <div class="col-md-6">
              <label for="award_title"><?php echo __('Award Name/Title'); ?> <span class="text-danger">*</span></label>
              <div class="form-group<?php echo $errors->has('award_title') ? ' has-error' : ''; ?> has-feedback">
                <input type="text" name="award_title" id="award_title" class="form-control" value="<?php echo old('award_title'); ?>" placeholder="<?php echo __('Enter Award Name/Title..'); ?>">
                <?php if($errors->has('award_title')): ?>
                <span class="help-block">
                  <strong><?php echo $errors->first('award_title'); ?></strong>
                </span>
                <?php endif; ?>
              </div>
              <!-- /.form-group -->



              <label for="publication_status"><?php echo __('Publication Status'); ?> <span class="text-danger">*</span></label>
              <div class="form-group<?php echo $errors->has('publication_status') ? ' has-error' : ''; ?> has-feedback">
                <select name="publication_status" id="publication_status" class="form-control">
                  <option value="" selected disabled><?php echo __('Select one'); ?></option>
                  <option value="1"><?php echo __('Published'); ?></option>
                  <option value="0"><?php echo __('Unpublished'); ?></option>
                </select>
                <?php if($errors->has('publication_status')): ?>
                <span class="help-block">
                  <strong><?php echo $errors->first('publication_status'); ?></strong>
                </span>
                <?php endif; ?>
              </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->

            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <a href="<?php echo url('/setting/award_categories'); ?>" class="btn btn-danger btn-flat"><i class="icon fa fa-close"></i> <?php echo __('Cancel'); ?></a>
          <button type="submit" class="btn btn-primary btn-flat"><i class="icon fa fa-plus"></i> <?php echo __('Add award List'); ?></button>
        </div>
      </form>
    </div>
    <!-- /.box -->


  </section>
  <!-- /.content -->
</div>
<script type="text/javascript">
document.forms['award_add_form'].elements['publication_status'].value = "<?php echo old('publication_status'); ?>";
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('administrator.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>