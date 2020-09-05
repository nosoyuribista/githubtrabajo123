<!DOCTYPE html>
<link rel="stylesheet" href="{{asset('css/app.css')}}"> 
<script src="{{asset('js/app.js')}}" charset="utf-8"></script>



<html>
<head>
	<title>@yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
	<div id="app" class="d-flex flex-column h-screen justify-content-between">

		<header>
			@include('partials.nav')
		</header>
		<main>
			@yield('content')
		</main>
		<footer class="bg-white text-center text-black-50 py-3 shadow">
			{{config('app.name')}} - Trabajo de grado
		</footer>
	</div>
</body>
</html>

