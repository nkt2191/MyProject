@extends('master')

@section ('head.title')
Post New Article...!
@endsection

@section ('body.content')
<div class="container">
	
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<h1>Add new article</h1>
			<hr>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
		@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
			<form action="{{ route('article.store') }}" method="POST" class="form-horizontal">

				<input type="hidden" name="_token" value="{{ csrf_token() }}" >
				<div class="form-group">
					<label for='title' class="control-label">Title article....</label>
					<input class="form-control" type="text" name="title" id="title" placeholder="Enter title....!">
				</div>

				<div class="form-group">
					<label for='content' class="control-label">Content article....</label>
					<input class="form-control" type="text" name="content" id="content" placeholder="Enter content....!">
					
				</div>

				<div class="form-group">
					<button class="btn btn-primary">Post</button>
				</div>
			</form>

		</div>
	</div>
</div>
@endsection
