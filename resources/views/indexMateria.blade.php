@extends('layouts.tema')

@section('contenido')


  <h1>
    Listado de materias
  </h1>
<a href= "{{ action('MateriaController@create')}}">Nueva materia (action)</a>
<a href= "{{ route('materia.create')}}" class="btn btn-success">Nueva materia (route)</a>


@if($materias->count()==0)
<div class="alert alert-warning">
  No tienes materias registradas
</div>
@else
<table class="table">
  <thead>
  <tr>
    <th>Materia</th>
    <th>CRN</th>
    <th>sección</th>
    <th>Horario</th>
    <th>Ultima actualizacion</th>
    </tr>
  </thead>
  <tbody>
  @foreach($materias as $materia)
    <tr>
      <td>{{$materia->nombre_materia}}</td>
      <td>{{$materia->crn}}</td>
      <td>{{$materia->seccion}}</td>
      <td>{{$materia->horario}}</td>
      <td>{{$materia->upoated_at}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endif
@endsection