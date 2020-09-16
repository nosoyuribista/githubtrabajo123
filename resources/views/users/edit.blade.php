@extends('layout')

@section('title')
Actualizar usuario
@endsection
@section('content')

	@include('partials.validation-errors')

	<div class="container">	
		<div class="row">
			<div class="col-12 col-sm-10 col-lg-6 mx-auto">
				<form class="bg-white shadow rounded py-3 px-4" method="POST" action="{{route('adminusuarios.update',$user)}}">
					@method('PATCH')			
					@include('users._form', ['btnText' => 'Actualizar','h1name' => 'Actualizar'])
				</form>
		   	</div>
		</div>
	</div>








@endsection
