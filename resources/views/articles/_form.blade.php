<div class="form-group">
				{!! Form::label('title','Title Article' , ['class' => 'control-label']) !!}
				{!! Form::text('title',null,['id' => 'title','class' => 'form-control', 'placeholder' => 'Please enter title','required' => 'true']) !!}
			</div>

			<div class="form-group">
			{!! Form::label('content','Content Article' , ['class' => 'control-label']) !!}
				{!! Form::textarea('content',null,['id' => 'content','class' => 'form-control', 'placeholder' => 'Please enter content article','required' => 'true'])!!}
			</div>

			<div class="form-group">
				{!! Form::submit($button_name, ['class'=> 'btn btn-primary']) !!}
			</div>