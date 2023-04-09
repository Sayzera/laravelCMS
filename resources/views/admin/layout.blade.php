<!DOCTYPE html>
<html lang="tr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords"
		content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />


	<title>@yield('title', 'Düzce Üniversitesi Admin Panel')</title>

	<link href="{{asset('admin-asset/css/app.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('admin-asset/js/settings.js')}}">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
		@include('admin.part.sidebar')

		<div class="main">

			@yield('content')

			@yield('footer')
		</div>
	</div>

	<script src="{{asset('admin-asset/js/app.js')}}"></script>
	@include('admin.part.js')
	@yield('scripts')

</body>

</html>