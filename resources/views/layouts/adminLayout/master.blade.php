
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        @include('layouts.adminLayout.title-meta')
        @include('layouts.adminLayout.head')
    </head>

<body >
    <!-- Begin page -->
    <div id="layout-wrapper">
            @include('layouts.adminLayout.topbar')
             @if(!isset($projectsidebar))
              @include('layouts.adminLayout.sidebar')
             @else
               @include('layouts.adminLayout.project_contents')
            @endif
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    @yield('content')
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
            @include('layouts.adminLayout.footer')
            </div>
            <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    @include('layouts.adminLayout.right-sidebar')
    <!-- /Right-bar -->
    <!-- JAVASCRIPT -->
    @include('layouts.adminLayout.vendor-scripts')
    </body>
</html>