@extends('master')

@section ('head.title')
List Articles
@endsection

@section ('body.content')
<div class="container">
	<!-- Start -->
	<div class="row">
		@foreach ($articles as $a)
			<div class="col-sm-6 col-sm-offset-3">
			<h2>{{ $a->title }}</h2>
			<p>{{ $a->content }}</p>
			<p><a href="{{ route('article.show',$a->id) }}">Read more...</a></p>
		</div>
		@endforeach		
	</div>
	<!-- End -->
</div>
@endsection
