<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login - Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{!! asset('dashboard/css/bootstrap.min.css') !!}" media="screen">
    <link rel="stylesheet" href="{!! asset('dashboard/css/font-awesome.min.css') !!}" media="screen">
    <link rel="stylesheet" href="{!! asset('dashboard/css/themify-icons.css') !!}" media="screen">
    <link rel="stylesheet" href="{!! asset('dashboard/css/metisMenu.css') !!}" media="screen">
    <link rel="stylesheet" href="{!! asset('dashboard/css/owl.carousel.min.css') !!}" media="screen">
    <link rel="stylesheet" href="{!! asset('dashboard/css/slicknav.min.css') !!}" media="screen">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

    <link rel="stylesheet" href="{!! asset('dashboard/css/typography.css') !!}" media="screen">
    <link rel="stylesheet" href="{!! asset('dashboard/css/default-css.css') !!}" media="screen">
    <link rel="stylesheet" href="{!! asset('dashboard/css/styles.css') !!}" media="screen">
    <link rel="stylesheet" href="{!! asset('dashboard/css/responsive.css') !!}" media="screen">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>

    <script src="{!! asset('dashboard/js/vendor/modernizr-2.8.3.min.js') !!}"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <!-- preloader area end -->
    <!-- login area start -->
    <div class="login-area">
        <div class="container">
            <div class="login-box ptb--100">
                <form method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                    <div class="login-form-head">
                        <h4>Sign In</h4>
                        <p>Hello there, Sign in and start managing your Admin Template</p>
                    </div>
                    <div class="login-form-body">
                        <div class="form-gp{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" id="exampleInputEmail1" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            <i class="ti-email"></i>
                        </div>

                        <div class="form-gp{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" id="exampleInputPassword1" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            <i class="ti-lock"></i>
                        </div>
                        <div class="row mb-4 rmber-area">
                            <div class="col-6">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                    <label class="custom-control-label" for="customControlAutosizing">Remember Me</label>
                                </div>
                            </div>
                            <div class="col-6 text-right">
                                <a href="#">Forgot Password?</a>
                            </div>
                        </div>
                        <div class="submit-btn-area">
                            <button id="form_submit" type="submit">Submit <i class="ti-arrow-right"></i></button>
                            <div class="login-other row mt-4">
                                <div class="col-6">
                                    <a class="fb-login" href="#">Log in with <i class="fa fa-facebook"></i></a>
                                </div>
                                <div class="col-6">
                                    <a class="google-login" href="#">Log in with <i class="fa fa-google"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="form-footer text-center mt-5">
                            <p class="text-muted">Don't have an account? <a href="{{ route('register') }}">Sign up</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- login area end -->

    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>

    <script src="{!! asset('dashboard/js/vendor/jquery-2.2.4.min.js') !!}"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>

    <script src="{!! asset('dashboard/js/popper.min.js') !!}"></script>
    <script src="{!! asset('dashboard/js/bootstrap.min.js') !!}"></script>
    <script src="{!! asset('dashboard/js/owl.carousel.min.js') !!}"></script>
    <script src="{!! asset('dashboard/js/metisMenu.min.js') !!}"></script>
    <script src="{!! asset('dashboard/js/jquery.slimscroll.min.js') !!}"></script>
    <script src="{!! asset('dashboard/js/jquery.slicknav.min.js') !!}"></script>
    
    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>

    <script src="{!! asset('dashboard/js/plugins.js') !!}"></script>
    <script src="{!! asset('dashboard/js/scripts.js') !!}"></script>
</body>

</html>