@extends('layout.plantilla')
@section('contenido')
 
     <div class="card">
              <div class="card-header">
                <h3 class="card-title">LABORATORIO 1</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
              <div class="row">
<div class="col-md-9">
<a href="{{url('persona/create')}}" class="pull-right">
<button class="btn btn-success">Crear Persona</button> </a>
</div></div>
<div class="row">
<div class="table-responsive">
<table class="table table-striped table-hover">
<thead>
<th>Id</th>
<th>Documento Identidad</th>
<th>Nombres Completos</th>
<th>Apellidos</th>
<th>Correo Electrónico</th>
<th>Telefono</th>
<th>Opciones</th>
</thead>
<tbody>
@foreach($personas as $per)
<tr>
<td>{{ $per->id }}</td>
<td></td>
<td>{{ $per->nombre }}</td>
<td>{{ $per->apellido}}</td>
<td>{{ $per->email }}</td>
<td>{{ $per->telefono }}</td>
<td>
<a href="{{URL::action('App\Http\Controllers\PersonaController@edit',$per->id)}}"><button class="btn btn-primary">Actualizar</button></a>
<a href="" data-bs-toggle="modal" data-bs-target="#modal-delete-{{$per->id}}">
 <button type="button" class="btn btn-danger"> Eliminar</button>
</a>
</td>
</tr>

@include('persona.modal')

@endforeach
</tbody>
 </table>
</div>
</div>
               
@endsection  
