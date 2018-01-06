@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
<table class="table">
	<tr>

	  <th>Titre</th>
      <th>Description</th>
      <th>Crée le </th>
      <th>Modifier le</th>
	</tr>
	<tbody>
		@foreach($frm as $f) <!-- boucle --> 
			<tr>
				<td>{{$f->nom}}</td>   <!--  $f le nom de modele  -->
				<td>{{$f->description}}</td>
				<td>{{$f->created_at}}</td>
				<td>{{$f->updated_at}}</td>

			</tr>
		@endforeach
	</tbody>
</table>

		</div>
	</div>
</div>










@endsection