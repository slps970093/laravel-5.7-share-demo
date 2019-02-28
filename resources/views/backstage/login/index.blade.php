<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="{{ URL::asset('sb-admin-template/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">


    <!-- Custom styles for this template-->
    <link href="{{ URL::asset('sb-admin-template/css/sb-admin.css') }}" rel="stylesheet">

    <!-- Bootstrap core JavaScript-->
    <script src="{{ URL::asset('sb-admin-template/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('sb-admin-template/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ URL::asset('sb-admin-template/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Page level plugin JavaScript-->
    <script src="{{ URL::asset('sb-admin-template/vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ URL::asset('sb-admin-template/js/sb-admin.min.js') }}"></script>

    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap4-datatable/datatables.min.css') }}">
    <script src="{{ URL::asset('js/bootstrap4-datatable/datatables.min.js') }}"></script>

    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body class="bg-gradient-primary">

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                @if ( $messageFlog == 1)
                                <div class="alert alert-warning" role="alert">
                                    帳號密碼錯誤，請重新輸入！
                                </div>
                                @endif
                                @if ( $messageFlog == 2)
                                <div class="alert alert-info" role="alert">
                                    Please Login
                                </div>
                                @endif
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                </div>
                                <form class="user" method="post" action="{{ url('admin/login') }}">
                                    @csrf
                                    <div class="form-group">
                                        <input type="test" name="username" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="username">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" name="remember" class="custom-control-input" id="customCheck">
                                            <label class="custom-control-label" for="customCheck">Remember Me</label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
                                    <hr>
                                    <!--
                                    <a href="index.html" class="btn btn-google btn-user btn-block">
                                        <i class="fab fa-google fa-fw"></i> Login with Google
                                    </a>
                                    <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                        <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                    </a>
                                    -->
                                </form>
                                <!--
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="register.html">Create an Account!</a>
                                </div>
                                -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

<!-- Bootstrap core JavaScript-->

</body>
</html>