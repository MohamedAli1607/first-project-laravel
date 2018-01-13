@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
		<div class="panel panel-primary">
			<div class="panel-heading">Formation</div>
				
			
		</div>
		
			<table class="table">
				<thead>
					<tr>
						<th>Titre</th>
						<th>Description</th>
						<th>Creé le</th>
						<th>Modifier le</th>
						
					</tr>
				</thead>
				<tbody>
					
						<tr>
							<td>{{$d->nom}}</td>
							<td>{{$d->description}}</td>
							<td>{{$d->created_at}}</td>
							<td>{{$d->updated_at}}</td>
						
		

						</tr>
	
				</tbody>
			</table>
		</div>
	</div>
</div>






@endsection

