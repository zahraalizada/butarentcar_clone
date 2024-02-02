@extends('front.layouts.master')

@section('content')
    <section>
        <div class="cover-img" style="background-image: url('{{$item->cover_img}}')">
            <div class="container">
                <div class="cover-description">
                    <h1>@lang('static_items.herotitle')</h1>
                    <p>
                        @lang('static_items.herodesc')
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
                       aria-controls="tab1" aria-selected="true">@lang('static_items.withoutdriver')</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="tab2-tab" data-bs-toggle="tab" href="#tab2" role="tab" aria-controls="tab2"
                       aria-selected="false">@lang('static_items.withdriver')</a>
                </li>
            </ul>
        </div>
        <hr class="mt-0">

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                <!-- Button trigger modal -->
                <div class="row mb-3">
                    @foreach($cars as $car)
                        @if( $car->withDriverStatus->id == 1)
                            <div class="col-lg-4 mb-3">
                                <div class="card car-modal-btn ps-3 pe-3 mb-3 mb-lg-0" data-bs-toggle="modal"
                                     data-bs-target="#exampleModal">
                                    <div class="card-body pb-0">
                                        <div class="d-flex align-items-center">
                                            <div class="car-logo-box">
                                                <img src="{{$car->carBrand->icon}}">
                                            </div>
                                            <div class="car-name">{{$car->name}}</div>
                                        </div>
                                        <div class="car-image-box ms-5 mb-2">
                                            <img src="{{$car->carDetail->img}}">
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <ul class="text-secondary">
                                                    <li>
                                                        <div class="d-inline-flex align-items-center mb-2">
                                                            <img
                                                                src="{{asset('/front/assets/img/calendar_icon.png')}}"><span
                                                                class="ms-1">{{$car->carDetail->year}}</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-inline-flex align-items-center mb-2">
                                                            <img
                                                                src="{{asset('/front/assets/img/doors_icon.png')}}"><span
                                                                class="ms-1">{{$car->carDetail->door}}</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-inline-flex align-items-center mb-2">
                                                            <img
                                                                src="{{asset('/front/assets/img/gear_icon.png')}}"><span
                                                                class="ms-1">{{$car->carDetail->gearbox}}</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-inline-flex align-items-center mb-2">
                                                            <img
                                                                src="{{asset('/front/assets/img/freezer_icon.png')}}"><span
                                                                class="ms-1">{{$car->carDetail->freezer}}</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-6">
                                                <ul class="text-secondary">
                                                    <li>
                                                        <div class="d-inline-flex align-items-center mb-2">
                                                            <img
                                                                src="{{asset('/front/assets/img/engine2_icon.png')}}"><span
                                                                class="ms-1">{{$car->carDetail->engine}} a.g.</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-inline-flex align-items-center mb-2">
                                                            <img
                                                                src="{{asset('/front/assets/img/man-user_icon.png')}}"><span
                                                                class="ms-1">{{$car->carDetail->person}}</span>
                                                        </div>

                                                    </li>
                                                    <li>
                                                        <div class="d-inline-flex align-items-center mb-2">
                                                            <img
                                                                src="{{asset('/front/assets/img/baggage_icon.png')}}"><span
                                                                class="ms-1">{{$car->carDetail->baggage}}</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-inline-flex align-items-center mb-2">
                                                            <img
                                                                src="{{asset('/front/assets/img/car_seat_icon.png')}}"><span
                                                                class="ms-1">{{$car->carDetail->seat}}</span>
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
                                                        class="car-price-value me-1">{{$car->price}}</span> <span
                                                        class="car-price-symbol"> ₼ </span></div>
                                            </div>
                                            <div class="col-6">
                                                <button class="btn-bron js-brone" data-id="{{$car->id}}">İNDİ BRON EDİN</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach

                </div>
            </div>
            <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                <div class="row mb-3">
                    @foreach($cars as $car)
                        @if( $car->withDriverStatus->id == 2)
                            <div class="col-lg-4 mb-3">
                                <div class="card car-modal-btn ps-3 pe-3 mb-3 mb-lg-0" data-bs-toggle="modal"
                                     data-bs-target="#exampleModal">
                                    <div class="card-body pb-0">
                                        <div class="d-flex align-items-center">
                                            <div class="car-logo-box">
                                                <img src="{{$car->carBrand->icon}}">
                                            </div>
                                            <div class="car-name">{{$car->name}}</div>
                                        </div>
                                        <div class="car-image-box ms-5 mb-2">
                                            <img src="{{$car->carDetail->img}}">
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <ul class="text-secondary">
                                                    <li>
                                                        <div class="d-inline-flex align-items-center mb-2">
                                                            <img
                                                                src="{{asset('/front/assets/img/calendar_icon.png')}}"><span
                                                                class="ms-1">{{$car->carDetail->year}}</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-inline-flex align-items-center mb-2">
                                                            <img
                                                                src="{{asset('/front/assets/img/doors_icon.png')}}"><span
                                                                class="ms-1">{{$car->carDetail->door}}</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-inline-flex align-items-center mb-2">
                                                            <img
                                                                src="{{asset('/front/assets/img/gear_icon.png')}}"><span
                                                                class="ms-1">{{$car->carDetail->gearbox}}</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-inline-flex align-items-center mb-2">
                                                            <img
                                                                src="{{asset('/front/assets/img/freezer_icon.png')}}"><span
                                                                class="ms-1">{{$car->carDetail->freezer}}</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-6">
                                                <ul class="text-secondary">
                                                    <li>
                                                        <div class="d-inline-flex align-items-center mb-2">
                                                            <img
                                                                src="{{asset('/front/assets/img/engine2_icon.png')}}"><span
                                                                class="ms-1">{{$car->carDetail->engine}} a.g.</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-inline-flex align-items-center mb-2">
                                                            <img
                                                                src="{{asset('/front/assets/img/man-user_icon.png')}}"><span
                                                                class="ms-1">{{$car->carDetail->person}}</span>
                                                        </div>

                                                    </li>
                                                    <li>
                                                        <div class="d-inline-flex align-items-center mb-2">
                                                            <img
                                                                src="{{asset('/front/assets/img/baggage_icon.png')}}"><span
                                                                class="ms-1">{{$car->carDetail->baggage}}</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-inline-flex align-items-center mb-2">
                                                            <img
                                                                src="{{asset('/front/assets/img/car_seat_icon.png')}}"><span
                                                                class="ms-1">{{$car->carDetail->seat}}</span>
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
                                                <button class="btn-bron js-brone" data-id="{{$car->id}}">İNDİ BRON EDİN</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
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

                    <form action="{{route('admin.tenants.store',['locale'=>app()->getLocale()])}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="car_name" class="form-label">Avtomobil seçin</label>
                            <input type="text" class="form-control" id="car_name" name="car_name" readonly
                                   value="Elantra">
                        </div>
                        <div class="mb-3">
                            <label for="fullname" class="form-label">Ad Soyad</label>
                            <input type="text" class="form-control" id="fullname" name="fullname"
                                   placeholder="Ad Soyad">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                   placeholder="Email daxil edin">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Telefon </label>
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="0551234567">
                        </div>
                        <div class="mb-3">
                            <label for="reception_place" class="form-label">Qəbul yeri</label>
                            <select class="form-select" name="reception_place">
                                <option value="Airport">Heydər Aliyev Beynəlxalq Airportu</option>
                                <option value="Center">İcarə məntəqəsi</option>
                            </select>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="reserve_date" class="form-label">Reservation date</label>
                                <input type="text" class="form-control" id="reserve_date" name="reserve_date"
                                       data-provide="datepicker" placeholder="01/01/2022">
                            </div>
                            <div class="col-md-6">
                                <label for="return_date" class="form-label">Return_date</label>
                                <input type="text" class="form-control" id="return_date" name="return_date"
                                       data-provide="datepicker" placeholder="01/01/2022">
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




