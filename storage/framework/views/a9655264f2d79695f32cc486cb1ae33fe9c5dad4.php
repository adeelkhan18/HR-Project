<?php $__env->startSection('title', __('career')); ?>

<?php $__env->startSection('main_content'); ?>

    <section class="w3l-inner-banner">
        <div class="wrapper">
        </div>
    </section>



    <!-- w3l-contacts-5-grid -->

    <section class="w3l-form-41">
        <!-- /w3l-form-41-section -->
        <div class="w3l-form-41-mian">
            <div class="wrapper">
                <div class="form-inner-cont">
                    <?php if(session('message')): ?>

<div class="alert alert-success alert-dismissible" role="alert">
  <?php echo session('message'); ?>

</div>
<?php endif; ?>
<?php if(session('error')): ?>

<div class="alert alert-danger alert-dismissible" role="alert">
  <?php echo session('error'); ?>

</div>

<?php endif; ?>
                    <form action="<?php echo route('savejobs'); ?>" method="post" class="signin-form" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>

                        <h3>Applying For <br><span style="color:red;font-weight: bold"><?php echo $title; ?></span> </h3>
                        <div class="form-input">
                            <label for="w3lName">Name</label>
                            <input type="text" name="name" placeholder="Enter your name" required="" />
                        </div>
                            <input type="hidden" name="id" value="<?php echo $id; ?>" placeholder="Enter your name" required="" />
                        <div class="form-input">
                            <label for="Email">Email</label>
                            <input type="email" name="Email" placeholder="Enter your email" required />
                        </div>
                        <div class="form-input">
                            <label for="Phone">Phone</label>
                            <input type="text" name="Phone" placeholder="Phone" required />
                        </div>
                        <div class="form-input">
                            <label for="CV">CV</label>
                            <input type="file" name="cv" placeholder="cv" required />
                        </div>
                        <button class="btn">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- //w3l-form-41-section -->

    <div class="display-ad" style="margin: 8px auto;display: block;text-align: center;">
        <!---728x90--->

    </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Frontend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>