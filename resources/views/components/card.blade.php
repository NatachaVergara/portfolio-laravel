<div class="card col-12 col-md-4 col-lg-3 m-1 mb-4 rounded-3 shadow-lg">
    <div class="card-header">
        {{ strtoupper($titulo) }}
    </div>
    <div class="card-body">
        <h2 class='card-title'>
            <small class='text-muted fw-light fs-6'>Desde</small>
            ${{ $precio }} mill
        </h2>
        <p class="card-text">{{ $dominio }}</p>
        <p class="card-text">{{ $hosting }}</p>
        <p class="card-text">{{ $almacenamiento }}</p>
        <p class="card-text">{{ $telefono }}</p>

        <form method="post">
            @csrf
            @method('DELETE')
            <a href="#" class="btn btn-warning">Editar</a>
            <button type="submit" class="btn btn-danger">Borrar</button>
        </form>
    </div>
</div>
