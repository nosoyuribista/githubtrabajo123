@extends('layout')

@section('title')
Administracion de proyectos
@endsection
@section('content')

<div class="container">
	<h1 class="display-4">Administracion de proyectos</h1>

	<a class="btn btn-primary float-right" href="{{ route("adminproyectos.create")}}"> Crear proyecto</a>

	<form method="POST" action="{{route('adminproyectos.search')}}"> @csrf <input type="number" name="id" required="true" > <button class="btn btn-primary" type="submit"> Buscar por ID</button></form>	
	<br>

	


	<ul class="list-group">
		@forelse($projects as $project)
			<li class="list-group-item border-0 mb-3  shadow-sm"> <a 

				href="{{route('adminproyectos.show',$project)}}" class="d-flex justify-content-between"

				>
					<span>
				ID {{ $project->id}} 
					</span>
					<span class="text-secondary font-weight-bold">
				{{ $project->title}} 
					</span>		
					<span>
				{{ $project->created_at->format('d/m/Y')}} 
					</span>

			</a></li>
		@empty
			<li class="list-group-item border-0 mb-3 shadow-sm">No hay proyectos para mostrar</li>

		@endforelse
	</ul>
</div>

@endsection
