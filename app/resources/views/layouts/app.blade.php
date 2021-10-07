<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>voyage | Landing, Corporate &amp; Business Templatee</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicons/favicon-16x16.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicons/favicon.ico') }}">
    <link rel="manifest" href="{{ asset('assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="{{ asset('assets/css/theme.css') }}" rel="stylesheet"/>

    <livewire:styles/>
</head>


<body>

<!-- ===============================================-->
<!--    Main Content-->
<!-- ===============================================-->
<main class="main" id="top">
    @include('layouts.components.nav')
    <section class="mt-7 py-0">
        <div class="bg-holder w-50 bg-right d-none d-lg-block"
             style="background-image:url({{ asset('assets/img/gallery/hero-section-1.png') }});">
        </div>
        <!--/.bg-holder-->

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
                                    <form class="row g-4 mt-5">
                                        <div class="col-sm-6 col-md-6 col-xl-5">
                                            <div class="input-group-icon">
                                                <label class="form-label visually-hidden" for="inputAddress1">Address
                                                    1</label>
                                                <input class="form-control input-box form-voyage-control"
                                                       id="inputAddress1" type="text"
                                                       placeholder="From where"/><span
                                                    class="nav-link-icon text-800 fs--1 input-box-icon"><i
                                                        class="fas fa-map-marker-alt"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-xl-5">
                                            <div class="input-group-icon">
                                                <label class="form-label visually-hidden" for="inputAddress2">Address
                                                    2</label>
                                                <input class="form-control input-box form-voyage-control"
                                                       id="inputAddress2" type="text"
                                                       placeholder="To where"/><span
                                                    class="nav-link-icon text-800 fs--1 input-box-icon"><i
                                                        class="fas fa-map-marker-alt"> </i></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-xl-5">
                                            <div class="input-group-icon">
                                                <input class="form-control input-box form-voyage-control"
                                                       id="inputdateOne"
                                                       type="date"/><span
                                                    class="nav-link-icon text-800 fs--1 input-box-icon"><i
                                                        class="fas fa-calendar"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-xl-5">
                                            <div class="input-group-icon">
                                                <input class="form-control input-box form-voyage-control"
                                                       id="inputDateTwo"
                                                       type="date"/><span
                                                    class="nav-link-icon text-800 fs--1 input-box-icon"><i
                                                        class="fas fa-calendar"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-xl-5">
                                            <div class="input-group-icon">
                                                <label class="form-label visually-hidden"
                                                       for="inputPersonOne">Person</label>
                                                <select class="form-select form-voyage-select input-box"
                                                        id="inputPersonOne">
                                                    <option selected="selected">2 Adults</option>
                                                    <option>2 Adults 1 children</option>
                                                    <option>2 Adults 2 children</option>
                                                </select><span class="nav-link-icon text-800 fs--1 input-box-icon"><i
                                                        class="fas fa-user">
                            </i></span>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-10 col-lg-12 d-grid mt-6">
                                            <button class="btn btn-secondary" type="submit">Search Packages</button>
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


    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="py-0 overflow-hidden">

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 px-0"><img class="img-fluid order-md-0 mb-4 h-100 fit-cover"
                                                src="{{ asset('assets/img/gallery/hero-section-2.png') }}" alt="..."/>
                </div>
                <div class="col-lg-6 px-0 bg-primary-gradient bg-offcanvas-right">
                    <div class="mx-6 mx-xl-8 my-8">
                        <div class="align-items-center d-block d-flex mb-5"><img class="img-fluid me-3 me-md-2 me-lg-4"
                                                                                 src="{{ asset('assets/img/icons/locations.png') }}"
                                                                                 alt="..."/>
                            <div class="flex-1 align-items-center pt-2">
                                <h5 class="fw-bold text-light">Visit the greatest places</h5>
                            </div>
                        </div>
                        <div class="align-items-center d-block d-flex mb-5"><img class="img-fluid me-3 me-md-2 me-lg-4"
                                                                                 src="{{ asset('assets/img/icons/schedule.png') }}"
                                                                                 alt="..."/>
                            <div class="flex-1 align-items-center pt-2">
                                <h5 class="fw-bold text-light">Make your own plans.</h5>
                            </div>
                        </div>
                        <div class="align-items-center d-block d-flex mb-5"><img class="img-fluid me-3 me-md-2 me-lg-4"
                                                                                 src="{{ asset('assets/img/icons/save.png') }}"
                                                                                 alt="..."/>
                            <div class="flex-1 align-items-center pt-2">
                                <h5 class="fw-bold text-light">Save 50% on your next trip</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section id="testimonial">
        <div class="container">
            <div class="row h-100">
                <div class="col-lg-7 mx-auto text-center mb-6">
                    <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3">Flash Deals</h5>
                </div>
                <div class="col-12">
                    <div class="carousel slide" id="carouselTestimonials" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                                <div class="row h-100 align-items-center g-2">
                                    <div class="col-md-4 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100"
                                                                                          src="{{ asset('assets/img/gallery/maldives.png') }}"
                                                                                          alt="..."/>
                                            <div class="card-img-overlay ps-0"><span
                                                    class="badge bg-primary ms-3 me-1 p-2"><i
                                                        class="fas fa-clock me-1"></i><span>20:04:32:21</span></span><span
                                                    class="badge bg-secondary p-2"><i
                                                        class="fas fa-bolt me-1"></i><span>trending</span><i
                                                        class="fas fa-bolt ms-1"> </i></span></div>
                                            <div class="card-body ps-0">
                                                <h5 class="fw-bold text-1000 mb-4 text-truncate">Mermaid Beach Resort:
                                                    The most joyful way to
                                                    spend your holiday</h5>
                                                <div class="d-flex align-items-center justify-content-start"><span
                                                        class="text-800 fs--1 me-2"><i
                                                            class="fas fa-map-marker-alt"></i></span><span
                                                        class="text-900 me-3">Maldives</span><span
                                                        class="text-800 fs--1 me-2"><i
                                                            class="fas fa-calendar"></i></span><span class="text-900">4 days</span>
                                                </div>
                                                <p class="text-decoration-line-through text-900 mt-3 mb-0">$200</p>
                                                <h1 class="mb-3 text-primary fw-bolder fs-4"><span>$175</span><span
                                                        class="text-900 fs--1 fw-normal">/Per person</span></h1><span
                                                    class="badge bg-soft-secondary p-2"><i
                                                        class="fas fa-tag text-secondary fs--1 me-1"></i><span
                                                        class="text-secondary fw-normal fs-1">-15%</span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100"
                                                                                          src="{{ asset('assets/img/gallery/cinnamon.png') }}"
                                                                                          alt="..."/>
                                            <div class="card-img-overlay ps-0"><span
                                                    class="badge bg-primary ms-3 me-1 p-2"><i
                                                        class="fas fa-clock me-1"></i><span>20:04:32:21</span></span><span
                                                    class="badge bg-secondary p-2"><i
                                                        class="fas fa-bolt me-1"></i><span>trending</span><i
                                                        class="fas fa-bolt ms-1"> </i></span></div>
                                            <div class="card-body ps-0">
                                                <h5 class="fw-bold text-1000 mb-4 text-truncate">Bora Bora: Enjoy a
                                                    romantic cruise tour of at
                                                    the sunny side of life</h5>
                                                <div class="d-flex align-items-center justify-content-start"><span
                                                        class="text-800 fs--1 me-2"><i
                                                            class="fas fa-map-marker-alt"></i></span><span
                                                        class="text-900 me-3">Maldives</span><span
                                                        class="text-800 fs--1 me-2"><i
                                                            class="fas fa-calendar"></i></span><span class="text-900">4 days</span>
                                                </div>
                                                <p class="text-decoration-line-through text-900 mt-3 mb-0">$300</p>
                                                <h1 class="mb-3 text-primary fw-bolder fs-4"><span>$250</span><span
                                                        class="text-900 fs--1 fw-normal">/Per person</span></h1><span
                                                    class="badge bg-soft-secondary p-2"><i
                                                        class="fas fa-tag text-secondary fs--1 me-1"></i><span
                                                        class="text-secondary fw-normal fs-1">-15%</span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100"
                                                                                          src="{{ asset('assets/img/gallery/dhigu.png') }}"
                                                                                          alt="..."/>
                                            <div class="card-img-overlay ps-0"><span
                                                    class="badge bg-primary ms-3 me-1 p-2"><i
                                                        class="fas fa-clock me-1"></i><span>20:04:32:21</span></span><span
                                                    class="badge bg-secondary p-2"><i
                                                        class="fas fa-bolt me-1"></i><span>trending</span><i
                                                        class="fas fa-bolt ms-1"> </i></span></div>
                                            <div class="card-body ps-0">
                                                <h5 class="fw-bold text-1000 mb-4 text-truncate">Fihalhohi Island
                                                    Resort: Luxury destination
                                                    without compromise</h5>
                                                <div class="d-flex align-items-center justify-content-start"><span
                                                        class="text-800 fs--1 me-2"><i
                                                            class="fas fa-map-marker-alt"></i></span><span
                                                        class="text-900 me-3">Maldives</span><span
                                                        class="text-800 fs--1 me-2"><i
                                                            class="fas fa-calendar"></i></span><span class="text-900">4 days</span>
                                                </div>
                                                <p class="text-decoration-line-through text-900 mt-3 mb-0">$375</p>
                                                <h1 class="mb-3 text-primary fw-bolder fs-4"><span>$300</span><span
                                                        class="text-900 fs--1 fw-normal">/Per person</span></h1><span
                                                    class="badge bg-soft-secondary p-2"><i
                                                        class="fas fa-tag text-secondary fs--1 me-1"></i><span
                                                        class="text-secondary fw-normal fs-1">-15%</span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="5000">
                                <div class="row h-100 align-items-center g-2">
                                    <div class="col-md-4 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100"
                                                                                          src="{{ asset('assets/img/gallery/maldives.png') }}"
                                                                                          alt="..."/>
                                            <div class="card-img-overlay ps-0"><span
                                                    class="badge bg-primary ms-3 me-1 p-2"><i
                                                        class="fas fa-clock me-1"></i><span>20:04:32:21</span></span><span
                                                    class="badge bg-secondary p-2"><i
                                                        class="fas fa-bolt me-1"></i><span>trending</span><i
                                                        class="fas fa-bolt ms-1"> </i></span></div>
                                            <div class="card-body ps-0">
                                                <h5 class="fw-bold text-1000 mb-4 text-truncate">Mermaid Beach Resort:
                                                    The most joyful way to
                                                    spend your holiday</h5>
                                                <div class="d-flex align-items-center justify-content-start"><span
                                                        class="text-800 fs--1 me-2"><i
                                                            class="fas fa-map-marker-alt"></i></span><span
                                                        class="text-900 me-3">Maldives</span><span
                                                        class="text-800 fs--1 me-2"><i
                                                            class="fas fa-calendar"></i></span><span class="text-900">4 days</span>
                                                </div>
                                                <p class="text-decoration-line-through text-900 mt-3 mb-0">$200</p>
                                                <h1 class="mb-3 text-primary fw-bolder fs-4"><span>$175</span><span
                                                        class="text-900 fs--1 fw-normal">/Per person</span></h1><span
                                                    class="badge bg-soft-secondary p-2"><i
                                                        class="fas fa-tag text-secondary fs--1 me-1"></i><span
                                                        class="text-secondary fw-normal fs-1">-15%</span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100"
                                                                                          src="{{ asset('assets/img/gallery/cinnamon.png') }}"
                                                                                          alt="..."/>
                                            <div class="card-img-overlay ps-0"><span
                                                    class="badge bg-primary ms-3 me-1 p-2"><i
                                                        class="fas fa-clock me-1"></i><span>20:04:32:21</span></span><span
                                                    class="badge bg-secondary p-2"><i
                                                        class="fas fa-bolt me-1"></i><span>trending</span><i
                                                        class="fas fa-bolt ms-1"> </i></span></div>
                                            <div class="card-body ps-0">
                                                <h5 class="fw-bold text-1000 mb-4 text-truncate">Bora Bora: Enjoy a
                                                    romantic cruise tour of at
                                                    the sunny side of life</h5>
                                                <div class="d-flex align-items-center justify-content-start"><span
                                                        class="text-800 fs--1 me-2"><i
                                                            class="fas fa-map-marker-alt"></i></span><span
                                                        class="text-900 me-3">Maldives</span><span
                                                        class="text-800 fs--1 me-2"><i
                                                            class="fas fa-calendar"></i></span><span class="text-900">4 days</span>
                                                </div>
                                                <p class="text-decoration-line-through text-900 mt-3 mb-0">$300</p>
                                                <h1 class="mb-3 text-primary fw-bolder fs-4"><span>$250</span><span
                                                        class="text-900 fs--1 fw-normal">/Per person</span></h1><span
                                                    class="badge bg-soft-secondary p-2"><i
                                                        class="fas fa-tag text-secondary fs--1 me-1"></i><span
                                                        class="text-secondary fw-normal fs-1">-15%</span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100"
                                                                                          src="{{ asset('assets/img/gallery/dhigu.png') }}"
                                                                                          alt="..."/>
                                            <div class="card-img-overlay ps-0"><span
                                                    class="badge bg-primary ms-3 me-1 p-2"><i
                                                        class="fas fa-clock me-1"></i><span>20:04:32:21</span></span><span
                                                    class="badge bg-secondary p-2"><i
                                                        class="fas fa-bolt me-1"></i><span>trending</span><i
                                                        class="fas fa-bolt ms-1"> </i></span></div>
                                            <div class="card-body ps-0">
                                                <h5 class="fw-bold text-1000 mb-4 text-truncate">Fihalhohi Island
                                                    Resort: Luxury destination
                                                    without compromise</h5>
                                                <div class="d-flex align-items-center justify-content-start"><span
                                                        class="text-800 fs--1 me-2"><i
                                                            class="fas fa-map-marker-alt"></i></span><span
                                                        class="text-900 me-3">Maldives</span><span
                                                        class="text-800 fs--1 me-2"><i
                                                            class="fas fa-calendar"></i></span><span class="text-900">4 days</span>
                                                </div>
                                                <p class="text-decoration-line-through text-900 mt-3 mb-0">$375</p>
                                                <h1 class="mb-3 text-primary fw-bolder fs-4"><span>$300</span><span
                                                        class="text-900 fs--1 fw-normal">/Per person</span></h1><span
                                                    class="badge bg-soft-secondary p-2"><i
                                                        class="fas fa-tag text-secondary fs--1 me-1"></i><span
                                                        class="text-secondary fw-normal fs-1">-15%</span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="3000">
                                <div class="row h-100 align-items-center g-2">
                                    <div class="col-md-4 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100"
                                                                                          src="{{ asset('assets/img/gallery/maldives.png') }}"
                                                                                          alt="..."/>
                                            <div class="card-img-overlay ps-0"><span
                                                    class="badge bg-primary ms-3 me-1 p-2"><i
                                                        class="fas fa-clock me-1"></i><span>20:04:32:21</span></span><span
                                                    class="badge bg-secondary p-2"><i
                                                        class="fas fa-bolt me-1"></i><span>trending</span><i
                                                        class="fas fa-bolt ms-1"> </i></span></div>
                                            <div class="card-body ps-0">
                                                <h5 class="fw-bold text-1000 mb-4 text-truncate">Mermaid Beach Resort:
                                                    The most joyful way to
                                                    spend your holiday</h5>
                                                <div class="d-flex align-items-center justify-content-start"><span
                                                        class="text-800 fs--1 me-2"><i
                                                            class="fas fa-map-marker-alt"></i></span><span
                                                        class="text-900 me-3">Maldives</span><span
                                                        class="text-800 fs--1 me-2"><i
                                                            class="fas fa-calendar"></i></span><span class="text-900">4 days</span>
                                                </div>
                                                <p class="text-decoration-line-through text-900 mt-3 mb-0">$200</p>
                                                <h1 class="mb-3 text-primary fw-bolder fs-4"><span>$175</span><span
                                                        class="text-900 fs--1 fw-normal">/Per person</span></h1><span
                                                    class="badge bg-soft-secondary p-2"><i
                                                        class="fas fa-tag text-secondary fs--1 me-1"></i><span
                                                        class="text-secondary fw-normal fs-1">-15%</span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100"
                                                                                          src="{{ asset('assets/img/gallery/cinnamon.png') }}"
                                                                                          alt="..."/>
                                            <div class="card-img-overlay ps-0"><span
                                                    class="badge bg-primary ms-3 me-1 p-2"><i
                                                        class="fas fa-clock me-1"></i><span>20:04:32:21</span></span><span
                                                    class="badge bg-secondary p-2"><i
                                                        class="fas fa-bolt me-1"></i><span>trending</span><i
                                                        class="fas fa-bolt ms-1"> </i></span></div>
                                            <div class="card-body ps-0">
                                                <h5 class="fw-bold text-1000 mb-4 text-truncate">Bora Bora: Enjoy a
                                                    romantic cruise tour of at
                                                    the sunny side of life</h5>
                                                <div class="d-flex align-items-center justify-content-start"><span
                                                        class="text-800 fs--1 me-2"><i
                                                            class="fas fa-map-marker-alt"></i></span><span
                                                        class="text-900 me-3">Maldives</span><span
                                                        class="text-800 fs--1 me-2"><i
                                                            class="fas fa-calendar"></i></span><span class="text-900">4 days</span>
                                                </div>
                                                <p class="text-decoration-line-through text-900 mt-3 mb-0">$300</p>
                                                <h1 class="mb-3 text-primary fw-bolder fs-4"><span>$250</span><span
                                                        class="text-900 fs--1 fw-normal">/Per person</span></h1><span
                                                    class="badge bg-soft-secondary p-2"><i
                                                        class="fas fa-tag text-secondary fs--1 me-1"></i><span
                                                        class="text-secondary fw-normal fs-1">-15%</span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100"
                                                                                          src="{{ asset('assets/img/gallery/dhigu.png') }}"
                                                                                          alt="..."/>
                                            <div class="card-img-overlay ps-0"><span
                                                    class="badge bg-primary ms-3 me-1 p-2"><i
                                                        class="fas fa-clock me-1"></i><span>20:04:32:21</span></span><span
                                                    class="badge bg-secondary p-2"><i
                                                        class="fas fa-bolt me-1"></i><span>trending</span><i
                                                        class="fas fa-bolt ms-1"> </i></span></div>
                                            <div class="card-body ps-0">
                                                <h5 class="fw-bold text-1000 mb-4 text-truncate">Fihalhohi Island
                                                    Resort: Luxury destination
                                                    without compromise</h5>
                                                <div class="d-flex align-items-center justify-content-start"><span
                                                        class="text-800 fs--1 me-2"><i
                                                            class="fas fa-map-marker-alt"></i></span><span
                                                        class="text-900 me-3">Maldives</span><span
                                                        class="text-800 fs--1 me-2"><i
                                                            class="fas fa-calendar"></i></span><span class="text-900">4 days</span>
                                                </div>
                                                <p class="text-decoration-line-through text-900 mt-3 mb-0">$375</p>
                                                <h1 class="mb-3 text-primary fw-bolder fs-4"><span>$300</span><span
                                                        class="text-900 fs--1 fw-normal">/Per person</span></h1><span
                                                    class="badge bg-soft-secondary p-2"><i
                                                        class="fas fa-tag text-secondary fs--1 me-1"></i><span
                                                        class="text-secondary fw-normal fs-1">-15%</span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row h-100 align-items-center g-2">
                                    <div class="col-md-4 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100"
                                                                                          src="{{ asset('assets/img/gallery/maldives.png') }}"
                                                                                          alt="..."/>
                                            <div class="card-img-overlay ps-0"><span
                                                    class="badge bg-primary ms-3 me-1 p-2"><i
                                                        class="fas fa-clock me-1"></i><span>20:04:32:21</span></span><span
                                                    class="badge bg-secondary p-2"><i
                                                        class="fas fa-bolt me-1"></i><span>trending</span><i
                                                        class="fas fa-bolt ms-1"> </i></span></div>
                                            <div class="card-body ps-0">
                                                <h5 class="fw-bold text-1000 mb-4 text-truncate">Mermaid Beach Resort:
                                                    The most joyful way to
                                                    spend your holiday</h5>
                                                <div class="d-flex align-items-center justify-content-start"><span
                                                        class="text-800 fs--1 me-2"><i
                                                            class="fas fa-map-marker-alt"></i></span><span
                                                        class="text-900 me-3">Maldives</span><span
                                                        class="text-800 fs--1 me-2"><i
                                                            class="fas fa-calendar"></i></span><span class="text-900">4 days</span>
                                                </div>
                                                <p class="text-decoration-line-through text-900 mt-3 mb-0">$200</p>
                                                <h1 class="mb-3 text-primary fw-bolder fs-4"><span>$175</span><span
                                                        class="text-900 fs--1 fw-normal">/Per person</span></h1><span
                                                    class="badge bg-soft-secondary p-2"><i
                                                        class="fas fa-tag text-secondary fs--1 me-1"></i><span
                                                        class="text-secondary fw-normal fs-1">-15%</span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100"
                                                                                          src="{{ asset('assets/img/gallery/cinnamon.png') }}"
                                                                                          alt="..."/>
                                            <div class="card-img-overlay ps-0"><span
                                                    class="badge bg-primary ms-3 me-1 p-2"><i
                                                        class="fas fa-clock me-1"></i><span>20:04:32:21</span></span><span
                                                    class="badge bg-secondary p-2"><i
                                                        class="fas fa-bolt me-1"></i><span>trending</span><i
                                                        class="fas fa-bolt ms-1"> </i></span></div>
                                            <div class="card-body ps-0">
                                                <h5 class="fw-bold text-1000 mb-4 text-truncate">Bora Bora: Enjoy a
                                                    romantic cruise tour of at
                                                    the sunny side of life</h5>
                                                <div class="d-flex align-items-center justify-content-start"><span
                                                        class="text-800 fs--1 me-2"><i
                                                            class="fas fa-map-marker-alt"></i></span><span
                                                        class="text-900 me-3">Maldives</span><span
                                                        class="text-800 fs--1 me-2"><i
                                                            class="fas fa-calendar"></i></span><span class="text-900">4 days</span>
                                                </div>
                                                <p class="text-decoration-line-through text-900 mt-3 mb-0">$300</p>
                                                <h1 class="mb-3 text-primary fw-bolder fs-4"><span>$250</span><span
                                                        class="text-900 fs--1 fw-normal">/Per person</span></h1><span
                                                    class="badge bg-soft-secondary p-2"><i
                                                        class="fas fa-tag text-secondary fs--1 me-1"></i><span
                                                        class="text-secondary fw-normal fs-1">-15%</span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3 mb-md-0 h-100">
                                        <div class="card card-span h-100 text-white"><img class="img-fluid h-100"
                                                                                          src="{{ asset('assets/img/gallery/dhigu.png') }}"
                                                                                          alt="..."/>
                                            <div class="card-img-overlay ps-0"><span
                                                    class="badge bg-primary ms-3 me-1 p-2"><i
                                                        class="fas fa-clock me-1"></i><span>20:04:32:21</span></span><span
                                                    class="badge bg-secondary p-2"><i
                                                        class="fas fa-bolt me-1"></i><span>trending</span><i
                                                        class="fas fa-bolt ms-1"> </i></span></div>
                                            <div class="card-body ps-0">
                                                <h5 class="fw-bold text-1000 mb-4 text-truncate">Fihalhohi Island
                                                    Resort: Luxury destination
                                                    without compromise</h5>
                                                <div class="d-flex align-items-center justify-content-start"><span
                                                        class="text-800 fs--1 me-2"><i
                                                            class="fas fa-map-marker-alt"></i></span><span
                                                        class="text-900 me-3">Maldives</span><span
                                                        class="text-800 fs--1 me-2"><i
                                                            class="fas fa-calendar"></i></span><span class="text-900">4 days</span>
                                                </div>
                                                <p class="text-decoration-line-through text-900 mt-3 mb-0">$375</p>
                                                <h1 class="mb-3 text-primary fw-bolder fs-4"><span>$300</span><span
                                                        class="text-900 fs--1 fw-normal">/Per person</span></h1><span
                                                    class="badge bg-soft-secondary p-2"><i
                                                        class="fas fa-tag text-secondary fs--1 me-1"></i><span
                                                        class="text-secondary fw-normal fs-1">-15%</span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carouselTestimonials"
                                        data-bs-slide="prev"><span class="carousel-control-prev-icon"
                                                                   aria-hidden="true"></span><span
                                        class="visually-hidden">Previous</span></button>
                                <button class="carousel-control-next" type="button"
                                        data-bs-target="#carouselTestimonials"
                                        data-bs-slide="next"><span class="carousel-control-next-icon"
                                                                   aria-hidden="true"></span><span
                                        class="visually-hidden">Next </span></button>
                            </div>
                        </div>
                        <div class="row flex-center">
                            <div class="col-auto position-relative z-index-2">
                                <ol class="carousel-indicators me-xxl-7 me-xl-4 me-lg-7">
                                    <li class="active" data-bs-target="#carouselTestimonials" data-bs-slide-to="0"></li>
                                    <li data-bs-target="#carouselTestimonials" data-bs-slide-to="1"></li>
                                    <li data-bs-target="#carouselTestimonials" data-bs-slide-to="2"></li>
                                    <li data-bs-target="#carouselTestimonials" data-bs-slide-to="3"></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{ $slot }}

    @include('layouts.components.footer')

</main>

<script src="{{ asset('vendors/@popperjs/popper.min.js') }}"></script>
<script src="{{ asset('vendors/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ asset('vendors/is/is.min.js') }}"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
<script src="{{ asset('vendors/fontawesome/all.min.js') }}"></script>
<script src="{{ asset('assets/js/theme.js') }}"></script>

<link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300;400;600;700&amp;display=swap"
      rel="stylesheet">
<livewire:scripts/>
</body>

</html>
