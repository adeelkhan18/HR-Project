<?php $__env->startSection('title', __('job detail')); ?>

<?php $__env->startSection('main_content'); ?>
    <section class="w3l-job-detail-banner">
        <div class="wrapper">
            <div class="d-grid job-grid">
                <div class="job-title">
                    <label>Job opening</label>
                    <h3><?php echo $data->title; ?></h3>
                    <ul class="info">
                        <li><span class="fa fa-map-marker"></span> <?php echo $data->Location; ?></li>
                        <li><span class="fa fa-hand-o-right"></span> <?php echo $data->JobType; ?></li>
                        <li><span class="fa fa-clock-o"></span> <?php echo $data->created_at->diffForHumans(); ?></li>
                        <li><span class="fa fa-money"></span> Rs<?php echo $data->Salary_start; ?> - Rs<?php echo $data->Salary_end; ?>/ month</li>
                    </ul>
                </div>
                <div class="job-apply">
                    <a href="<?php echo route('applyjob',$data->id); ?>" class="apply"> Apply now</a>
                </div>
            </div>
        </div>
    </section>

    <div class="display-ad" style="margin: 8px auto;display: block;text-align: center;">
        <!---728x90--->

    </div>
    <!-- Blog -->
    <section class="w3l-blog-single no-padding">
        <div class="single blog">
            <div class="wrapper">
                <div class="d-grid grid-colunm-2">
                    <!-- left side blog post content -->
                    <div class="single-left">
                        <div class="single-left-inner">
                            <h5 class="card-title">Job information </h5>
                            <div class="d-grid main-grid">
                                <div class="job-info1">
                                    <span class="fa fa-check-square-o"></span>
                                    <div class="job-info-grid">
                                        <h4>Category</h4>
                                        <p><?php echo $data->Category; ?></p>
                                    </div>
                                </div>
                                <div class="job-info1">
                                    <span class="fa fa-check-square-o"></span>
                                    <div class="job-info-grid">
                                        <h4>Work Shift</h4>
                                        <p><?php echo $data->WorkShift; ?></p>
                                    </div>
                                </div>
                                <div class="job-info1">
                                    <span class="fa fa-check-square-o"></span>
                                    <div class="job-info-grid">
                                        <h4>Posted on</h4>
                                        <p><?php echo $data->created_at->diffForHumans(); ?></p>
                                    </div>
                                </div>
                                <div class="job-info1">
                                    <span class="fa fa-check-square-o"></span>
                                    <div class="job-info-grid">
                                        <h4>No. of openings</h4>
                                        <p><?php echo $data->NoOfOpenings; ?></p>
                                    </div>
                                </div>
                                <div class="job-info1">
                                    <span class="fa fa-check-square-o"></span>
                                    <div class="job-info-grid">
                                        <h4>Job level</h4>
                                        <p><?php echo $data->Joblevel; ?></p>
                                    </div>
                                </div>
                                <div class="job-info1">
                                    <span class="fa fa-check-square-o"></span>
                                    <div class="job-info-grid">
                                        <h4>Job experience</h4>
                                        <p><?php echo $data->JobExperience; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-grid">
                            <div class="single-left1">
                                <h5 class="card-title">Job description </h5>
                                <p class=""><?php echo $data->JobDescription; ?>. </p>
                            </div>
                            <div class="single-left1">
                                <h5 class="card-title">Responsibilities: </h5>
                                <ul class="details-list">
                                    <li><?php echo $data->Responsibilities; ?> </li>
                                </ul>
                            </div>
                            <div class="single-left1">
                                <h5 class="card-title">What we are looking for: </h5>
                                <ul class="details-list">
                                    <li><?php echo $data->SkillSet; ?> </li>
                                </ul>
                            </div>
                            
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