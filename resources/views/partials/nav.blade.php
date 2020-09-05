
<nav class="navbar navbar-expand-lg navbar-light  bg-white shadow-sm">
	<div class="container">

		<a class="navbar-brand" href="{{route('principal')}}">
			{{config('app.name')}}
		</a> 

			<button class="navbar-toggler" type="button" 
				data-toggle="collapse" 
				data-target="#navbarSupportedContent" 
				aria-controls="navbarSupportedContent" 
				aria-expanded="false" 
				aria-label="{{ __('Toggle navigation') }}">
	        	<span class="navbar-toggler-icon"></span>
	        </button>

	        <div class="collapse navbar-collapse" id="navbarSupportedContent">

			<ul class="nav nav-pills">
				
					<li class="nav-item"><a class="nav-link {{setActive('principal')}}" href="{{route('principal')}}">Principal</a></li>
					<li class="nav-item"><a class="nav-link {{setActive('proyecto')}}" href="{{route('proyecto')}} ">Mi Proyecto</a></li>
					<li class="nav-item"><a class="nav-link {{setActive('proyectos')}}" href="{{route('proyectos')}} ">Mis Proyectos</a></li>
					<li class="nav-item"><a class="nav-link" href="{{route('proyectossistemas')}} ">Proyectos de sistemas</a></li>

					<li class="nav-item"><a class="nav-link {{setActive('adminusuarios')}}" href="{{route('adminusuarios')}} ">Administrar usuarios</a></li>
					@auth
					<li class="nav-item"><a class="nav-link {{setActive('adminproyectos.*')}}" href="{{route('adminproyectos.index')}} ">Administrar proyectos</a></li>
					@endauth



					@guest
					<li class="nav-item"><a class="nav-link" href="{{route('login')}} ">Iniciar sesion</a></li>
					@else
					<li class="nav-item"><a class="nav-link" href="#" onclick="event.preventDefault();
	                            document.getElementById('logout-form').submit();">
	                            	Cerrar Sesion
	                    </a></li>
					@endguest

				
			</ul>
		</div>
	</div>
	</nav>
	<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

