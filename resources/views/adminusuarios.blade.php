

@extends('layout')

@section('title')
Administracion de usuarios
@endsection
@section('content')

<div class="container">
	<h1 class="display-4">Administracion de usuarios</h1>
	<a class="btn btn-primary float-right" href="{{route('adminusuarios.create')}}"> Crear nuevo usuario</a>
	
	<form method="POST" action="{{route('adminusuarios.search')}}"> @csrf <input type="number" name="id" required="true" > <button class="btn btn-primary" type="submit"> Buscar por ID</button></form>	
	<br>


	<ul class="list-group">
		@forelse($users as $user)
			<li class="list-group-item border-0 mb-3  	shadow-sm"> <a 

				href="{{route('adminusuarios.show',$user)}}" class="d-flex justify-content-between"

				>
					<span>
				ID {{ $user->id}} 
					</span>
					<span class="text-secondary font-weight-bold">
				{{ $user->name}} 
					</span>		
					<span>
				{{ $user->created_at->format('d/m/Y')}} 
					</span>

			</a></li>
		@empty
			<li class="list-group-item border-0 mb-3 shadow-sm">No hay proyectos para mostrar</li>

		@endforelse
	</ul>
</div>

@endsection
