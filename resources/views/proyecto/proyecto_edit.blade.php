@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class='text-center'>EDITAR PROYECTO</h1>
@stop

@section('content')
    <form method="POST" action="/proyectos/{{ $proyecto->id }} " enctype="multipart/form-data"
        class='d-flex flex-column justify-content-betweent align-items-center p-5'>
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Titulo</label>
            <input type="text" class="form-control" name='titulo' value={{ $proyecto->titulo }} required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Link</label>
            <input type="text" class="form-control" name='link' value={{ $proyecto->link }} required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Logo</label>
            <input type="text" class="form-control" name='logo' value={{ $proyecto->logo }} required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Tecnologías</label>
            <input type="text" class="form-control" name='tec' value={{ $proyecto->tec }} required>
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Imagen</label>
            <input class="form-control pb-3" name='imagen' type="file" id="formFile">
            <img src="{{ asset('upload/proyectos/' . $proyecto->image) }}" width="70px" height="70px" alt="Image" class='m-2'>
        </div>

        <div class=''>
            <button type="submit" class="btn btn-success">Editar</button>
            <a href="/proyectos" class="btn btn-danger">Cancelar</a>
        </div>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
