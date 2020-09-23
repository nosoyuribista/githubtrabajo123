<br>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Agregar {{$text}}
</button>
<br><br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Correo</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($project->users as $user)
      @if($user->roles_project->where('id','==',$role_id))
        <tr>
          <td>{{$user->name}}</td>
          <td>{{$user->email}}</td>
          <td>
            <a href="/proyecto/public/borrarusuario/{{$project->id}}/{{$user->id}}" class="btn btn-danger">Borrar</a>
          </td>
        </tr>
      @endif
    @endforeach
  </tbody>
</table>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar {{$text}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form method="POST" action="{{route('adminproyectos.adduser',$project)}}" id="form_user">
          @csrf
            <label formuser>Seleccione asesor</label>
            <select class="form-control" name="user_id">
              @foreach($teachers as $teacher)
                <option value="{{$teacher->id}}">{{$teacher->name}}</option>
              @endforeach
              <input value="{{$role_id}}" type="hidden" name="role_id">
          
            </select>
            
            <button form="form_user" type="submit" class="btn btn-primary btn-lg btn-block" >Agregar
            </button>
          
        </form>
      </div>

    </div>
  </div>
</div>