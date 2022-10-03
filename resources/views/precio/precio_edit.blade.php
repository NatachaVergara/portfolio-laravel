@extends('adminlte::page')

@section('title', 'Precios')

@section('content_header')
    <h1>Precios del sitio</h1>
@stop

@section('content')
    <x-forms.edit_precios :precio="$precio" />

    @include('sweetalert::alert')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop
