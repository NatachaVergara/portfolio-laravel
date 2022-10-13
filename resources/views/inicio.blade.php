@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class='text-center'>PANEL DE ADMINISTRACIÓN</h1>
@stop

@section('content')
    <div class="container">
        <div class="d-flex flex-column flex-md-row justify-content-center align-items-center">
            <div class="m-2">
                <a href="#" class='btn'>
                    <div class="card bg-dark" style="width: 10rem;">
                        <div class="card-body d-flex justify-content-center align-items-center m-auto">
                            <i class="fas fa-briefcase" style="font-size: 2rem;"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="m-2">
                <a href="#" class='btn'>
                    <div class="card bg-danger" style="width: 10rem;">
                        <div class="card-body d-flex justify-content-center align-items-center m-auto">
                            <i class="fas fa-tools" style="font-size: 2rem;"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="m-2">
                <a href="#" class='btn'>
                    <div class="card bg-info" style="width: 10rem;">
                        <div class="card-body d-flex justify-content-center align-items-center m-auto">
                            <i class="fas fa-dollar-sign" style="font-size: 2rem;"></i>
                        </div>
                    </div>
                </a>
            </div>

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
