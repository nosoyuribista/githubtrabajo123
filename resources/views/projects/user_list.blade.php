<br>
<!-- Button trigger modal -->
<button type="button"  id="btnmodal" class="btn btn-primary">
  Agregar {{$text}}
</button>
<script>
  $("#btnmodal").on("click",function(){
        $("{{$formulario}}").modal("show");
    });
</script>
<br><br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id role {{$role_id}}</th>
      <th scope="col">formulario {{$formulario}}</th>
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


<!-- Modal para asesor-->
<div class="modal fade" id="modalAsesor" tabindex="-1" role="dialog" aria-labelledby="modalAsesorLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalAsesorLabel">Agregar {{$text}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form method="POST" action="{{route('adminproyectos.adduser',$project)}}" id="form_user">
          @csrf
            <label formuser>Seleccione</label>
            <select class="form-control" name="user_id">
              @foreach($teachers as $teacher)
                <option value="{{$teacher->id}}">{{$teacher->name}}</option>
              @endforeach
            </select>
            <input value="{{$role_id}}" type="hidden" name="role_id">
            
            <button form="form_user" type="submit" class="btn btn-primary btn-lg btn-block" >Agregar
            </button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal para coasesor-->
<div class="modal fade" id="modalCoasesor" tabindex="-1" role="dialog" aria-labelledby="modalCoasesorLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalCoasesorLabel">Agregar {{$text}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form method="POST" action="{{route('adminproyectos.adduser',$project)}}" id="form_user">
          @csrf
            <label formuser>Seleccione {{$text}}</label>
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

<!-- Modal para jurado-->
<div class="modal fade" id="modalJurado" tabindex="-1" role="dialog" aria-labelledby="modalJuradoLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalJuradoLabel">Agregar {{$text}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form method="POST" action="{{route('adminproyectos.adduser',$project)}}" id="form_user">
          @csrf
            <label formuser>Seleccione {{$text}}</label>
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

<!-- Modal para estudiante-->
<div class="modal fade" id="modalEstudiante" tabindex="-1" role="dialog" aria-labelledby="modalEstudianteLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalEstudianteLabel">Agregar {{$text}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form method="POST" action="{{route('adminproyectos.adduser',$project)}}" id="form_user">
          @csrf
            <label formuser>Seleccione {{$text}}</label>
            <select class="form-control" name="user_id">
              @foreach($students as $student)
                <option value="{{$student->id}}">{{$student->name}}</option>
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