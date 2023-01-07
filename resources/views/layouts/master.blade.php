<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>Dashboard</title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="{{asset('admin/assets/img/favicon.png')}}" rel="icon">
	<link href="{{asset('admin/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.gstatic.com" rel="preconnect">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="{{asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('admin/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
	<link href="{{asset('admin/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
	<link href="{{asset('admin/assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
	<link href="{{asset('admin/assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
	<link href="{{asset('admin/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
	<link href="{{asset('admin/assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.css">

	<!-- Template Main CSS File -->
	<link href="{{asset('admin/assets/css/style.css')}}" rel="stylesheet">
	<link href="{{asset('admin/assets/css/bootstrap-editable.css')}}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
  <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  @yield('header')
</head>

<body>

	@include('layouts.include.header')

	@include('layouts.include.sidebar')

	<!-- Main -->
	@yield('content')
	<!-- End #main -->

	@include('layouts.include.footer')

	<!-- Vendor JS Files -->
	<script src="{{asset('admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('admin/assets/vendor/quill/quill.min.js')}}"></script>
	<script src="{{asset('admin/assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
	<script src="{{asset('admin/assets/vendor/tinymce/tinymce.min.js')}}"></script>
	<script src="{{asset('admin/assets/vendor/php-email-form/validate.js')}}"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
	<!-- Template Main JS File -->
	<script src="{{asset('admin/assets/js/main.js')}}"></script>
	<script src="{{asset('admin/assets/js/bootstrap-editable.js')}}"></script>
	<script src="{{asset('admin/assets/js/bootstrap-editable.min.js')}}"></script>
	@yield('sweetalert')
</body>
</html>