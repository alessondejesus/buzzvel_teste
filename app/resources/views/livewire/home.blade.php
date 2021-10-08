<div>
    <section class="mt-7 py-0">
        <div class="bg-holder w-50 bg-right d-none d-lg-block"
             style="background-image:url({{ asset('assets/img/gallery/hero-section-1.png') }});">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 py-5 py-xl-5 py-xxl-7">
                    <h1 class="display-3 text-1000 fw-normal">Let’s make a tour</h1>
                    <h1 class="display-3 text-primary fw-bold">Discover the beauty</h1>
                    <div class="pt-5">
                        <nav>
                            <div class="nav nav-tabs voyage-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-home"
                                        type="button" role="tab" aria-controls="nav-home" aria-selected="true"><i
                                        class="fas fa-map-marker-alt"></i></button>
                            </div>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                     aria-labelledby="nav-home-tab">
                                    <form class="row g-4 mt-5" wire:submit.prevent="submit">
                                        <div class="col-md-5 col-12">
                                            <div class="input-group-icon">
                                                <label class="form-label visually-hidden" for="inputAddress1">Address
                                                    1</label>
                                                <input class="form-control input-box form-voyage-control"
                                                       id="inputAddress1" type="text"
                                                       placeholder="Latitude" wire:model="latitude"/>
                                                @error('latitude') <span class="error text-danger">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-5 col-12">
                                            <div class="input-group-icon">
                                                <label class="form-label visually-hidden" for="inputAddress1">Address
                                                    1</label>
                                                <input class="form-control input-box form-voyage-control"
                                                       id="inputAddress1" type="text" wire:model="longitude"
                                                       placeholder="Longitude"/>
                                                    @error('longitude') <span class="error text-danger">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-10 col-lg-12 d-grid mt-6">
                                            <button class="btn btn-secondary" type="submit">Search Packages</button>
                                            <div class="pt-3">
                                                @include('layouts.components.flash-message')
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('livewire.components.hero')

    <livewire:home.components.hotel-list/>
</div>
