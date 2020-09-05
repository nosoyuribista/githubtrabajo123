@extends('layout')

@section('title')
Actualizar proyecto
@endsection
@section('content')
	<h1>Actualizar proyecto</h1>

	@include('partials.validation-errors');

	<form method="POST" action="{{route('adminproyectos.update',$project)}}">

		@method('PATCH')

		@include('projects._form',['btnText' => 'Actualizar'])

	</form>

@endsection
