
@extends('layout')
@section('title')
Actualizar proyecto
@endsection
@section('content')

  @include('partials.validation-errors')
  <div class="container"> 
    <div class="row">
      <div class="col-12 col-sm-10 col-lg-6 mx-auto">
        <div class="bg-white shadow rounded py-3 px-4">

<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="project-tab" data-toggle="tab" href="#project" role="tab" aria-controls="project" aria-selected="true">Editar proyecto</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="asesor-tab" data-toggle="tab" href="#asesor" role="tab" aria-controls="asesor" aria-selected="false">Asesor</a>
  </li>
  <li class="nav-item" role="">
    <a class="nav-link" id="coasesores-tab" data-toggle="tab" href="#coasesores" role="tab" aria-controls="coasesores" aria-selected="false">Coasesores</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="jurados-tab" data-toggle="tab" href="#jurados" role="tab" aria-controls="jurados" aria-selected="false">Jurados</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="estudiantes-tab" data-toggle="tab" href="#estudiantes" role="tab" aria-controls="estudiantes" aria-selected="false">Estudiantes</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="project" role="tabpanel" aria-labelledby="project-tab">
  	@include('projects.edit',['btnText' => 'Actualizar','h1name' => 'Editar proyecto'])
  </div>
  <div class="tab-pane fade" id="asesor" role="tabpanel" aria-labelledby="asesor-tab">
    @include('projects.user_list',['text' => 'asesor','formulario'=>'modalAsesor','role_id'=>2])
  </div>
  <div class="tab-pane fade" id="coasesores" role="tabpanel" aria-labelledby="coasesores-tab">
    @include('projects.user_list',['text' => 'coasesor','formulario'=>'modalCoasesor','role_id'=>3])
  </div>
  <div class="tab-pane fade" id="jurados" role="tabpanel" aria-labelledby="jurados-tab">
    @include('projects.user_list',['text' => 'jurados','formulario'=>'#modalJurado','role_id'=>4])
  </div>
  <div class="tab-pane fade" id="estudiantes" role="tabpanel" aria-labelledby="estudiantes-tab">
    @include('projects.user_list',['text' => 'estudiante','formulario'=>'modalEstudiante','role_id'=>5])
  </div>
  





        </div>
      </div>
    </div>
  </div>

@endsection