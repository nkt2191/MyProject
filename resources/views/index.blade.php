<!DOCTYPE html>
<html lang="en">
<head>	
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/bootstrap.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/bootstrap.min.css') }}">
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="">My Blog...!</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="{{ ('/') }}">HOME</a></li>
					<li><a href="{{ ('new-entry') }}">NEW ENTRY</a></li>
					<li><a href="{{ ('list-entry') }}">LIST ENTRY</a></li>
					<li><a href="{{ ('management') }}">MANAGEMENT</a></li>
					<li><a href="{{ ('testdemo') }}">CONSTACT US</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">					
						<li><a href="{{ url('login') }}">Login</a></li>
						<li><a href="{{ url('register') }}">Register</a></li>					
						<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <span class="caret"></span></a>
									<ul class="dropdown-menu" role="menu">
										<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
									</ul>
								</li>
				</ul>
			</div>
		</div>
	</nav>

	@yield('content')
	
	<script src="{{ asset('/assets/js/bootstrap.js') }}" type="text/javascript" ></script>
	<script src="{{ asset('/assets/js/bootstrap.min.js') }}" type="text/javascript" ></script>
	<script src="http://code.jquery.com/jquery-2.1.3.min.js" type="text/javascript" ></script>
	<script src="{{ asset('/assets/js/jquery-validate/jquery.validate.js') }}" type="text/javascript" ></script>
	<script src="{{ asset('/assets/js/jquery-validate/jquery.validate.min.js') }}" type="text/javascript" ></script>
</body>
</html>