		<h1 class="display-4">{{$h1name}}</h1>
		<hr>
		@csrf
		
		<div class="form-group">
					
				<input class="form-control bg-light shadow-sm border-0" 
				type="text" 
				placeholder="Nombre" 
				name="name" 
				value="{{ old('name', $user->name)}}">			
									
		</div>
			
			
		<div class="form-group">
		
				
			<input class="form-control bg-light shadow-sm border-0" 
			type="number" 
			placeholder="Documento de indentificacion" 
			name="identity_document" 
			value="{{old('identity_document', $user->identity_document)}}">
		
		</div>
			
		<div class="form-group">		
			<input class="form-control bg-light shadow-sm border-0"  
			type="email" 
			name="email" 
			placeholder="Email" 
			value="{{ old('email', $user->email)}}">
		
		</div>	
		@unless($user->id)
			
			<div class="form-group">
					
				<input  class="form-control bg-light shadow-sm border-0" 
				placeholder="Contraseña" 
				type="password" 
				name="password">
			</div>
			
			
			<div class="form-group">
				<input class="form-control" 
				placeholder="Confirmar contraseña" 
				type="password" 
				name="password_confirmation">
			</div>
			@endunless
		<br>

		<div class="checkbox">

			@foreach($roles as $id => $name)

				<label>
					<input 
					type="checkbox" 
					value="{{ $id }}" 
					{{ $user->roles->pluck('id')->contains($id) ? 'checked' : ''}}
					name="roles[]">

					{{$name}}
				</label>

			@endforeach
			
		</div>
		<hr>
		<br>
		<button class="btn btn-primary btn-lg btn-block">{{$btnText}}</button>