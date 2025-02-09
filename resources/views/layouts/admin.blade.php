
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Dastyle - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('admin/images/favicon.ico') }}">

        <!-- jvectormap -->
        <link href="{{ asset('plugins/jvectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet">

        <!-- App css -->
        <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/css/jquery-ui.min.css') }}" rel="stylesheet">
        <link href="{{ asset('admin/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/css/metisMenu.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/css/app.min.css') }}" rel="stylesheet" type="text/css" />

    </head>

    <body class="dark-sidenav">

        <x-admin.sidebar />


        <div class="page-wrapper">
            <x-admin.topbar />

            <!-- Page Content-->
            <div class="page-content">
                @yield('content')

                <footer class="footer text-center text-sm-left">
                    &copy; 2025 Rakhmatjonov <span class="d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by Mannatthemes</span>
                </footer><!--end footer-->
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->




        <!-- jQuery  -->
        <script src="{{ asset('admin/js/jquery.min.js') }}"></script>
        <script src="{{ asset('admin/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('admin/js/metismenu.min.js') }}"></script>
        <script src="{{ asset('admin/js/waves.js') }}"></script>
        <script src="{{ asset('admin/js/feather.min.js') }}"></script>
        <script src="{{ asset('admin/js/simplebar.min.js') }}"></script>
        <script src="{{ asset('admin/js/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('admin/js/moment.js') }}"></script>
        <script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('admin/js/app.js') }}"></script>

    </body>

</html>
