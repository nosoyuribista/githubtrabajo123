

			<h1 class="display-4">{{$h1name}}</h1>
			<hr>
			@csrf
			<div class="form-group">

					<input class="form-control bg-light shadow-sm border-0"
					type="text"
					name="title"
					placeholder="Titulo del proyecto.."
					value="{{old('title', $project->title)}}">
			</div>
			<div class="form-group">

				<select class="form-control bg-light shadow-sm border-0" name="type_id">
					<option value="">-- seleccione el tipo de proyecto--</option>
					@foreach($types as $type)
					<option value="{{$type->id}}" {{$type->id == $project->type_id ? 'selected' : ''}}>{{$type->display_name}}</option>
					@endforeach

				</select>
				
				
				@if($project->id == null)
				<br>
				<select class="form-control bg-light shadow-sm border-0" name="user_id">
					<option value="">-- Seleccione asesor --</option>
					@foreach($users as $user)
					<option value="{{$user->id}}">{{$user->name}}</option>
					@endforeach
				</select>
				@endif
				
				
				

			</div>
			<div class="form-group">

					<textarea class="form-control bg-light shadow-sm border-0"
					placeholder="Justificacion.."
					name="justification">{{old('justification', $project->justification)}}</textarea>
			</div>

			<div class="form-group">





					<input class="form-control bg-light shadow-sm border-0"
					placeholder="Cantidad de estudiantes"
					type="number"
					min="0"
					step="1"
					name="students_number"
					value="{{old('students_number', $project->students_number)}}">
			</div>

		<button class="btn btn-primary btn-lg btn-block">{{$btnText}}</button>


