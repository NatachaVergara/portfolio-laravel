<section id="servicios" class="servicios">
    <div class="container">
        <div class="section-title">
            <h2>Servicios</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>
        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center mx-0 ">
            @foreach ($precios as $precio)
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">{{ $precio->titulo }} </h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title"><small
                                    class="text-muted fw-light fs-6">desde</small> ${{ $precio->precio }}<small
                                    class="text-muted fw-light fs-6"> mil</small>
                            </h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>Dominio:{{ $precio->dominio === 1 ? 'SI' : 'NO' }} </li>
                                <li>Hosting:{{ $precio->hosting === 1 ? 'SI' : 'NO' }} </li>
                                <li>Almacenamiento: {{ $precio->almacenamiento }}</li>
                                <li>{{ $precio->libre }} </li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


</section>
