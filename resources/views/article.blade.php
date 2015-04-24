<!DOCTYPE html>
<html lang=en>
<head>
	<title>Show an article</title>

	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
	
	<nav class="navbar navbar-default" role="navigation">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Simple Blog</a>
		</div>
	
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav">				
				<li><a href="#">New Article</a></li>
			</ul>
			
			
		</div><!-- /.navbar-collapse -->
	</nav>

<div class="container">
	<!-- Start -->
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<a href="{{ url('/') }}" class="btn btn-link">
				<span class="glyphicon glyphicon-chevron-left"></span>
				Back to Home...!
			</a>
		</div>
	</div>
	<div class="row">
		
			<div class="col-sm-6 col-sm-offset-3">
			<h2>{{ $article->title }}</h2>
			<p>{{ $article->content }}</p>
			
		</div>
		
	</div>
	<!-- End -->
</div>

<!-- Footer -->
<div class="container" id="footer">
	<div class="row text-center">
		<div class="col-sm-6 col-sm-offset-3">
			<p>Copyright &copy; 2015, by NKT Dragon</p>
		</div>
	</div>
</div>

<script src="/js/jquery.min.js" type="text/javascript"></script>
<script src="/js/bootstrap.js" type="text/javascript"></script>
</body>
</html>