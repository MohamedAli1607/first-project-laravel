@extends('layouts.app')

@section('content')

<div class="div col-md-8 col-md-offset-2">
  <div>


    <form action="{{url('/formation/'.$d->id)}}" method='POST'>
    	  <input type="hidden" name="_method" value="PUT">

      {{csrf_field()}}
  <div class="form-group">
    <label for="text">Titre</label>
    <input value="{{$d->nom}}" type="text" class="form-control" name="nomformation"  placeholder="nom">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">description</label>
    <input value="{{$d->description}}" type="text" class="form-control" name='descformation' placeholder="description">
  </div>
  <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form> 

  </div>
  
</div>


@endsection