
			
				<form  method="POST" action="{{route('adminproyectos.update',$project)}}">

					@method('PATCH')
					@include('projects._form')
				</form>

			