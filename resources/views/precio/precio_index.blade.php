@extends('adminlte::page')

@section('title', 'Precios')

@section('content_header')
    <h1>PRECIOS</h1>
@stop

@section('content')
    <a href="/precios/create" class='btn btn-outline-success mb-5'>Crear</a>
    <div class="row container m-auto">
        <x-card :precios="$precios" />
    </div>



    @include('sweetalert::alert')

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@stop
