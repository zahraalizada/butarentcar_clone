@extends('front.layouts.master')

@section('content')
    <section>
        <div
            class="cover-img"
            style="background-image: url('{{asset('front/assets/img/cover-img.jpg')}}')"
        >
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

    <div class="container">
        <div class="d-flex justify-content-center mt-5">
            <ul class="nav nav-tabs m-auto" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="tab1-tab" data-bs-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true">Sürücüsüz</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="tab2-tab" data-bs-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">Sürücü ilə</a>
                </li>
            </ul>
        </div>
        <hr>

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                Tab 1 content goes here.
            </div>
            <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                Tab 2 content goes here.
            </div>
        </div>
    </div>


@endsection
