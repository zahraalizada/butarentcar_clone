@extends('front.layouts.master')

@section('content')
    <div class="bg-light pt-3 pb-2 mt-3">
        <div class="container bg-light">
            <nav aria-label="breadcrumb ">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('esassehife')}}">@lang('static_items.home')</a></li>
                    <li class="breadcrumb-item active" aria-current="page">@lang('static_items.contact')</li>
                </ol>
            </nav>
        </div>
    </div>


    <div class="container">
        <div class="card-body ps-0">
            <h3 class="fw-medium mt-5 mb-4">@lang('static_items.contact')</h3>
            <div class="mb-3">
                <div class="fw-bold mb-2">@lang('static_items.phone')</div>
                <a href="tel:{{$item->phone}}" class="text-decoration-none ">{{$item->phone}}</a>
            </div>
            <div class="mb-3">
                <div class="fw-bold mb-2">@lang('static_items.whatsapp')</div>
                <a href="{{$item->phone_wp}}" class="text-decoration-none d-flex mb-2">{{$item->phone_wp}}</a>
                <a href="https://wa.me/{{$item->phone}}" class="btn btn-success">Написать в WhatsApp</a>
            </div>
            <div class="mb-3">
                <div class="fw-bold mb-2">@lang('static_items.worktime')</div>
                <div>{{$item->hours}}</div>
            </div>
            <div class="mb-3">
                <div class="fw-bold mb-2"> @lang('static_items.email'):</div>
                <a href="#" class="text-decoration-none d-flex mb-2">info@butarentalcars.az</a>
            </div>
            <div class="mb-3">
                <div class="fw-bold mb-2">@lang('static_items.address'):</div>
                <div>
                    {!! $item->address_map !!}
                </div>
            </div>


        </div>
    </div>
@endsection
