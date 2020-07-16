<?php $__env->startSection('title', __('career')); ?>

<?php $__env->startSection('main_content'); ?>
<section class="w3l-inner-banner">
        <div class="wrapper">
        </div>
    </section>
    <section class="w3l-breadcrumns">
        <div class="wrapper">
            <ul>
                <li><a href="index.html">Home</a> <span class="fa fa-angle-double-right"></span></li>
                <li>Pages <span class="fa fa-angle-double-right"></span></li>
                <li>Jobs page</li>
            </ul>
        </div>
    </section>
    <!-- Blog -->
    <section class="w3l-blog-single no-padding">
        <div class="single blog">
            <div class="wrapper">
                <div class="d-grid grid-colunm-2">
                    <!-- left side blog post content -->
                    <div class="single-left">
                        <h5 class="card-title">Featured Jobs </h5>
                        <div class="w3l-price-2">

                        <?php $__currentLoopData = $Job; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="price-box btn-layout bt6">
                                <div class="grid grid-column-2">
                                    <div class="column1">
                                        <a href="#img5">
                                            <img src="<?php echo asset('homepage/images/job4.png'); ?>" width="60px" alt=""
                                                class="img-responsive" />
                                        </a>
                                        <div class="job-info">
                                            <h6 class="pricehead"><a href="#link"><?php echo $data->title; ?></a></h6>
                                            <ul class="location">
                                                <li><span class="fa fa-map-marker"></span> <?php echo $data->Location; ?></li>
                                                <li><span class="fa fa-briefcase"></span> <?php echo $data->title; ?></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="column2">
                                        <p><Strong>Type :</Strong><?php echo $data->JobType; ?></p>
                                        <p><Strong>Time :</Strong><?php echo $data->created_at->diffForHumans(); ?></p>
                                    </div>
                                    <div class="column3 text-right">
                                        <a href="<?php echo route('jobdetail',$data->id); ?>" class="actionbg">Apply Now</a>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <!-- left side blog post content -->

                    <!-- right side bar -->
                    
                    <!-- //right side bar -->
                </div>
            </div>
        </div>
    </section>
    <!-- //blog single-->

    <div class="display-ad" style="margin: 8px auto;display: block;text-align: center;">
        <!---728x90--->

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Frontend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>