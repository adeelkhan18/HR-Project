<?php $__env->startSection('title', __('Add Job')); ?>

<?php $__env->startSection('main_content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
           <?php echo __(' Add Job'); ?>

        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo url('/dashboard'); ?>"><i class="fa fa-dashboard"></i><?php echo __('Dashboard'); ?> </a></li>
            <li class="active"><?php echo __('Add Job'); ?></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- SELECT2 EXAMPLE -->
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title"><?php echo __('Add Job'); ?></h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                </div>
            </div>
            <!-- /.box-header -->
            <form action="<?php echo route('jobstore'); ?>" method="post" name="employee_add_form">
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
                            <!-- <p class="text-yellow"><?php echo __('Enter team member details. All (*)field are required. (Default password for added user is 12345678)'); ?></p> -->
                            <?php endif; ?>
                        </div>
                        <!-- /.Notification Box -->

                        <div class="col-md-6">
                             <!-- /.form-group -->

                             <label for="name"><?php echo __('Title'); ?> <span class="text-danger">*</span></label>
                            <div class="form-group<?php echo $errors->has('name') ? ' has-error' : ''; ?> has-feedback">
                                <input type="text" name="Title" id="Title" class="form-control" value="<?php echo old('Title'); ?>" placeholder="<?php echo __('Enter name..'); ?>">
                                <?php if($errors->has('Title')): ?>
                                <span class="help-block">
                                    <strong><?php echo $errors->first('Title'); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                            <!-- /.form-group -->
                            
                            <label for="Category"><?php echo __('Category'); ?></label>
                            <div class="form-group<?php echo $errors->has('Category') ? ' has-error' : ''; ?> has-feedback">
                                <input type="text" name="Category" id="Category" class="form-control" value="<?php echo old('Category'); ?>" placeholder="<?php echo __('Enter Categorye..'); ?>">
                                <?php if($errors->has('Category')): ?>
                                <span class="help-block">
                                    <strong><?php echo $errors->first('Category'); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                            <!-- /.form-group -->

                            <label for="status"><?php echo __('status'); ?> <span class="text-danger">*</span></label>
                            <div class="form-group<?php echo $errors->has('status') ? ' has-error' : ''; ?> has-feedback">
                                <select name="status" id="status" class="form-control">
                                    <option value="" selected disabled><?php echo __('Select one'); ?></option>
                                    <option value="Publish"><?php echo __('Publish'); ?></option>
                                    <option value="unpublish"><?php echo __('unpublish'); ?></option>
                                </select>
                                <?php if($errors->has('status')): ?>
                                <span class="help-block">
                                    <strong><?php echo $errors->first('status'); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                            <!-- /.form-group -->

                            <label for="WorkShift"><?php echo __('Work Shift'); ?> <span class="text-danger">*</span></label>
                            <div class="form-group<?php echo $errors->has('WorkShift') ? ' has-error' : ''; ?> has-feedback">
                                <select name="WorkShift" id="WorkShift" class="form-control">
                                    <option value="" selected disabled><?php echo __('Select one'); ?></option>
                                    <option value="Day Shift"><?php echo __('Day Shift'); ?></option>
                                    <option value="Night Shift"><?php echo __('Night Shift'); ?></option>
                                </select>
                                <?php if($errors->has('WorkShift')): ?>
                                <span class="help-block">
                                    <strong><?php echo $errors->first('WorkShift'); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                            <!-- /.form-group -->

                            <label for="JobExperience"><?php echo __('Job Experience'); ?> </label>
                            <div class="form-group<?php echo $errors->has('JobExperience') ? ' has-error' : ''; ?> has-feedback">
                                <input type="text" name="JobExperience" id="JobExperience" class="form-control" value="<?php echo old('JobExperience'); ?>" placeholder="<?php echo __('Enter spouse name..'); ?>">
                                <?php if($errors->has('JobExperience')): ?>
                                <span class="help-block">
                                    <strong><?php echo $errors->first('JobExperience'); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                            <!-- /.form-group -->

                            <label for="Salary_end"><?php echo __('Salary End'); ?> <span class="text-danger">*</span></label>
                            <div class="form-group<?php echo $errors->has('Salary_end') ? ' has-error' : ''; ?> has-feedback">
                            <input type="text" name="Salary_end" id="Salary_end" class="form-control" value="<?php echo old('Salary_end'); ?>" placeholder="<?php echo __('Enter Salary end..'); ?>">
                                <?php if($errors->has('Salary_end')): ?>
                                <span class="help-block">
                                    <strong><?php echo $errors->first('Salary_end'); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                            <!-- /.form-group -->

                        </div>
                        <!-- /.col -->

                        <div class="col-md-6">
                            <label for="marital_status"><?php echo __('Job level'); ?> </label>
                            <div class="form-group<?php echo $errors->has('Job_level') ? ' has-error' : ''; ?> has-feedback">
                                <select name="Job_level" id="Job_level" class="form-control">
                                    <option value="" selected disabled><?php echo __('Select one'); ?></option>
                                    <option value="Executive"><?php echo __('Executive'); ?></option>
                                    <option value="Director"><?php echo __('Director'); ?></option>
                                    <option value="Manager"><?php echo __('Manager'); ?></option>
                                    <option value="Associate"><?php echo __('Associate'); ?></option>
                                    <option value="Staff"><?php echo __('Staff'); ?></option>
                                </select>
                                <?php if($errors->has('Job_level')): ?>
                                    <span class="help-block">
                                    <strong><?php echo $errors->first('Job_level'); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                            <!-- /.form-group -->
                            <label for="mother_name"><?php echo __('Location'); ?> </label>
                            <div class="form-group<?php echo $errors->has('Location') ? ' has-error' : ''; ?> has-feedback">
                                <input type="text" name="Location" id="Location" class="form-control" value="<?php echo old('Location'); ?>" placeholder="<?php echo __('Enter Location..'); ?>">
                                <?php if($errors->has('Location')): ?>
                                <span class="help-block">
                                    <strong><?php echo $errors->first('Location'); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                            <!-- /.form-group -->

                            <label for="gender"><?php echo __('Job Type'); ?> <span class="text-danger">*</span></label>
                            <div class="form-group<?php echo $errors->has('status') ? ' has-error' : ''; ?> has-feedback">
                                <select name="JobType" id="JobType" class="form-control">
                                    <option value="" selected disabled><?php echo __('Select one'); ?></option>
                                    <option value="Fulltime"><?php echo __('Fulltime'); ?></option>
                                    <option value="Halftime"><?php echo __('Halftime'); ?></option>
                                </select>
                                <?php if($errors->has('JobType')): ?>
                                <span class="help-block">
                                    <strong><?php echo $errors->first('JobType'); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                            <!-- /.form-group -->

                            <label for="NoOfOpenings"><?php echo __('No Of Openings'); ?> <span class="text-danger">*</span></label>
                            <div class="form-group<?php echo $errors->has('NoOfOpenings') ? ' has-error' : ''; ?> has-feedback">
                                <input type="number" name="NoOfOpenings" id="NoOfOpenings" class="form-control" placeholder="Number Of Openings" >
                            
                                <?php if($errors->has('NoOfOpenings')): ?>
                                <span class="help-block">
                                    <strong><?php echo $errors->first('NoOfOpenings'); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                            <!-- /.form-group -->

                            <label for="Salary_start"><?php echo __('Salary Start'); ?> <span class="text-danger">*</span></label>
                            <div class="form-group<?php echo $errors->has('Salary_start') ? ' has-error' : ''; ?> has-feedback">
                            <input type="text" name="Salary_start" id="Salary_start" class="form-control" value="<?php echo old('Salary_start'); ?>" placeholder="<?php echo __('Enter Salary_start..'); ?>">
                                <?php if($errors->has('Salary_start')): ?>
                                <span class="help-block">
                                    <strong><?php echo $errors->first('Salary_start'); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                            <!-- /.form-group -->

                            <!-- /.form-group -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-12">
                            <label for="JobDescription"><?php echo __('Job Description'); ?></label>
                            <div class="form-group<?php echo $errors->has('JobDescription') ? ' has-error' : ''; ?> has-feedback">
                                <textarea name="JobDescription" id="JobDescription" class="form-control textarea" placeholder="<?php echo __('Enter Job Description..'); ?>"><?php echo old('academic_qualification'); ?></textarea>
                                <?php if($errors->has('JobDescription')): ?>
                                <span class="help-block">
                                    <strong><?php echo $errors->first('JobDescription'); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                            <!-- /.form-group -->

                            <label for="Responsibilities"><?php echo __('Responsibilities'); ?></label>
                            <div class="form-group<?php echo $errors->has('Responsibilities') ? ' has-error' : ''; ?> has-feedback">
                                <textarea name="Responsibilities" id="Responsibilities" class="form-control textarea" placeholder="<?php echo __('Enter Responsibilities..'); ?>"><?php echo old('professional_qualification'); ?></textarea>
                                <?php if($errors->has('Responsibilities')): ?>
                                <span class="help-block">
                                    <strong><?php echo $errors->first('Responsibilities'); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                            <!-- /.form-group -->

                            <label for="SkillSet"><?php echo __('Skill Set'); ?></label>
                            <div class="form-group<?php echo $errors->has('SkillSet') ? ' has-error' : ''; ?> has-feedback">
                                <textarea name="SkillSet" id="SkillSet" class="form-control textarea" placeholder="<?php echo __('Enter SkillSet..'); ?>"><?php echo old('SkillSet'); ?></textarea>
                                <?php if($errors->has('SkillSet')): ?>
                                <span class="help-block">
                                    <strong><?php echo $errors->first('SkillSet'); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                       
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <a href="<?php echo url('/people/employees'); ?>" class="btn btn-danger btn-flat"><i class="icon fa fa-close"></i><?php echo __('Cancel'); ?> </a>
                    <button type="submit" class="btn btn-primary btn-flat"><i class="icon fa fa-plus"></i> <?php echo __('Add'); ?></button>
                </div>
            </form>
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
<script type="text/javascript">
    document.forms['employee_add_form'].elements['gender'].value = "<?php echo old('gender'); ?>";
        document.forms['employee_add_form'].elements['id_name'].value = "<?php echo old('id_name'); ?>";
    document.forms['employee_add_form'].elements['designation_id'].value = "<?php echo old('designation_id'); ?>";
    document.forms['employee_add_form'].elements['role'].value = "<?php echo old('role'); ?>";
    document.forms['employee_add_form'].elements['joining_position'].value = "<?php echo old('joining_position'); ?>";
    document.forms['employee_add_form'].elements['marital_status'].value = "<?php echo old('marital_status'); ?>";
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('administrator.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>