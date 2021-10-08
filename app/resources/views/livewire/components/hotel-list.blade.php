<section id="testimonial">
    <span wire:loading>
        <x-loading/>
    </span>
    @if($hotels)
        <div class="container">
            <div class="row h-100">


                <div class="col-12 mx-auto text-center mb-6">
                    <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3">Flash Deals</h5>
                </div>

                <div class="col-12 mb-4">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Ordenar por:</label>
                                <select class="form-control" id="exampleFormControlSelect1" wire:model="sortBy">
                                    <option value="distance">Distancia</option>
                                    <option value="price">2</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Ordem:</label>
                                <select class="form-control" id="exampleFormControlSelect1" wire:model="sortBy">
                                    <option value="distance">Crescente</option>
                                    <option value="price">Decrescente</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                @foreach($hotels as $hotel)
                    <div class="col-md-4 mb-3 mb-md-0 h-100">
                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100"
                                                                          src="{{ asset('assets/img/gallery/maldives.png') }}"
                                                                          alt="..."/>
                            <div class="card-img-overlay ps-0"><span
                                    class="badge bg-secondary p-2"><i
                                        class="fas fa-bolt me-1"></i><span>trending</span><i
                                        class="fas fa-bolt ms-1"> </i></span></div>
                            <div class="card-body ps-0">
                                <h5 class="fw-bold text-1000 mb-4 text-truncate">{{ $hotel[0] }}</h5>
                                <div class="d-flex align-items-center justify-content-start"><span
                                        class="text-800 fs--1 me-2"></span><span
                                        class="text-800 fs--1 me-2"><i
                                            class="fas fa-map-marker-alt"></i></span><span class="text-900">{{ $hotel['distance'] }} milles</span>
                                </div>
                                <h1 class="mb-3 text-primary fw-bolder fs-4"><span>$ {{ $hotel['price'] }} </span><span
                                        class="text-900 fs--1 fw-normal">/Per night</span></h1>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
</section>
