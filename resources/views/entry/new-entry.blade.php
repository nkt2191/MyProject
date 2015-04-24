@extends('index')

@section('title')
New Entry...
@endsection

@section('content')
<div class="container">
	<form action="" method="POST" class="form-horizontal" role="form">
		<div class="form-group">
			<legend>New Entry...!</legend>
			<div class="form-group">
    <label class="control-label col-sm-2" for="title">TITLE:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="title" placeholder="Enter title">
    </div>
  </div>
  		<div class="form-group">
    <label class="control-label col-sm-2" for="content">CONTENT:</label>
    <div class="col-sm-10">      
      <textarea class="form-control" rows="10" id="comment"></textarea>
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
		</div>

</form>
</div>

@endsection