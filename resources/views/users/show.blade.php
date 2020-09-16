
@extends('layout')




@section('title','Proyecto | '.$user->name)

@section('content')
	
<div class="container">

	<div class="bg-white p-5 shadow rounded">
		<h1>{{$user->name}}</h1>
		<p class="text-secondary">{{$user->email}}</p>
		<p class="text-secondary">Numero de identificacion : {{$user->identity_document}}</p>

		<p class="text-black-50"> 
			Roles:
			@foreach($user->roles as $role)

				  {{ $role->display_name }} -

			@endforeach

		</p>

		<p class="text-black-50">Actualizado {{$user->updated_at->diffForHumans()}}</p>
		<p class="text-black-50">Creado {{$user->created_at->diffForHumans()}}</p>

		<hr>
		<div class="d-flex justify-content-between">

			@if(auth()->user()->hasRoles(['admin']))
			<a href="{{route('adminusuarios.index')}}">Regresar</a>
			<div class="btn-group btn-group-sm">

				<a class="btn btn-primary" 
				href="{{route('adminusuarios.edit',$user)}}">Editar</a>

				<a class="btn btn-danger" 
				href="#"
				onclick="document.getElementById('delete-user').submit()" 
				>
				Eliminar
				</a>

				<form id="delete-user" method="POST" action="{{route('adminusuarios.destroy', $user)}}">
					@csrf @method('DELETE')
				</form>
			</div>
			@endif
		</div>
	</div>

</div>

@endsection