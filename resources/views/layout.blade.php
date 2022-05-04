<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="At The Nail Salon, we're here to pamper you. With our expert manicurists, you'll walk out of here looking and feeling better than ever. Stop by today and treat yourself to some TLC!">
        <meta name="keywords" content="Nails, Manicure, Pedicure, The Nail Salon, Waxing">
        <meta name="themeColor" content="#000">
        <title>@yield('title')</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    </head>
    <body class="antialiased">
        <div class="p-5 d-flex flex-column align-items-center 
        @if (request()->is('/'))
            home-banner
        @elseif (request()->is('services'))
            services-banner
        @elseif (request()->is('promo'))
            promo-banner
        @elseif (request()->is('gallery'))
            gallery-banner
        @elseif (request()->is('contact'))
            contact-banner
        @elseif (request()->is('rate'))
            rate-banner
        @endif">
            <img src="{{ asset('images/logo.webp') }}" class="img-fluid w-50" data-aos="fade-up"><br>
            <div class="bg-primary p-1 w-25 rounded"></div>
            <a href="https://salons.go3reservation.com/nailsalon" target="_blank" class="text-dark text-decoration-none p-3 my-4 book-us-button border-0 rounded" data-aos="fade-right">
                <h1 class="font-weight-bold m-0"><b>BOOK US</b></h1>
            </a>
        </div>
        {{-- Header --}}
        <nav class="navbar navbar-expand-lg navbar-dark bg-secondary p-3" id="header">
            <a href="{{ route('home') }}" class="d-block d-lg-none">
                <img src="{{ asset('images/logo-white.webp') }}" class="img-fluid" width="100px">
            </a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#header" aria-controls="header" aria-expanded="false" aria-label="Toggle Header">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse collapse justify-content-center">
                <ul class="navbar-nav text-center">
                    <li class="nav-item active px-1">
                        <a class="nav-link" href="{{ route('home') }}">
                            <h3 class="font-weight-bold @if (request()->is('/')) text-white @endif">HOME</h3>
                        </a>
                    </li>
                    <li class="nav-item px-1">
                        <a class="nav-link" href="{{ route('services') }}">
                            <h3 class="font-weight-bold @if (request()->is('services')) text-white @endif">SERVICES</h3>
                        </a>
                    </li>
                    <li class="nav-item px-1">
                        <a class="nav-link" href="{{ route('promo') }}">
                            <h3 class="font-weight-bold @if (request()->is('promo')) text-white @endif">PROMO</h3>
                        </a>
                    </li>
                    <li class="nav-item px-1">
                        <a class="nav-link" href="{{ route('gallery') }}">
                            <h3 class="font-weight-bold @if (request()->is('gallery')) text-white @endif">GALLERY</h3>
                        </a>
                    </li>
                    <li class="nav-item px-1">
                        <a class="nav-link" href="{{ route('contact') }}">
                            <h3 class="font-weight-bold @if (request()->is('contact')) text-white @endif">CONTACT</h3>
                        </a>
                    </li>
                    <li class="nav-item px-1">
                        <a class="nav-link" href="{{ route('rate') }}">
                            <h3 class="font-weight-bold @if (request()->is('rate')) text-white @endif">RATE US</h3>
                        </a>
                    </li>
                    <li class="nav-item px-1">
                        <a class="nav-link" href="https://salons.go3reservation.com/nailsalon" target="_blank">
                            <h3 class="font-weight-bold text-primary">BOOK US</h3>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        {{-- Content --}}
        <div class="bg-black">
            @yield('content')
        </div>

        {{-- Footer --}}

        <footer class="bg-black p-2">
            <div class="row">
                <div class="col-md-4 col-sm-6 d-flex justify-content-center align-items-center">
                    <img src="{{ asset('images/logo-white.webp') }}" width="200px" height="auto">
                </div>
                <div class="col-md-4 col-sm-6 d-flex flex-column align-items-center">
                    <div class="text-left">
                        <a class="text-decoration-none" href="{{ route('home') }}">
                            <h4 class="text-white">HOMEPAGE</h4>
                        </a>
                        <a class="text-decoration-none" href="{{ route('services') }}#list-of-services">
                            <h4 class="text-white">MENU/SERVICES</h4>
                        </a>
                        <a class="text-decoration-none" href="{{ route('contact') }}">
                            <h4 class="text-white">SEND US AN EMAIL</h4>
                        </a>
                        <a class="text-decoration-none" href="{{ route('home') }}#find-us">
                            <h4 class="text-white">WHERE TO FIND US</h4>
                        </a>
                        <a class="text-decoration-none" href="{{ route('rate') }}">
                            <h4 class="text-white">RATE OUR SERVICES</h4>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 d-flex flex-column justify-content-center align-items-center">
                    <h5 class="text-white font-weight-bold"><b>OUR SOCIAL MEDIA</b></h5>
                    <div>
                        <a class="text-decoration-none" href="https://www.facebook.com/thenailsalonnn">
                            <img src="{{ asset('images/facebook.webp') }}" class="img-fluid social-media-logo mr-5">
                        </a>
                        <a class="text-decoration-none" href="https://www.instagram.com/thenailsalonnn/">
                            <img src="{{ asset('images/instagram.webp') }}" class="img-fluid social-media-logo mr-5">
                        </a>
                        <a class="text-decoration-none" href="https://www.yelp.com">
                            <img src="{{ asset('images/yelp.webp') }}" class="img-fluid social-media-logo">
                        </a>
                    </div>
                </div>
            </div>
        </footer>

        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>
        <script src="{{ asset('js/fslightbox.js') }}"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>AOS.init();</script>
    </body>
</html>
