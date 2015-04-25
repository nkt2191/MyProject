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
	<nav class="navbar navbar-default" role="navigation">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/">Simple Blog</a>
		</div>
	
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav">				
				<li><a href="{{ route('article.create') }}">New Article</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
						<li><a href="{{ route('users.login') }}">Login</a></li>
						<li><a href="{{ route('users.register') }}">Register</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">  <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="">Profile</a></li>
								<li><a href="">Logout</a></li>
							</ul>
						</li>
				</ul>
		</div><!-- /.navbar-collapse -->
	</nav>

	<!-- Content -->

	@yield('body.content')

	<!-- Footer -->
	@include ('partials.footer')

<script src="/js/jquery.min.js" type="text/javascript"></script>
<script src="/js/bootstrap.js" type="text/javascript"></script>
@yield('body.js')
</body>
</html>