@extends('layout')

@section('content')
	<div class="container">
		<div class="row">
			@guest
				<div class="col-12 col-lg-6">
					
						<h1 class="display-4 text-primary">Plataforma</h1>
						<p class="text-secondary"> Esta es una plataforma web para la gestion de
						proyectos de investigacion de la facultad de ingenieria de sistemas para
						la Universidad Mariana.
						</p>
						<a class="btn btn-large btn-block btn-outline-primary" href="{{route('login')}}"> Si ya tienes cuenta, ingresa.</a>

				</div>
				<div class="col-12 col-lg-6">
					<img class="img-fluid mb-4" src="./img/home.svg">
				</div>
			@endguest

			@auth
				<div class="col-12 col-lg-6">

						<h1 class="display-4 text-primary">Plataforma</h1>
						<h3 class="text-secondary"> Bienvenido, {{auth()->user()->name}}
						</h3>

				</div>
				<div class="col-12 col-lg-6">
					<img class="img-fluid mb-4" src="./img/coding_.svg">
				</div>

			@endauth
		</div>
	</div>
@endsection
