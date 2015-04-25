@extends('master')

@section ('head.title')
Login....
@endsection

@section ('body.content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Login</div>
				<div class="panel-body">
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
					
					{!! Form::open([
							'route' =>['users.login'],
							'method' =>'POST',
							'class' =>'form-horizontal'
						]) !!}

			<div class="form-group">
			{!! Form::label('email','E-Mail Address' , ['class' => 'col-md-4 control-label']) !!}
				<div class="col-md-6">
					{!! Form::text('email',null,['id' => 'email','class' => 'form-control', 'placeholder' => 'Please enter your email','required' => 'true'])!!}
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 control-label">Password</label>
				<div class="col-md-6">
					<input type="password" class="form-control" name="password" required='true'>
				</div>
			</div>

			<div class="form-group">
				<div class="col-md-6 col-md-offset-4">
				{!! Form::submit('Login', ['class'=> 'btn btn-primary']) !!}
				</div>
			</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
