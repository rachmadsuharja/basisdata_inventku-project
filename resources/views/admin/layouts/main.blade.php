<!doctype html>
<html lang="en" dir="ltr">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content="IndoUi – Bootstrap 4 Admin Dashboard HTML Template" name="description">
		<meta content="Spruko Technologies Private Limited" name="author">
		<meta name="keywords" content="admin, admin dashboard template, admin panel template, admin template, best bootstrap admin template, bootstrap 4 admin template, bootstrap 4 dashboard template, bootstrap admin template, bootstrap dashboard template, html admin template, html5 dashboard template, html5 admin template, modern admin template, simple admin template, template admin bootstrap 4"/>
		<!-- Favicon -->
        <link rel="icon" href="{{ asset('templates/indoui/images/brand/favicon.ico') }}" type="image/x-icon"/>
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('templates/indoui/images/brand/favicon.ico') }}" />
        <!-- Title -->
        <title>Admin</title>
        <!--Bootstrap css-->
        <link rel="stylesheet" href="{{ asset('templates/indoui/plugins/bootstrap/css/bootstrap.min.css') }}">
        <!--Style css -->
        <link href="{{ asset('templates/indoui/css/style.css') }}" rel="stylesheet" />
        <link href="{{ asset('templates/indoui/css/dark-style.css') }}" rel="stylesheet" />
        <link href="{{ asset('templates/indoui/css/skin-modes.css') }}" rel="stylesheet">
        <!-- P-scrollbar css-->
        <link href="{{ asset('templates/indoui/plugins/p-scrollbar/p-scrollbar.css') }}" rel="stylesheet" />
        <!-- Sidemenu css -->
        <link href="{{ asset('templates/indoui/plugins/sidemenu/sidemenu.css') }}" rel="stylesheet" />
        <!--Daterangepicker css-->
        <link href="{{ asset('templates/indoui/plugins/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet" />
        <!-- Countdown css-->
        <link href="{{ asset('templates/indoui/plugins/jquery-countdown/countdown.css') }}" rel="stylesheet">
        <!-- Rightsidebar css -->
        <link href="{{ asset('templates/indoui/plugins/sidebar/sidebar.css') }}" rel="stylesheet">
        <!---Icons css-->
        <link href="{{ asset('templates/indoui/css/icons.css') }}" rel="stylesheet" />
	</head>

	<body class="app sidebar-mini dark-mode">
		<!--Global-Loader-->
		{{-- <div id="global-loader">
			<img src="{{ ('templates/indoui/images/loader.svg') }}" alt="loader">
		</div> --}}
		<div class="page">
			<div class="page-main">
				@include('admin.partials.topbar')
                @include('admin.partials.sidebar')

                @yield('container')

                @include('admin.partials.footer')
			</div><!-- End page-main-->
		</div><!-- End Page -->
		<!-- Back to top -->
        <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

        <!-- Jquery js-->
        <script src="{{ asset('templates/indoui/js/jquery-3.4.1.min.js') }}"></script>
        <!--Bootstrap.min js-->
        <script src="{{ asset('templates/indoui/plugins/bootstrap/js/popper.min.js') }}"></script>
        <script src="{{ asset('templates/indoui/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
        <!--Jquery Sparkline js-->
        <script src="{{ asset('templates/indoui/js/jquery.sparkline.min.js') }}"></script>
        <!-- Chart Circle js-->
        <script src="{{ asset('templates/indoui/js/circle-progress.min.js') }}"></script>
        <!-- Star Rating js-->
        <script src="{{ asset('templates/indoui/plugins/rating/jquery.rating-stars.js') }}"></script>
        <!--Moment js-->
        <script src="{{ asset('templates/indoui/plugins/moment/moment.min.js') }}"></script>
        <!-- Daterangepicker js-->
        <script src="{{ asset('templates/indoui/plugins/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
        <!--Side-menu js-->
        <script src="{{ asset('templates/indoui/plugins/sidemenu/sidemenu.js') }}"></script>
        <!-- P-scrollbar js-->
        <script src="{{ asset('templates/indoui/plugins/p-scrollbar/p-scrollbar.js') }}"></script>
        <script src="{{ asset('templates/indoui/plugins/p-scrollbar/p-scrollbar-leftmenu.js') }}"></script>
        <!-- Charts js-->
        <script src="{{ asset('templates/indoui/plugins/chart/chart.bundle.js') }}"></script>
        <script src="{{ asset('templates/indoui/plugins/chart/utils.js') }}"></script>
        <!--Count-down -->
        <script src="{{ asset('templates/indoui/plugins/jquery-countdown/countdown.js') }}"></script>
        <script src="{{ asset('templates/indoui/plugins/jquery-countdown/jquery.plugin.min.js') }}"></script>
        <script src="{{ asset('templates/indoui/plugins/jquery-countdown/jquery.countdown.js') }}"></script>
        <!-- Custom-charts js-->
        <script src="{{ asset('templates/indoui/js/index4.js') }}"></script>
        <!--Time Counter js-->
        <script src="{{ asset('templates/indoui/plugins/counters/jquery.missofis-countdown.js') }}"></script>
        <script src="{{ asset('templates/indoui/plugins/counters/counter.js') }}"></script>
        <!-- Rightsidebar js -->
        <script src="{{ asset('templates/indoui/plugins/sidebar/sidebar.js') }}"></script>
        <!-- Custom js-->
        <script src="{{ asset('templates/indoui/js/custom.js') }}"></script>
	</body>

<!-- Mirrored from laravel.spruko.com/indoui/Leftmenu-Icon-DarkSidebar-ltr/index4 by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Aug 2023 01:57:56 GMT -->
</html>
