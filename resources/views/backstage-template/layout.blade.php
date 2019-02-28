<!DOCTYPE html>
<html lang="tw">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>

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

<body id="page-top">

@include('backstage-template.nav')

<div id="wrapper">

    <!-- Sidebar -->
    @include('backstage-template.left-sidebar')

    <div id="content-wrapper">
        <div class="container-fluid">
            @yield('content')
        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        @include('backstage-template.footer')

    </div>
    <!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="{{ url('backstage/logout') }}">Logout</a>
            </div>
        </div>
    </div>
</div>



</body>

</html>