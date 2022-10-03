@foreach ($precios as $precio)
    <div class="card col-12 col-md-3  m-1 mb-4 rounded-3 shadow-lg">
        <div class="card-header">
            {{ strtoupper($precio->titulo) }}
        </div>
        <div class="card-body">
            <h2 class='card-title'>
                <small class='text-muted fw-light fs-6'>Desde</small>
                ${{ $precio->precio }} mill
            </h2>
            <p class="card-text">{{ $precio->dominio === 1 ? 'Si' : 'No' }}</p>
            <p class="card-text">{{ $precio->hosting === 1 ? 'Si' : 'No' }}</p>
            <p class="card-text">{{ $precio->almacenamiento }}</p>
            <p class="card-text">{{ $precio->telefono }}</p>

            <form method="post" action="{{ route('precios.destroy', $precio->id) }}" class='enviarFormulario'>
                @csrf
                @method('DELETE')
                <a href="/precios/{{ $precio->id }}/edit" class="btn btn-warning">Editar</a>
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
    </div>
@endforeach

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
