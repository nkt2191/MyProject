@extends ('master')

@section ('head.title')
{{ $article->title }}
@endsection

@section ('body.content')
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
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<a href="{{ route('article.edit',$article->id) }}" class="btn btn-info">Edit</a>

			{!! Form::open([
					'route' => ['article.destroy',$article->id],
					'method' =>'DELETE',
					'style' => 'display: inline'
				]) !!}

				<button class="btn btn-danger">Delete</button>

			{!! Form::close() !!}
		</div>
	</div>
	<!-- End -->
</div>
@endsection