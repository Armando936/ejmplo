@extends('layouts.tema')

@section('contenido')
<form action="/materia/update">
  <label for="materia">Materia</label>
  <input type="text" name="materia">
  <input type="submit" name="guardar">
  < /form>
</form>
  @endsection