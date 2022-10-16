@extends('adminlte::page')

@section('title', 'Proyectos')

@section('content_header')
    <h1>Listado de proyectos</h1>
@stop

@section('content')
    <a href='/proyectos/create' class='btn btn-outline-success my-3'>CREAR</a>

    <section class="container ">
        <div class="d-flex justify-content-center align-items-center row ">
            <x-card.proyects-card :proyectos="$proyectos" />
        </div>
    </section>
    


    @include('sweetalert::alert')

@stop

@section('css')

@stop

@section('js')

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        //No funciona la funcion flecha!
        $('.enviarFormulario').submit(function(e) {
            e.preventDefault();

            Swal.fire({
                title: '¿Está seguro?',
                text: "!Se eliminara de manera definitiva!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, eliminar!',
                cancelButtonText: 'No, cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit()
                }
            })
        })
    </script>


@stop
