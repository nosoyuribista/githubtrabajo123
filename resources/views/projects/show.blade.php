
@extends('layout')




@section('title','Proyecto | '.$project->title)

@section('content')
<div class="container">
	<div class="bg-white p-5 shadow rounded">

		<h1>{{$project->title}}</h1>
		<p class="text-secondary">{{$project->description}}</p>
		<p class="text-secondary">Numero de estudiantes : {{$project->students_number}}</p>
		<p class="text-secondary">Tipo : {{$project->type->display_name}}</p>
		<p class="text-black-50">Actualizado {{$project->updated_at->diffForHumans()}}</p>
		<p class="text-black-50">Creado {{$project->created_at->diffForHumans()}}</p>
		<p class="text-secondary">Asesor : 
		@foreach($project->users()->where('role_id',2)->get() as $asesor)
			{{$asesor->name}}
		@endforeach
	</p>
		<hr>
		<div class="d-flex justify-content-between">
		<a href="{{route('adminproyectos.index')}}">Regresar</a>
			<div class="btn-group btn-group-sm">
				<a class="btn btn-primary"
				href="{{route('adminproyectos.edit',$project)}}">Editar</a>

				<a class="btn btn-danger"
				href="#"
				onclick="document.getElementById('delete-project').submit()"
				>
				Eliminar
				</a>

				<form class="d-none" id="delete-project" method="POST" action="{{route('adminproyectos.destroy', $project)}}">
					@csrf @method('DELETE')
				</form>
			</div>
		</div>
	</div>
</div>

@endsection



