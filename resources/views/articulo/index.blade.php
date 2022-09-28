@extends('adminlte::page')

@section('title', 'CRUD con Laravel 8')

@section('content_header')
    <h1>Listado de artículos</h1>
@stop

@section('content')
    <a href='articulos/create' class='btn btn-primary my-3'>CREAR</a>

    <table id='articulos' class="table table-striped shadow-lg mt-5" style="width:100%">
        <thead class='bg-primary text-white'>
            <tr>
                <th scope='col'>ID</th>
                <th scope='col'>Código</th>
                <th scope='col'>Descripción</th>
                <th scope='col'>Cantidad</th>
                <th scope='col'>Precio</th>
                <th scope='col'>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articulos as $articulo)
                <tr>
                    <td>{{ $articulo->id }}</td>
                    <td>{{ $articulo->codigo }}</td>
                    <td>{{ $articulo->descripcion }}</td>
                    <td>{{ $articulo->cantidad }}</td>
                    <td>{{ $articulo->precio }}</td>
                    <td>

                        <form method="post" action="{{ route('articulos.destroy', $articulo->id) }} " class="btn-group"
                            role="group" aria-label="Basic example">
                            <a type="button" class="btn btn-info" href='/articulos/{{ $articulo->id }}/edit'>Edit</a>

                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger ">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="/css/admin_custom.css"/>
@stop

@section('js')
    <script src='https://code.jquery.com/jquery-3.5.1.js'></script>
    <script src='https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js'></script>
    <script src='https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js'></script>
    <script>
        $(document).ready(function() {
            $('#articulos').DataTable({
                "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ]
            });
        });
    </script>
@stop
