@extends('front.layouts.master')

@section('content')

    <div class="bg-light pt-3 pb-2 mt-3">
        <div class="container bg-light">
            <nav aria-label="breadcrumb ">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('esassehife')}}">@lang('static_items.home')</a></li>
                    <li class="breadcrumb-item active" aria-current="page">@lang('static_items.privacy')</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="container">
         <div class=" ">
             <div >
                 <p>{!! $item->description !!}</p>
             </div>
         </div>
    </div>


@endsection
