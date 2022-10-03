@extends('adminlte::page')

@section('title', 'Proyectos')

@section('content_header')
    <h1>Listado de proyectos</h1>
@stop

@section('content')
    <a href='/proyectos/create' class='btn btn-primary my-3'>CREAR</a>


    <div class='d-flex flex-wrap justify-content-center'>
        @foreach ($proyectos as $proyecto)
            {{-- comienzo card --}}
            <div class="card m-2 rounded shadow-lg" style="width: 18rem;">
                <img src="{{ asset('upload/proyectos/' . $proyecto->image) }} " class="card-img-top" alt="imagen">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title mx-auto my-2 pb-1"> {{ $proyecto->titulo }} </h5>
                    <p class="">{{ $proyecto->link }} </p>
                    <p class="text-center">{{ $proyecto->logo }} </p>
                    <p class="text-center">{{ $proyecto->tec }} </p>

                    <form method="POST" action="{{ route('proyectos.destroy', $proyecto->id) }}"
                        class='d-flex justify-content-around align-items-center enviarFormulario'>
                        @csrf @method('DELETE')
                        <a href="/proyectos/{{ $proyecto->id }}/edit" class="btn btn-primary">Editar</a>
                        <x-adminlte-button class="btn-md btnBorrar" type="submit" label="" theme="outline-danger"
                            icon="fas fa-xs fa-trash" />
                    </form>
                </div>
            </div>
            {{-- Fin de card --}}
        @endforeach

    </div>


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
