@extends('layout')

@section('title')
Crear proyecto
@endsection
@section('content')
	
@include('partials.validation-errors')

	<form method="POST" action="{{route('adminproyectos.store')}}">	

		@include('projects._form',['btnText' => 'Crear'])

	</form>

@endsection
