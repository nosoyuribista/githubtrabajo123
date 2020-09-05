@extends('layout')

@section('content')
	<h1>proyecto</h1>

	{{--
	<ul>
		@forelse($proyectos as $proyectoItem)
			<li>{{ $proyectoItem->name}} <small>Creado: {{ $proyectoItem->created_at->diffForHumans()}}</small></li>
		@empty
			<li>No tienes proyectos</li>

		@endforelse
	</ul>
	--}}
	
@endsection
