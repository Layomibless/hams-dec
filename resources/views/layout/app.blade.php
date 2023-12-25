<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="W3crm:Customer Relationship Management Admin Bootstrap 5 Template">
	<meta property="og:title" content="W3crm:Customer Relationship Management Admin Bootstrap 5 Template">
	<meta property="og:description" content="W3crm:Customer Relationship Management Admin Bootstrap 5 Template">
	<meta property="og:image" content="https://w3crm.dexignzone.com/xhtml/social-image.png">
	<meta name="format-detection" content="telephone=no">
	
    <!-- PAGE TITLE HERE -->
	<title>Index Page</title>

    <link href="{{ asset('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/vendor/swiper/css/swiper-bundle.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/css2?family=Material+Icons') }}" rel="stylesheet">
	<link href="{{ asset('assets/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/vendor/jvmap/jquery-jvectormap.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
	
	<!-- tagify-css -->
	<link href="{{ asset('assets/vendor/tagify/dist/tagify.css') }}" rel="stylesheet">
	
	<!-- Style css -->
   <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    </head>

    <body data-typography="poppins" data-theme-version="light" data-layout="vertical" data-nav-headerbg="black" data-headerbg="color_1">

<div id="preloader">
    <div class="lds-ripple">
        <div></div>
        <div></div>
    </div>
</div>
<div id="main-wrapper">

@include('layout.inc.nav')
@include('layout.inc.header')
@include('layout.inc.sidebar')

	
    <div class="content-body">
@yield('page_content')     
    </div>
    
    <div class="footer">
        <div class="copyright">
           <p>Copyright © Developed by <a href="/" target="_blank">{{env('APP_NAME')}}</a> {{date('Y')}}</p>
        </div>
    </div>
</div>
<script src="{{ asset('assets/vendor/global/global.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/chart.js/Chart.bundle.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/apexchart/apexchart.js') }}"></script>
	
	<!-- Dashboard 1 -->
	<script src="{{ asset('assets/js/dashboard/dashboard-1.js') }}"></script>
	<script src="{{ asset('assets/vendor/draggable/draggable.js') }}"></script>
	
	
	<!-- tagify -->
	<script src="{{ asset('assets/vendor/tagify/dist/tagify.js') }}"></script>
	 
	<script src="{{ asset('assets/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/datatables/js/dataTables.buttons.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/datatables/js/buttons.html5.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/datatables/js/jszip.min.js') }}"></script>
	<script src="{{ asset('assets/js/plugins-init/datatables.init.js') }}"></script>
   
	<!-- Apex Chart -->
	
	<script src="{{ asset('assets/vendor/bootstrap-datetimepicker/js/moment.js') }}"></script>
	<script src="{{ asset('assets/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>
	

	<!-- Vectormap -->
    <script src="{{ asset('assets/vendor/jqvmap/js/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jqvmap/js/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('assets/vendor/jqvmap/js/jquery.vmap.usa.js') }}"></script>
     <script src="{{ asset('assets/js/custom.js') }}"></script>
	<script src="{{ asset('assets/js/deznav-init.js') }}"></script>
	<script src="{{ asset('assets/js/demo.js') }}"></script>
	
</body>
</html>