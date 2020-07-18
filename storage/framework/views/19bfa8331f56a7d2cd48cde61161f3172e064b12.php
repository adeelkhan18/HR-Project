<div id="mainMenu">
    <ul class="sidebar-menu" data-widget="tree">
        <li><a href="<?php echo url('/dashboard'); ?>"><i class="fa fa-dashboard text-purple"></i> <span><?php echo __('Dashboard'); ?></span></a></li>
        
           <li><a href="<?php echo url('/files/1'); ?>"><i class="fa fa-folder"></i><?php echo __(' Files'); ?></a></li>
        <?php if (\Entrust::can('people')) : ?>
        <?php if (\Entrust::can('manage-employee')) : ?>
             
               
                <?php endif; // Entrust::can ?>

        <li class="treeview">
            <a href="#">
                <i class="fa fa-users text-purple"></i> <span><?php echo __('Employee Management'); ?></span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">

                <?php if (\Entrust::can('manage-employee')) : ?>
                <li><a href="<?php echo url('/people/employees/create'); ?>"><i class="fa fa-circle-o"></i><?php echo __(' New Employee'); ?></a></li>
                <li><a href="<?php echo url('/people/employees'); ?>"><i class="fa fa-circle-o"></i> <?php echo __('Manage Employee'); ?></a></li>
                <?php endif; // Entrust::can ?>
                <?php if (\Entrust::can('manage-employee')) : ?>
                <li><a href="<?php echo url('/setting/designations'); ?>"><i class="fa fa-circle-o"></i><?php echo __(' Designations'); ?></a></li>
                
                <?php endif; // Entrust::can ?>

                <?php if (\Entrust::can('manage-clients')) : ?>
                 <li><a href="<?php echo url('people/clients/create'); ?>"><i class="fa fa-circle-o"></i><?php echo __(' New Customer'); ?></a></li>
                <li><a href="<?php echo url('/people/clients'); ?>"><i class="fa fa-circle-o"></i> <?php echo __('Manage Clients'); ?></a></li>
                <li><a href="<?php echo url('/setting/client-types'); ?>"><i class="fa fa-circle-o"></i> <?php echo __('Manage Client Type'); ?></a></li>
                <li><a href="<?php echo url('/setting/departments'); ?>"><i class="fa fa-circle-o"></i> <?php echo __('Manage Departments'); ?></a></li>

                <?php endif; // Entrust::can ?>
                <?php if (\Entrust::can('manage-references')) : ?>
                
                <li><a href="<?php echo url('people/references/create'); ?>"><i class="fa fa-circle-o"></i><?php echo __(' New Reference'); ?></a></li>
                <li><a href="<?php echo url('/people/references'); ?>"><i class="fa fa-circle-o"></i><?php echo __(' Manage References'); ?></a></li>
                <?php endif; // Entrust::can ?>
            </ul>
        </li>
        <?php endif; // Entrust::can ?>
    
        <?php if (\Entrust::can('payroll-management')) : ?>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-dollar text-purple"></i> <span><?php echo __('Payroll Management'); ?></span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <?php if (\Entrust::can('manage-salary')) : ?>
                <li><a href="<?php echo url('/hrm/payroll'); ?>"><i class="fa fa-circle-o"></i> <?php echo __('Manage Salary'); ?></a></li>
                <?php endif; // Entrust::can ?>
                <?php if (\Entrust::can('salary-list')) : ?>
                <li><a href="<?php echo url('/hrm/payroll/salary-list'); ?>"><i class="fa fa-circle-o"></i> <?php echo __('Salary List'); ?></a></li>
                <?php endif; // Entrust::can ?>

                <li><a href="<?php echo url('/hrm/payroll/increment/search'); ?>"><i class="fa fa-circle-o"></i><?php echo __(' New Increment'); ?></a></li>
                <li><a href="<?php echo url('/hrm/payroll/increment/list'); ?>"><i class="fa fa-circle-o"></i> <?php echo __('Increment List'); ?></a></li>

                <?php if (\Entrust::can('make-payment')) : ?>
                <li><a href="<?php echo url('/hrm/salary-payments'); ?>"><i class="fa fa-circle-o"></i><?php echo __(' Make Payment'); ?></a></li>
                <?php endif; // Entrust::can ?>
                <?php if (\Entrust::can('generate-payslip')) : ?>
                <li><a href="<?php echo url('/hrm/generate-payslips/'); ?>"><i class="fa fa-circle-o"></i> <?php echo __(' Generate Payslip'); ?></a></li>
                <?php endif; // Entrust::can ?>
                <?php if (\Entrust::can('manage-bonus')) : ?>
                <li><a href="<?php echo url('/hrm/bonuses'); ?>"><i class="fa fa-circle-o"></i> <?php echo __('Manage Bonus'); ?></a></li>
                <?php endif; // Entrust::can ?>
                <?php if (\Entrust::can('manage-deduction')) : ?>
                <li><a href="<?php echo url('/hrm/deductions'); ?>"><i class="fa fa-circle-o"></i> <?php echo __('Manage Deduction'); ?></a></li>
                <?php endif; // Entrust::can ?>
                <?php if (\Entrust::can('loan-management')) : ?>
                <li><a href="<?php echo url('/hrm/loans'); ?>"><i class="fa fa-circle-o"></i><?php echo __(' Loan Management'); ?></a></li>
                <?php endif; // Entrust::can ?>
                <?php if (\Entrust::can('provident-fund')) : ?>
                <li><a href="<?php echo url('/hrm/provident-funds'); ?>"><i class="fa fa-circle-o"></i><?php echo __(' Provident Fund'); ?></a></li>
                <?php endif; // Entrust::can ?>
            </ul>
        </li>
        <?php endif; // Entrust::can ?>
                
        <?php if (\Entrust::can('attendance-management')) : ?>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-calendar text-purple"></i> <span><?php echo __('Attendance Management'); ?></span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <?php if (\Entrust::can('manage-attendance')) : ?>
                 <li><a href="<?php echo url('setting/working-days'); ?>"><i class="fa fa-circle-o"></i><?php echo __('Set Working days'); ?> </a></li>
                 <li><a href="<?php echo url('setting/holidays'); ?>"><i class="fa fa-circle-o"></i><?php echo __('Set Holidays'); ?> </a></li>
                <li><a href="<?php echo url('/hrm/attendance/manage'); ?>"><i class="fa fa-circle-o"></i><?php echo __('Manage Attendance'); ?> </a></li>


                <?php endif; // Entrust::can ?>

                <?php if (\Entrust::can('attendance-report')) : ?>
                <li><a href="<?php echo url('/hrm/attendance/details/report/go'); ?>"><i class="fa fa-circle-o"></i><?php echo __(' Attendance Statement'); ?></a></li>
                <li><a href="<?php echo url('/hrm/attendance/report'); ?>"><i class="fa fa-circle-o"></i><?php echo __(' Attendance Report'); ?></a></li>
                <?php endif; // Entrust::can ?>
            </ul>
        </li>
        <?php endif; // Entrust::can ?>
       
       <?php if (\Entrust::can('manage-expense')) : ?>
        
         <?php endif; // Entrust::can ?>
        <?php if (\Entrust::can('leave-application')) : ?>
        <li class="treeview">
            <a href="#">
                <i class="glyphicon glyphicon-send text-purple"></i> <span><?php echo __('Leave Management'); ?></span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
             
                <?php if (\Entrust::can('manage-leave-application')) : ?>
                <li><a href="<?php echo url('/setting/leave_categories/create'); ?>"><i class="fa fa-circle-o"></i><?php echo __('New Leave Category'); ?></a></li>
                <li><a href="<?php echo url('/setting/leave_categories'); ?>"><i class="fa fa-circle-o"></i><?php echo __('Leave Category List'); ?></a></li>
                <li><a href="<?php echo url('/hrm/application_lists'); ?>"><i class="fa fa-circle-o"></i> <span><?php echo __('Leave Application List'); ?></span></a></li>
                <?php endif; // Entrust::can ?>
                <?php if (\Entrust::can('my-leave-application')) : ?>
                <li><a href="<?php echo url('/hrm/leave_application/create'); ?>"><i class="fa fa-circle-o"></i> <span><?php echo __('New Leave Application'); ?></span></a></li>
                <li><a href="<?php echo url('/hrm/leave_application'); ?>"><i class="fa fa-circle-o"></i> <span><?php echo __('Leave Application Manage'); ?></span></a></li>
                <?php endif; // Entrust::can ?>
                <?php if (\Entrust::can('leave-reports')) : ?>
                <li><a href="<?php echo url('/hrm/leave-reports'); ?>"><i class="fa fa-circle-o"></i> <span><?php echo __('Leave Reports'); ?></span></a></li>
                <?php endif; // Entrust::can ?>
            </ul>
        </li>
        <?php endif; // Entrust::can ?>
         <?php if (\Entrust::can('manage-award')) : ?>
         
        <?php endif; // Entrust::can ?>
        <?php if (\Entrust::can('notice')) : ?>
        <li class="treeview">
            <a href="#">
                <i class="glyphicon glyphicon-bell text-purple"></i> <span><?php echo __('Notice Board'); ?></span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
               
                <?php if (\Entrust::can('manage-notice')) : ?>
                 <li><a href="<?php echo url('hrm/notice/create'); ?>"><i class="fa fa-circle-o"></i><?php echo __('New Notice'); ?></a></li>
                <li><a href="<?php echo url('/hrm/notice'); ?>"><i class="fa fa-circle-o"></i><?php echo __('Manage Notice'); ?></a></li>
                  <li><a href="<?php echo url('/setting/personal-events'); ?>"><i class="fa fa-circle-o"></i><?php echo __('Add Personal Event'); ?></a></li>
                <?php endif; // Entrust::can ?>
                <?php if (\Entrust::can('notice-board')) : ?>
                <li><a href="<?php echo url('/hrm/notice/show'); ?>"><i class="fa fa-circle-o"></i> <span><?php echo __('Notice list'); ?></span></a></li>
                <?php endif; // Entrust::can ?>
            </ul>
        </li>
        <?php endif; // Entrust::can ?>
       <?php if (\Entrust::can('file-upload')) : ?>
        
         <?php endif; // Entrust::can ?>
       <?php if (\Entrust::can('file-upload')) : ?>
        <li><a href="<?php echo url('/hrm/salary/statement/search'); ?>"><i class="fa fa-certificate"></i> <span><?php echo __('Salary Statement'); ?></span></a></li>
        <?php endif; // Entrust::can ?>

        <?php if (\Entrust::can('hrm-setting')) : ?>
        
        <?php endif; // Entrust::can ?>
        <?php if(Auth::user()->role ==1): ?>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-users text-purple"></i> <span><?php echo __('Jobs Management'); ?></span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="<?php echo route('c_job'); ?>"><i class="fa fa-circle-o"></i><?php echo __(' New job'); ?></a></li>
                <li><a href="<?php echo route('jobindex'); ?>"><i class="fa fa-circle-o"></i> <?php echo __('All Jobs'); ?></a></li>
                <li><a href="<?php echo route('jobcandi'); ?>"><i class="fa fa-circle-o"></i> <?php echo __('All Candidates'); ?></a></li>
               

            </ul>
        </li>
        <?php endif; ?>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-users text-purple"></i> <span><?php echo __('Task Management'); ?></span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin')): ?>
                <li><a href="<?php echo route('tcreat'); ?>"><i class="fa fa-circle-o"></i><?php echo __(' New Task'); ?></a></li>
                <?php endif; ?>
                 <?php if(Auth::user()->role ==1): ?>
                <li><a href="<?php echo route('tall'); ?>"><i class="fa fa-circle-o"></i> <?php echo __('All Tasks'); ?></a></li>
                <?php else: ?>
                <li><a href="<?php echo route('taskall'); ?>"><i class="fa fa-circle-o"></i> <?php echo __('All Tasks'); ?></a></li>
                <?php endif; ?>

                 <li><a href="<?php echo route('performance'); ?>"><i class="fa fa-circle-o"></i> <?php echo __('Performance'); ?></a></li>
               

            </ul>
        </li>
        
       
        
          <li class="treeview">
                <a href="#">
                    <i class="fa fa-trophy"></i> <span><?php echo __('Awards'); ?></span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
               
              
                <ul class="treeview-menu">
                     <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin')): ?>
                    <li><a href="<?php echo url('setting/award_categories'); ?>"><i class="fa fa-circle-o"></i> <?php echo __('Award Categories'); ?></a></li>
                      <?php endif; ?>

                    <li><a href="<?php echo url('hrm/employee-awards'); ?>"><i class="fa fa-circle-o"></i> <?php echo __('Employee Awards'); ?></a></li>

                </ul>
                
                    

              
              
            </li>
        
        <li><a href="<?php echo url('/profile/user-profile'); ?>"><i class="fa fa-user text-purple"></i> <span><?php echo __('Profile'); ?></span></a></li>

        <li><a href="<?php echo url('/profile/change-password'); ?>"><i class="fa fa-key text-purple"></i> <span><?php echo __('Change Password'); ?></span></a></li>
        
        <li>
            <a href="<?php echo route('logout'); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-lock text-purple"></i> <span><?php echo __('Logout'); ?></span></a>
            <form id="logout-form" action="<?php echo route('logout'); ?>" method="POST">
                <?php echo csrf_field(); ?>

            </form>
        </li>
    </ul>
</div>