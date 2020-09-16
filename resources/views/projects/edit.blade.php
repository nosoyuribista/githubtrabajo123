@extends('layout')

@section('title')
Actualizar proyecto
@endsection
@section('content')

	@include('partials.validation-errors')


	<div class="container">	
		<div class="row">
			<div class="col-12 col-sm-10 col-lg-6 mx-auto">

				<form class="bg-white shadow rounded py-3 px-4" method="POST" action="{{route('adminproyectos.update',$project)}}">

					@method('PATCH')

					@include('projects._form',['btnText' => 'Actualizar','h1name' => 'Editar proyecto'])
				</form>

			</div>
		</div>
	</div>

@endsection
