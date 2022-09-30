@extends('adminlte::page')

@section('title', 'Precios')

@section('content_header')
    <h1>Precios del sitio</h1>
@stop

@section('content')
    <a href="/precios/create" class='btn btn-outline-success'>Crear</a>
    @foreach ($precios as $precio)
        <div class='d-flex flex-row justify-content-center align-items-center'>
            <x-card
            :titulo="$precio->titulo"
            :dominio="$precio->dominio"
            :hosting="$precio->dominio"
            :almacenamiento="$precio->dominio"
            :libre="$precio->libre"
            :telefono="$precio->telefono"
            :precio="$precio->precio" />
        </div>
    @endforeach

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop
