<section id="servicios" class="servicios">
    <div class="container ">
        <div class="section-title">
            <h2>Servicios</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="bg-gradient p-5">
            <div class="row m-auto text-center">
                @foreach ($precios as $precio)
                    <div class="col col-md-4 princing-item {{ $precio->bg_color }}">
                        <div class="pricing-divider ">
                            <h3 class="text-light">{{ $precio->titulo }} </h3>
                            <h4 class="my-0 display-2 text-light font-weight-normal mb-3"> <span class="h5">desde
                                </span><span class="h3">$</span>{{ $precio->precio }}<span class="h5">mil
                                </span>
                            </h4>
                            <svg class='pricing-divider-img'>
                                <path class='deco-layer deco-layer--1'
                                    d='M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729
        c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z'
                                    fill='#FFFFFF' opacity='0.6'></path>
                                <path class='deco-layer deco-layer--2'
                                    d='M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729
        c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z'
                                    fill='#FFFFFF' opacity='0.6'></path>
                                <path class='deco-layer deco-layer--3'
                                    d='M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716
        H42.401L43.415,98.342z'
                                    fill='#FFFFFF' opacity='0.7'></path>
                                <path class='deco-layer deco-layer--4'
                                    d='M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
        c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z'
                                    fill='#FFFFFF'></path>
                            </svg>
                        </div>
                        <div class="card-body bg-white mt-0 shadow ">
                            <ul class="list-unstyled mb-5 position-relative">
                                <li>Dominio <b> {{ $precio->dominio === 1 ? 'Si' : 'No' }} </b> </li>
                                <li>Hosting <b> {{ $precio->hosting === 1 ? 'Si' : 'No' }} </b>
                                <li>Almacenamiento <b>{{ $precio->almacenamiento }} </b></li>
                                <li><b>{{ $precio->libre }}</b></li>
                            </ul>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>



    </div>


</section>
