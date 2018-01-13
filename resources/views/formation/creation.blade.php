@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<form action="{{url('/formation')}}"  method="post">
				{{csrf_field()}} 
				  <div class="form-group">
				    <label >Titre</label>
				    <input type="text" class="form-control" id="titre"  placeholder="titre de formation" name="nomformation">
				   
				  </div>
				  <div class="form-group">
				    <label >Description</label>
				    <input type="text" class="form-control" id="description" placeholder="description" name="descformation">
				  </div>
				
				  <button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</div>




@endsection