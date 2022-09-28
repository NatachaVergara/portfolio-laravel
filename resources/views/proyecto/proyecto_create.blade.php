@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class='text-center'>AGREGAR PROYECTO</h1>
@stop

@section('content')
    <form method="POST" action="/proyectos" enctype="multipart/form-data"
        class='d-flex flex-column justify-content-betweent align-items-center'>
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Titulo</label>
            <input type="text" class="form-control" name='titulo' required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Link</label>
            <input type="text" class="form-control" name='link' required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Logo</label>
            <input type="text" class="form-control" name='logo' required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Tecnologías</label>
            <input type="text" class="form-control" name='tec' required>
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Imagen</label>
            <input class="form-control pb-3" name='imagen' type="file" required id="formFile">
        </div>

        <div class=''>
            <button type="submit" class="btn btn-success">Agregar</button>
            <a href="/proyectos" class="btn btn-danger">Cancelar</a>
        </div>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop
