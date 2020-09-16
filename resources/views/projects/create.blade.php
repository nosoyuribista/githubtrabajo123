@extends('layout')

@section('title')
Crear proyecto
@endsection
@section('content')
	
@include('partials.validation-errors')

	<div class="container">	
		<div class="row">
			<div class="col-12 col-sm-10 col-lg-6 mx-auto">
				<form class="bg-white shadow rounded py-3 px-4" method="POST" action="{{route('adminproyectos.store')}}">	

					@include('projects._form',['btnText' => 'Crear','h1name' => 'Crear proyecto'])
				</form>
		   	</div>
		</div>
	</div>

@endsection
