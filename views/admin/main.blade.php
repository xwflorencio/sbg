<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<title>@yield('title','Default') | Main</title>
	<link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/general.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/bracket.css')}}">
</head>

<body>
	
	@include('admin.nav')

	 <section>
	 	<div class="container p-3 my-3 bg-dark text-white">

	 		@include('flash::message')
	 		@include('admin.errors')
		
			@yield('content')
			
		</div>
	</section>
	
	<script src="{{ asset('plugins/bootstrap/js/bootstrap.js')}}"></script>
	<script src="{{ asset('plugins/jquery/jquery-3.5.1.js')}}"></script>


</body>
</html>