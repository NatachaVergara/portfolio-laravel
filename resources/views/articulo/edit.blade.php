@extends('adminlte::page')

@section('title', 'CRUD con Laravel 8')

@section('content')
    <h2>Editar Registro</h2>

    <form method="POST" action="/articulos/{{ $articulo->id }}" class='d-flex  flex-column  align-items-center'>
        @csrf
        @method('PUT')
        <div class='d-flex flex-column justify-content-around align-items-center'>
            <div class="mb-3 ">
                <label for="codigo" class="form-label">Código</label>
                <input type="text" name='codigo' value={{ $articulo->codigo }} id="codigo" class="form-control w-100"
                    required>
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <input type="text" name='descripcion' value={{ $articulo->descripcion }} id="descripcion"
                    class="form-control w-100" required>
            </div>
            <div class="mb-3">
                <label for="cantidad" class="form-label">Cantidad</label>
                <input type="text" name='cantidad' value={{ $articulo->cantidad }} id="cantidad"
                    class="form-control w-100" required>
            </div>
            <div class="mb-3">
                <label for="precio" class="form-label">Precio</label>
                <input type="number" name='precio' value={{ $articulo->precio }} id="precio" class="form-control w-100"
                    required>
            </div>
        </div>

        <div>

            <a href="/articulos" class='btn btn-outline btn-warning'>Cancelar</a>
            <button type="submit" class='btn btn-outline btn-success'>Guardar</button>

        </div>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop
