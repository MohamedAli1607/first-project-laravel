@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
		<div class="panel panel-primary">
			<div class="panel-heading">Formation</div>
				
			
		</div>
		<div class="pull-right">
					<a href="{{url('/formation/creation')}}" class="btn btn-sm btn-info"> Ajouter
					</a>
				</div>
		
			<table class="table">
				<thead>
					<tr>
						<th>Titre</th>
						<th>Description</th>
						<th>Creé le</th>
						<th>Modifier le</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					@foreach($frm as $f)
						<tr>
							<td>{{$f->nom}}</td>
							<td>{{$f->description}}</td>
							<td>{{$f->created_at}}</td>
							<td>{{$f->updated_at}}</td>
							<td>
							
					<form action="{{url('formation/'.$f->id)}}" method="POST">
      					{{csrf_field()}}
      					{{method_field('DELETE')}}
      					<a href="{{url('/formation/'.$f->id.'/show')}}" class="btn btn-sm btn-info"> Consulter
					</a>
					<a href="{{url('/formation/'.$f->id.'/modifier')}}" class="btn btn-sm btn-success"> Modifier
					</a>
      					<button type="submit" class="btn btn-danger">supprimer</button>
					</form>

							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
	{{$frm->links()}}






@endsection

