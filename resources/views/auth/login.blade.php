
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

        <!-- App css -->
        <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/css/app.min.css') }}" rel="stylesheet" type="text/css" />

    </head>

    <body class="account-body accountbg">

        <!-- Register page -->
        <div class="container">
            <div class="row vh-100 d-flex justify-content-center">
                <div class="col-12 align-self-center">
                    <div class="row">
                        <div class="col-lg-5 mx-auto">
                            <div class="card">
                                <div class="card-body p-0 auth-header-box">
                                    <div class="text-center p-3">
                                        <a href="index.html" class="logo logo-admin">
                                            <img src="{{ asset('admin/images/logo-sm.png') }}" height="50" alt="logo" class="auth-logo">
                                        </a>
                                        <h4 class="mt-3 mb-1 font-weight-semibold text-white font-18">Let's Get Started Dastyle</h4>
                                        <p class="text-muted  mb-0">Sign in to continue to Dastyle.</p>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <ul class="nav-border nav nav-pills" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active font-weight-semibold" data-toggle="tab" href="#LogIn_Tab" role="tab">Log In</a>
                                        </li>
                                    </ul>

                                     <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane active p-3 pt-3" id="LogIn_Tab" role="tabpanel">
                                            <form class="form-horizontal auth-form my-4" action="{{ route('login_proccess') }}" method="POST">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="email">E-mail</label>
                                                    @error('email')
                                                        <span class="text-danger">
                                                            {{ $message }}
                                                        </span>
                                                    @enderror
                                                    <div class="input-group mb-3">
                                                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" value="{{ old('email') }}">
                                                    </div>
                                                </div><!--end form-group-->

                                                <div class="form-group">
                                                    <label for="userpassword">Password</label>
                                                    @error('password')
                                                        <span class="text-danger">
                                                            {{ $message }}
                                                        </span>
                                                    @enderror
                                                    <div class="input-group mb-3">
                                                        <input type="password" class="form-control" name="password" id="userpassword" placeholder="Enter password" value="{{ old('password') }}">
                                                    </div>
                                                </div><!--end form-group-->

                                                <div class="form-group mb-0 row">
                                                    <div class="col-12 mt-2">
                                                        <button class="btn btn-primary btn-block waves-effect waves-light" type="sumbit">Log In <i class="fas fa-sign-in-alt ml-1"></i></button>
                                                    </div><!--end col-->
                                                </div> <!--end form-group-->
                                            </form><!--end form-->
                                        </div>
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
        <!-- End Register page -->




        <!-- jQuery  -->
        <script src="{{ asset('admin/js/jquery.min.js') }}"></script>
        <script src="{{ asset('admin/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('admin/js/waves.js') }}"></script>
        <script src="{{ asset('admin/js/feather.min.js') }}"></script>
        <script src="{{ asset('admin/js/simplebar.min.js') }}"></script>


    </body>

</html>
