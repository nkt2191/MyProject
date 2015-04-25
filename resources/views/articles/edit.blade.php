@extends('master')

@section ('head.title')
Edit  Article
@endsection

@section ('body.content')
<div class="container">
	
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<h1>Edit article</h1>
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

			{!! Form::model($article,[
					'route' => ['article.update',$article ->id],
					'method' => 'PUT',
					'class' => 'form-horizontal'
				])
				 !!}

				@include('articles._form',['button_name' => 'Update'])
			{!! Form::close() !!}


		</div>
	</div>
</div>
@endsection
