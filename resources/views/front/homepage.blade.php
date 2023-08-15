@extends('front.layouts.master')

@section('content')
    <section>
        <div
            class="cover-img"
            style="background-image: url('{{asset('front/assets/img/cover-img.jpg')}}')">
            <div class="container">
                <div class="cover-description">
                    <h1>Bakıda avtomobil icarəsi</h1>
                    <p>
                        Sürücüsüz və sürücü ilə olan icarəyə avtomobillər
                        təklif edir
                    </p>
                </div>

            </div>
        </div>
    </section>

    <div class="container driver-status">
        <div class="d-flex justify-content-center mt-5">
            <ul class="nav nav-tabs m-auto" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="tab1-tab" data-bs-toggle="tab" href="#tab1" role="tab"
                       aria-controls="tab1" aria-selected="true">Sürücüsüz</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="tab2-tab" data-bs-toggle="tab" href="#tab2" role="tab" aria-controls="tab2"
                       aria-selected="false">Sürücü ilə</a>
                </li>
            </ul>
        </div>
        <hr class="mt-0">

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                <!-- Button trigger modal -->
                <div class="row mb-3">
                    <div class="col-lg-4">
                        <div class="card car-modal-btn ps-3 pe-3 mb-3 mb-lg-0" data-bs-toggle="modal"
                             data-bs-target="#exampleModal">
                            <div class="card-body pb-0">
                                <div class="d-flex align-items-center">
                                    <div class="car-logo-box">
                                        <img src="{{asset('/front/assets/img/hundai_logo.png')}}">
                                    </div>
                                    <div class="car-name">Elantra</div>
                                </div>
                                <div class="car-image-box">
                                    <img src="{{asset('/front/assets/img/hundai_elantra.jpg')}}">
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <ul class="text-secondary">
                                            <li>
                                                <div class="d-inline-flex align-items-center mb-2">
                                                    <img src="{{asset('/front/assets/img/calendar_icon.png')}}"><span
                                                        class="ms-1">2015</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-inline-flex align-items-center mb-2">
                                                    <img src="{{asset('/front/assets/img/doors_icon.png')}}"><span
                                                        class="ms-1">5</span>
                                                </div>

                                            </li>
                                            <li>
                                                <div class="d-inline-flex align-items-center mb-2">
                                                    <img src="{{asset('/front/assets/img/gear_icon.png')}}"><span
                                                        class="ms-1">Avtomat</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-inline-flex align-items-center mb-2">
                                                    <img src="{{asset('/front/assets/img/freezer_icon.png')}}"><span
                                                        class="ms-1">Kondisioner</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-6">
                                        <ul class="text-secondary">
                                            <li>
                                                <div class="d-inline-flex align-items-center mb-2">
                                                    <img src="{{asset('/front/assets/img/engine2_icon.png')}}"><span
                                                        class="ms-1">160 a.g.</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-inline-flex align-items-center mb-2">
                                                    <img src="{{asset('/front/assets/img/man-user_icon.png')}}"><span
                                                        class="ms-1">5</span>
                                                </div>

                                            </li>
                                            <li>
                                                <div class="d-inline-flex align-items-center mb-2">
                                                    <img src="{{asset('/front/assets/img/baggage_icon.png')}}"><span
                                                        class="ms-1">1</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-inline-flex align-items-center mb-2">
                                                    <img src="{{asset('/front/assets/img/car_seat_icon.png')}}"><span
                                                        class="ms-1">Parça</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <hr class="mt-0 mb-0">
                            <div>
                                <div class="d-flex p-3">
                                    <div class="col-6">
                                        <div class="d-flex align-items-start"><span
                                                class="car-price-value me-1">60.00</span> <span
                                                class="car-price-symbol"> ₼</span></div>
                                    </div>
                                    <div class="col-6">
                                        <button class="btn-bron">İNDİ BRON EDİN</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card car-modal-btn ps-3 pe-3 mb-3 mb-lg-0" data-bs-toggle="modal"
                             data-bs-target="#exampleModal">
                            <div class="card-body pb-0">
                                <div class="d-flex align-items-center">
                                    <div class="car-logo-box">
                                        <img src="{{asset('/front/assets/img/hundai_logo.png')}}">
                                    </div>
                                    <div class="car-name">Elantra</div>
                                </div>
                                <div class="car-image-box">
                                    <img src="{{asset('/front/assets/img/hundai_elantra.jpg')}}">
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <ul class="text-secondary">
                                            <li>
                                                <div class="d-inline-flex align-items-center mb-2">
                                                    <img src="{{asset('/front/assets/img/calendar_icon.png')}}"><span
                                                        class="ms-1">2015</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-inline-flex align-items-center mb-2">
                                                    <img src="{{asset('/front/assets/img/doors_icon.png')}}"><span
                                                        class="ms-1">5</span>
                                                </div>

                                            </li>
                                            <li>
                                                <div class="d-inline-flex align-items-center mb-2">
                                                    <img src="{{asset('/front/assets/img/gear_icon.png')}}"><span
                                                        class="ms-1">Avtomat</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-inline-flex align-items-center mb-2">
                                                    <img src="{{asset('/front/assets/img/freezer_icon.png')}}"><span
                                                        class="ms-1">Kondisioner</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-6">
                                        <ul class="text-secondary">
                                            <li>
                                                <div class="d-inline-flex align-items-center mb-2">
                                                    <img src="{{asset('/front/assets/img/engine2_icon.png')}}"><span
                                                        class="ms-1">160 a.g.</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-inline-flex align-items-center mb-2">
                                                    <img src="{{asset('/front/assets/img/man-user_icon.png')}}"><span
                                                        class="ms-1">5</span>
                                                </div>

                                            </li>
                                            <li>
                                                <div class="d-inline-flex align-items-center mb-2">
                                                    <img src="{{asset('/front/assets/img/baggage_icon.png')}}"><span
                                                        class="ms-1">1</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-inline-flex align-items-center mb-2">
                                                    <img src="{{asset('/front/assets/img/car_seat_icon.png')}}"><span
                                                        class="ms-1">Parça</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <hr class="mt-0 mb-0">
                            <div>
                                <div class="d-flex p-3">
                                    <div class="col-6">
                                        <div class="d-flex align-items-start"><span
                                                class="car-price-value me-1">60.00</span> <span
                                                class="car-price-symbol"> ₼</span></div>
                                    </div>
                                    <div class="col-6">
                                        <button class="btn-bron">İNDİ BRON EDİN</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card car-modal-btn ps-3 pe-3 mb-3 mb-lg-0" data-bs-toggle="modal"
                             data-bs-target="#exampleModal">
                            <div class="card-body pb-0">
                                <div class="d-flex align-items-center">
                                    <div class="car-logo-box">
                                        <img src="{{asset('/front/assets/img/hundai_logo.png')}}">
                                    </div>
                                    <div class="car-name">Elantra</div>
                                </div>
                                <div class="car-image-box">
                                    <img src="{{asset('/front/assets/img/hundai_elantra.jpg')}}">
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <ul class="text-secondary">
                                            <li>
                                                <div class="d-inline-flex align-items-center mb-2">
                                                    <img src="{{asset('/front/assets/img/calendar_icon.png')}}"><span
                                                        class="ms-1">2015</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-inline-flex align-items-center mb-2">
                                                    <img src="{{asset('/front/assets/img/doors_icon.png')}}"><span
                                                        class="ms-1">5</span>
                                                </div>

                                            </li>
                                            <li>
                                                <div class="d-inline-flex align-items-center mb-2">
                                                    <img src="{{asset('/front/assets/img/gear_icon.png')}}"><span
                                                        class="ms-1">Avtomat</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-inline-flex align-items-center mb-2">
                                                    <img src="{{asset('/front/assets/img/freezer_icon.png')}}"><span
                                                        class="ms-1">Kondisioner</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-6">
                                        <ul class="text-secondary">
                                            <li>
                                                <div class="d-inline-flex align-items-center mb-2">
                                                    <img src="{{asset('/front/assets/img/engine2_icon.png')}}"><span
                                                        class="ms-1">160 a.g.</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-inline-flex align-items-center mb-2">
                                                    <img src="{{asset('/front/assets/img/man-user_icon.png')}}"><span
                                                        class="ms-1">5</span>
                                                </div>

                                            </li>
                                            <li>
                                                <div class="d-inline-flex align-items-center mb-2">
                                                    <img src="{{asset('/front/assets/img/baggage_icon.png')}}"><span
                                                        class="ms-1">1</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-inline-flex align-items-center mb-2">
                                                    <img src="{{asset('/front/assets/img/car_seat_icon.png')}}"><span
                                                        class="ms-1">Parça</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <hr class="mt-0 mb-0">
                            <div>
                                <div class="d-flex p-3">
                                    <div class="col-6">
                                        <div class="d-flex align-items-start"><span
                                                class="car-price-value me-1">60.00</span> <span
                                                class="car-price-symbol"> ₼</span></div>
                                    </div>
                                    <div class="col-6">
                                        <button class="btn-bron">İNDİ BRON EDİN</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                <div class="row mb-3">
                    <div class="col-lg-4">
                        <div class="card car-modal-btn ps-3 pe-3 mb-3 mb-lg-0" data-bs-toggle="modal"
                             data-bs-target="#exampleModal">
                            <div class="card-body pb-0">
                                <div class="d-flex align-items-center">
                                    <div class="car-logo-box">
                                        <img src="{{asset('/front/assets/img/chevrolet_logo.jpg')}}">
                                    </div>
                                    <div class="car-name">Cruze</div>
                                </div>
                                <div class="car-image-box">
                                    <img src="{{asset('/front/assets/img/chevrolet_cruze.jpg')}}">
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <ul class="text-secondary">
                                            <li>
                                                <div class="d-inline-flex align-items-center mb-2">
                                                    <img src="{{asset('/front/assets/img/calendar_icon.png')}}"><span
                                                        class="ms-1">2015</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-inline-flex align-items-center mb-2">
                                                    <img src="{{asset('/front/assets/img/doors_icon.png')}}"><span
                                                        class="ms-1">5</span>
                                                </div>

                                            </li>
                                            <li>
                                                <div class="d-inline-flex align-items-center mb-2">
                                                    <img src="{{asset('/front/assets/img/gear_icon.png')}}"><span
                                                        class="ms-1">Avtomat</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-inline-flex align-items-center mb-2">
                                                    <img src="{{asset('/front/assets/img/freezer_icon.png')}}"><span
                                                        class="ms-1">Kondisioner</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-6">
                                        <ul class="text-secondary">
                                            <li>
                                                <div class="d-inline-flex align-items-center mb-2">
                                                    <img src="{{asset('/front/assets/img/engine2_icon.png')}}"><span
                                                        class="ms-1">160 a.g.</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-inline-flex align-items-center mb-2">
                                                    <img src="{{asset('/front/assets/img/man-user_icon.png')}}"><span
                                                        class="ms-1">5</span>
                                                </div>

                                            </li>
                                            <li>
                                                <div class="d-inline-flex align-items-center mb-2">
                                                    <img src="{{asset('/front/assets/img/baggage_icon.png')}}"><span
                                                        class="ms-1">1</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-inline-flex align-items-center mb-2">
                                                    <img src="{{asset('/front/assets/img/car_seat_icon.png')}}"><span
                                                        class="ms-1">Parça</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <hr class="mt-0 mb-0">
                            <div>
                                <div class="d-flex p-3">
                                    <div class="col-6">
                                        <div class="d-flex align-items-start"><span
                                                class="car-price-value me-1">60.00</span> <span
                                                class="car-price-symbol"> ₼</span></div>
                                    </div>
                                    <div class="col-6">
                                        <button class="btn-bron">İNDİ BRON EDİN</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card car-modal-btn ps-3 pe-3 mb-3 mb-lg-0" data-bs-toggle="modal"
                             data-bs-target="#exampleModal">
                            <div class="card-body pb-0">
                                <div class="d-flex align-items-center">
                                    <div class="car-logo-box">
                                        <img src="{{asset('/front/assets/img/hundai_logo.png')}}">
                                    </div>
                                    <div class="car-name">Elantra</div>
                                </div>
                                <div class="car-image-box">
                                    <img src="{{asset('/front/assets/img/hundai_elantra.jpg')}}">
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <ul class="text-secondary">
                                            <li>
                                                <div class="d-inline-flex align-items-center mb-2">
                                                    <img src="{{asset('/front/assets/img/calendar_icon.png')}}"><span
                                                        class="ms-1">2015</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-inline-flex align-items-center mb-2">
                                                    <img src="{{asset('/front/assets/img/doors_icon.png')}}"><span
                                                        class="ms-1">5</span>
                                                </div>

                                            </li>
                                            <li>
                                                <div class="d-inline-flex align-items-center mb-2">
                                                    <img src="{{asset('/front/assets/img/gear_icon.png')}}"><span
                                                        class="ms-1">Avtomat</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-inline-flex align-items-center mb-2">
                                                    <img src="{{asset('/front/assets/img/freezer_icon.png')}}"><span
                                                        class="ms-1">Kondisioner</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-6">
                                        <ul class="text-secondary">
                                            <li>
                                                <div class="d-inline-flex align-items-center mb-2">
                                                    <img src="{{asset('/front/assets/img/engine2_icon.png')}}"><span
                                                        class="ms-1">160 a.g.</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-inline-flex align-items-center mb-2">
                                                    <img src="{{asset('/front/assets/img/man-user_icon.png')}}"><span
                                                        class="ms-1">5</span>
                                                </div>

                                            </li>
                                            <li>
                                                <div class="d-inline-flex align-items-center mb-2">
                                                    <img src="{{asset('/front/assets/img/baggage_icon.png')}}"><span
                                                        class="ms-1">1</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-inline-flex align-items-center mb-2">
                                                    <img src="{{asset('/front/assets/img/car_seat_icon.png')}}"><span
                                                        class="ms-1">Parça</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <hr class="mt-0 mb-0">
                            <div>
                                <div class="d-flex p-3">
                                    <div class="col-6">
                                        <div class="d-flex align-items-start"><span
                                                class="car-price-value me-1">60.00</span> <span
                                                class="car-price-symbol"> ₼</span></div>
                                    </div>
                                    <div class="col-6">
                                        <button class="btn-bron">İNDİ BRON EDİN</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card car-modal-btn ps-3 pe-3 mb-3 mb-lg-0" data-bs-toggle="modal"
                             data-bs-target="#exampleModal">
                            <div class="card-body pb-0">
                                <div class="d-flex align-items-center">
                                    <div class="car-logo-box">
                                        <img src="{{asset('/front/assets/img/hundai_logo.png')}}">
                                    </div>
                                    <div class="car-name">Elantra</div>
                                </div>
                                <div class="car-image-box">
                                    <img src="{{asset('/front/assets/img/hundai_elantra.jpg')}}">
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <ul class="text-secondary">
                                            <li>
                                                <div class="d-inline-flex align-items-center mb-2">
                                                    <img src="{{asset('/front/assets/img/calendar_icon.png')}}"><span
                                                        class="ms-1">2015</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-inline-flex align-items-center mb-2">
                                                    <img src="{{asset('/front/assets/img/doors_icon.png')}}"><span
                                                        class="ms-1">5</span>
                                                </div>

                                            </li>
                                            <li>
                                                <div class="d-inline-flex align-items-center mb-2">
                                                    <img src="{{asset('/front/assets/img/gear_icon.png')}}"><span
                                                        class="ms-1">Avtomat</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-inline-flex align-items-center mb-2">
                                                    <img src="{{asset('/front/assets/img/freezer_icon.png')}}"><span
                                                        class="ms-1">Kondisioner</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-6">
                                        <ul class="text-secondary">
                                            <li>
                                                <div class="d-inline-flex align-items-center mb-2">
                                                    <img src="{{asset('/front/assets/img/engine2_icon.png')}}"><span
                                                        class="ms-1">160 a.g.</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-inline-flex align-items-center mb-2">
                                                    <img src="{{asset('/front/assets/img/man-user_icon.png')}}"><span
                                                        class="ms-1">5</span>
                                                </div>

                                            </li>
                                            <li>
                                                <div class="d-inline-flex align-items-center mb-2">
                                                    <img src="{{asset('/front/assets/img/baggage_icon.png')}}"><span
                                                        class="ms-1">1</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-inline-flex align-items-center mb-2">
                                                    <img src="{{asset('/front/assets/img/car_seat_icon.png')}}"><span
                                                        class="ms-1">Parça</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <hr class="mt-0 mb-0">
                            <div>
                                <div class="d-flex p-3">
                                    <div class="col-6">
                                        <div class="d-flex align-items-start"><span
                                                class="car-price-value me-1">60.00</span> <span
                                                class="car-price-symbol"> ₼</span></div>
                                    </div>
                                    <div class="col-6">
                                        <button class="btn-bron">İNDİ BRON EDİN</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Avtomobil icarəyə götürün</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#" method="">
                        <div class="mb-3">
                            <label for="car_name" class="form-label">Avtomobil seçin</label>
                            <select class="form-select" disabled name="car_name">
                                <option selected>Elantra</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="airport" class="form-label">Qəbul yeri</label>
                            <select class="form-select" name="airport">
                                <option selected>Heydər ALiyev Beynəlxalq Airportu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="fullname" class="form-label">Ad Soyad</label>
                            <input type="text" class="form-control" id="fullname" placeholder="Ad Soyad">
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="reservation_date" class="form-label">reservation_date</label>
                                <input type="text" class="form-control" id="reservation_date" name="reservation_date"
                                       data-provide="datepicker" value="15/08/2023">
                            </div>
                            <div class="col-md-6">
                                <label for="return_date" class="form-label">reservation_date</label>
                                <input type="text" class="form-control" id="reservation_date" name="reservation_date"
                                       data-provide="datepicker" value="15/08/2023">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Email daxil edin">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Telefon nömrəsi</label>


                        <div class="input-group mb-3">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Country</button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Azerbaijan</a></li>
                                <li><a class="dropdown-item" href="#">Turkey</a></li>
                                <li><a class="dropdown-item" href="#">Russia</a></li>
                            </ul>
                            <input type="text" class="form-control" aria-label="Text input with dropdown button">
                        </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-warning w-100">Göndər</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection



