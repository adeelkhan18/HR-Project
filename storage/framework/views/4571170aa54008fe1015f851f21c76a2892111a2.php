<!DOCTYPE html>
<html>

    <!-- head -->
    <?php echo $__env->make('Frontend.layouts.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- /head -->
    <meta name="robots" content="noindex">
    <body >

            <!-- header -->
            <?php echo $__env->make('Frontend.layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <!-- /header -->

            <!-- Content Wrapper. Contains page content -->
            <?php echo $__env->yieldContent('main_content'); ?>
            <!-- /content-wrapper -->

            <!-- Footer. contains the footer -->
            <?php echo $__env->make('Frontend.layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <!-- /Footer -->
        </div>
        <!-- ./wrapper -->

        <!-- Scripts. contains the script -->
        <?php echo $__env->make('Frontend.layouts.scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <!-- /Scripts -->

        
    </body>


</html>
