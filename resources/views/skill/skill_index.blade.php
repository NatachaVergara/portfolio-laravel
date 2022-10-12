@extends('adminlte::page')

@section('title', 'Skills')

@section('content_header')
    <h1>SKILLS</h1>
@stop

@section('content')
    <form method="POST" action="/skills" enctype="multipart/form-data"
        class='d-flex flex-column justify-content-betweent align-items-center'>
        @csrf

        <div class="mb-3">
            <label for="skill_imagen" class="form-label">Elija una imagen</label>
            <input class="form-control pb-3" type="file" id="skill_imagen" name="skill_imagen">
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-success">Agregar</button>
            <a href="/skills" class="btn btn-danger">Cancelar</a>
        </div>
    </form>

    <div class="container row">
        @foreach ($skills as $skill)
            <div class="card col-1 mx-1" style="width: 14rem;">
                <img src="{{ asset('upload/skills/' . $skill->path) }} " class="img-fluid my-3 mx-auto" style="width: 2rem;"
                    alt="...">
                <form method="POST" action="{{ route('skills.destroy', $skill->id) }}"
                    class='d-flex justify-content-around align-items-center enviarFormulario'>
                    @csrf
                    @method('DELETE')
                    <x-adminlte-button class="btn-md mb-2 " type="submit" theme="outline-danger"
                        icon="fas fa-xs fa-trash" />
                </form>

            </div>
        @endforeach
    </div>
    </div>



    @include('sweetalert::alert')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
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
