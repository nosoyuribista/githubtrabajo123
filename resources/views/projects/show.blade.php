
@extends('layout')




@section('title','Proyecto | '.$project->title)

@section('content')
	

	<h1>{{$project->title}}</h1>
	<a href="{{route('adminproyectos.edit',$project)}}">Editar</a>
	<form method="POST" action="{{route('adminproyectos.destroy', $project)}}">
		@csrf @method('DELETE')
		<button>Borrar</button>
	</form>
	<h2>{{$project->description}}</h2>
	<h3>Numero de estudiantes = {{$project->students_number}}</h3>
	<p>Creado {{$project->created_at->diffForHumans()}}</p>
	<p>Actualizado {{$project->updated_at->diffForHumans()}}</p>



@endsection



