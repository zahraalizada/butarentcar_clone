@extends('front.layouts.master')

@section('content')
    <div class="container">
        <div class="card-body ps-0">
            <h3 class="fw-medium mt-5 mb-4">Əlaqə</h3>
            <div class="mb-3">
                <div class="fw-bold mb-2">Telefonlar</div>
                <a href="tel:{{$item->phone}}" class="text-decoration-none ">{{$item->phone}}</a>
            </div>
            <div class="mb-3">
                <div class="fw-bold mb-2">Whatsapp</div>
                <a href="{{$item->phone_wp}}" class="text-decoration-none d-flex mb-2">{{$item->phone_wp}}</a>
                <a href="https://wa.me/{{$item->phone}}" class="btn btn-success">Написать в WhatsApp</a>
            </div>
            <div class="mb-3">
                <div class="fw-bold mb-2">İş vaxtları</div>
                <div>10:00 - 22:00</div>
            </div>
            <div class="mb-3">
                <div class="fw-bold mb-2">Email:</div>
                <a href="#" class="text-decoration-none d-flex mb-2">info@butarentalcars.az</a>
            </div>
            <div class="mb-3">
                <div class="fw-bold mb-2">Ünvan:</div>
                <div>
                    {!! $item->address_map !!}
                </div>
            </div>


        </div>
    </div>
@endsection
