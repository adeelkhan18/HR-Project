<!DOCTYPE html>
<html>

    <!-- head -->
    @include('Frontend.layouts.head')
    <!-- /head -->
    <meta name="robots" content="noindex">
    <body >

            <!-- header -->
            @include('Frontend.layouts.header')
            <!-- /header -->

            <!-- Content Wrapper. Contains page content -->
            @yield('main_content')
            <!-- /content-wrapper -->

            <!-- Footer. contains the footer -->
            @include('Frontend.layouts.footer')
            <!-- /Footer -->
        </div>
        <!-- ./wrapper -->

        <!-- Scripts. contains the script -->
        @include('Frontend.layouts.scripts')
        <!-- /Scripts -->

        
    </body>


</html>
