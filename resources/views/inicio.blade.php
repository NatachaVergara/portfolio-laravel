@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class='text-center'>PANEL DE ADMINISTRACIÓN</h1>
@stop

@section('content')
    <div class="container">
        <div class="d-flex flex-column flex-md-row justify-content-center align-items-center">
            <x-card.inicio_card color="bg-dark" icon='fas fa-briefcase' link="/proyectos" />
            <x-card.inicio_card color="bg-danger" icon='fas fa-tools' link="/skills" />
            <x-card.inicio_card color="bg-info" icon='fas fa-dollar-sign' link="/precios" />



        </div>
    </div>
@endsection


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
@stop

@section('js')

    <script></script>

@stop
