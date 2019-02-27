<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title> @yield('title') </title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!--  Light Bootstrap Table core CSS    -->
    <link href="{{ URL::asset('paper-admin-template/assets/css/light-bootstrap-dashboard.css?v=1.4.0') }}" rel="stylesheet"/>
    <!--  CSS for Demo Purpose, don't include it in your project     -->

    <!-- Bootstrap core CSS     -->
    <link href="{{ URL::asset('paper-admin-template/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <!-- Animation library for notifications   -->
    <link href="{{ URL::asset('paper-admin-template/assets/css/animate.min.css') }}" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="{{ URL::asset('paper-admin-template/assets/css/paper-dashboard.css') }}" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{ URL::asset('paper-admin-template/assets/css/demo.css') }}" rel="stylesheet" />



    <!--  Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="{{ URL::asset('paper-admin-template/assets/css/themify-icons.css') }}" rel="stylesheet">


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <!--   Core JS Files   -->
    <script src="{{ URL::asset('paper-admin-template/assets/js/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('paper-admin-template/assets/js/bootstrap.min.js') }}" type="text/javascript"></script>

    <!--  Checkbox, Radio & Switch Plugins -->
    <script src="{{ URL::asset('paper-admin-template/assets/js/bootstrap-checkbox-radio.js') }}"></script>

    <!--  Charts Plugin -->
    <script src="{{ URL::asset('paper-admin-template/assets/js/chartist.min.js') }}"></script>

    <!--  Notifications Plugin    -->
    <script src="{{ URL::asset('paper-admin-template/assets/js/bootstrap-notify.js') }}"></script>

    <!--  Google Maps Plugin    -->

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
    <script src="assets/js/paper-dashboard.js"></script>

    <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    <script src="assets/js/demo.js"></script>


</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

        <!--
            Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
            Tip 2: you can also add an image using data-image tag
        -->

        <!-- left sidebar -->
        @include('backstage-template.left-sidebar')
    </div>

    <div class="main-panel">
        @include('backstage-template.nav')

        <!-- content -->
        <div class="content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>

        <!-- footer -->
        @include('backstage-template.footer')


    </div>
</div>


</body>



<script type="text/javascript">
    $(document).ready(function(){
        demo.initChartist();
        $.notify({
            icon: 'pe-7s-gift',
            message: "Welcome to <b>Light Bootstrap Dashboard</b> - a beautiful freebie for every web developer."
        },{
            type: 'info',
            timer: 4000
        });
    });
</script>

</html>