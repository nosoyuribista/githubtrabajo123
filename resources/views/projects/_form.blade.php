		@csrf
		<label>
			Titulo del proyecto<br>	
			<textarea name="title">{{ old('title', $project->title)}}</textarea>
		</label>
		<br>
		<label>
			Tipo<br>	
			<input type="text" name="type" value="{{old('title', $project->type)}}">
		</label>
		<br>
			<label>
			Descripcion<br>	
			<textarea name="description">{{old('title', $project->title)}}</textarea>
		</label>
		<br>
		<label>
			Cantidad de estudiantes<br>	
			<input type="number" min="0" step="1" name="students_number" value="{{old('title', $project->students_number)}}">
		</label>
		<br>
		<button>{{$btnText}}</button>