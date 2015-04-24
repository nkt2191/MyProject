<!DOCTYPE html>
<html lang=en>
<head>
	<title>@yield('head.title')</title>

	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	@yield('head.css')
</head>
<body>
	
	<!-- Navbar -->
	@include ('partials.navbar')

	<!-- Content -->

	@yield('body.content')

	<!-- Footer -->
	@include ('partials.footer')

<script src="/js/jquery.min.js" type="text/javascript"></script>
<script src="/js/bootstrap.js" type="text/javascript"></script>
@yield('body.js')
</body>
</html>