<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Buta Rent a Car | Clone</title>

    <!-- Fotawsome icon -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.11.0/css/flag-icons.min.css"
    />

    <!-- Bootsrap icon -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
    />

    <!-- Bootstrap 5 Css -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous"
    />

    <link href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="{{asset('front/css/style.css')}}" />
</head>
<body>
<!-- header start -->
<header>
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
        <div
            class="container d-flex align-items-center justify-content-between"
        >
            <div class="language-switcher">
                <a href="{{ route('setLocale', 'en') }}" class='text-decoration-none {{app()->getLocale()=='en'?'text-white active':'text-secondary'}} me-2'>
                    <span class="fi fi-gb "></span>
                   <span> EN</span>
                </a>
                <a href="{{ route('setLocale', 'az') }}"  class='text-decoration-none {{app()->getLocale()=='az'?'text-white active':'text-secondary'}} me-2'>
                    <span class="fi fi-az "></span>
                    <span> AZ</span>
                </a>
            </div>

            <ul class="navbar-nav mb-2 mb-lg-0 flex-row">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i
                            class="fa-brands fa-facebook-f me-3 me-lg-0"
                        ></i>
                        <span class="d-none d-lg-inline-block"
                        >facebook
                                </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i
                            class="fa-brands fa-whatsapp me-3 me-lg-0"
                        ></i>
                        <span class="d-none d-lg-inline-block"
                        >whatsapp
                                </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i
                            class="fa-brands fa-instagram me-3 me-lg-0"
                        ></i>
                        <span class="d-none d-lg-inline-block"
                        >instagram
                                </span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <nav class="navbar navbar-light navbar-expand-lg pt-4 pb-3">
        <div class="container">
            <a class="navbar-brand me-auto" href="#">
                <img src="{{asset('front/assets/img/buta_logo.jpg')}}" alt="" />
            </a>
            <div
                class="d-none d-lg-flex justify-content-around flex-wrap align-items-center"
            >
                <!-- Nav -->
                <div class="contact contact_phone me-5">
                    <a
                        href="tel:+994 502091072 "
                        class="text-dark text-decoration-none fs-3"
                    >
                        <i
                            class="fa-solid fa-phone text-success me-2"
                        ></i>
                        <span class="fw-6">+994 502091072</span>
                    </a>
                    <div class="ms-5">10:00 - 22:00</div>
                </div>
                <div class="contact contact_adress">
                    <div class="flex-alignment">
                        <i
                            class="fa-solid fa-location-dot me-2 text-muted fs-5"
                        ></i>
                        <span>Nəcəfqulu Rəfiyev 25A</span>
                    </div>
                </div>
            </div>

            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarText"
                aria-controls="navbarText"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <hr class="text-muted d-none d-lg-block" />
    <nav class="navbar navbar-light navbar-expand-lg nav-menu">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 w-100">
                    <li class="nav-item">
                        <a class="nav-link @if(Request::segment(2)=="") active text-danger @endif" href="{{route('esassehife',['locale'=>app()->getLocale()])}}">Avtomobil Parkı</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(Request::segment(2)=="privacy") active text-danger @endif" href="{{route('mexfilik',['locale'=>app()->getLocale()])}}"> Məxfilik siyasəti</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(Request::segment(2)=="faq") active text-danger @endif" href="{{route('faq',['locale'=>app()->getLocale()])}}"> Suallar və Cavablar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(Request::segment(2)=="contact") active text-danger @endif" href="{{route('elaqe',['locale'=>app()->getLocale()])}}">Əlaqə</a>
                    </li>
                    <li class="nav-item ms-0 ms-lg-2 w-25">
                        <select class="form-control d-none d-lg-block">
                            <option>AZN (Azerbaijan New Manat)</option>
                            <option>USD (US Dollar)</option>
                        </select>
                        <select class="form-control d-block d-lg-none">
                            <option>AZN</option>
                            <option>USD</option>
                        </select>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="bg-light pt-3 pb-2 mt-3">
        <div class="container bg-light">
            <nav aria-label="breadcrumb ">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Privacy & Policy</li>
                </ol>
            </nav>
        </div>
    </div>


</header>
<!-- header end -->
<main>
