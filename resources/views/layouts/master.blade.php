<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" class="rel">
	<title>infolangueS</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{url('/')}}">Infolangue</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{url('/test1')}}">test 1 </a>
      </li>
     <li class="nav-item active">
        <a class="nav-link" href="{{url('/test1')}}">test 2 </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{url('/test3')}}">test 3 </a>
      </li>

    </ul>
  </div>
</nav>


	@yield('content')
</body>
<script src="{{asset('assets/js/bootstrap.min.js')}}">
</html>