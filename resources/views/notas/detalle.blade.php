@extends('plantilla')

@section('seccion')
    <h1>Detalle de Nota:</h1>
    <h4>id: {{ $nota->id}}</h4>
    <h4>id: {{ $nota->nombre}}</h4>
    <h4>id: {{ $nota->descripcion}}</h4>
@endsection