@extends('layout')
@section('title')
Crear usuario
@endsection
@section('content')


@include('partials.validation-errors')


	<div class="container">	
		<div class="row">
			<div class="col-12 col-sm-10 col-lg-6 mx-auto">
				<form class="bg-white shadow rounded py-3 px-4" method="POST" action="{{route('adminusuarios.store')}}">	
					@include('users._form', ['btnText' => 'Crear','user' => new App\User, 'h1name'=>'Crear usuario'])
				</form>
		   	</div>
		</div>
	</div>








 	





@endsection