@extends('layout')

@section('title', 'Services - The Nail Salon')

@section('content')
<div class="p-3 services-first-section" id="list-of-services">
    <div class="container">
        <div class="row">
            <div class="col d-flex flex-column justify-content-center align-items-center">
                <h1 class="font-weight-bold text-white"><b>OUR SERVICES</b></h1>
                <div class="bg-primary w-50 border-bottom border-primary"></div>
            </div>
        </div>
        <div class="row p-4">
            <div class="col-md-4 col-sm-12 text-center">
                <img src="{{ asset('images/services/pedicure.webp') }}" class="img-fluid services-rounded rounded-circle" data-aos="fade-up">
                <h3 class="font-weight-bold text-white mt-3"><b>PEDICURE</b></h3>
            </div>
            <div class="col-md-4 col-sm-12 text-center">
                <img src="{{ asset('images/services/manicure.webp') }}" class="img-fluid services-rounded rounded-circle" data-aos="fade-up" data-aos-delay="100">
                <h3 class="font-weight-bold text-white mt-3"><b>MANICURE</b></h3>
            </div>
            <div class="col-md-4 col-sm-12 text-center">
                <img src="{{ asset('images/services/waxing.webp') }}" class="img-fluid services-rounded rounded-circle" data-aos="fade-up" data-aos-delay="200">
                <h3 class="font-weight-bold text-white mt-3"><b>WAXING</b></h3>
            </div>
        </div>
    </div>
</div>

<div class="services-pedicure-header d-flex justify-content-center align-items-center" data-aos="fade-right" data-aos-duration="1000">
    <h1 class="font-weight-bold text-white">PEDICURE</h1>
</div>

<div class="services-pedicure p-5" data-aos="fade-up">
    <div class="container">
        <div class="row">
            <div class="col d-flex">
                <table class="w-100">
                    <tr class="text-white h3">
                        <td class="p-2">CLASSIC PEDICURE</td>
                        <td>$25</td>
                    </tr>
                    <tr class="text-white h3">
                        <td class="p-2">SIGNATURE PEDICURE</td>
                        <td>$30</td>
                    </tr>
                    <tr class="text-white h3">
                        <td class="p-2">VIP PEDICURE</td>
                        <td>$35</td>
                    </tr>
                    <tr class="text-white h3">
                        <td class="p-2">HOLLYWOOD PEDICURE</td>
                        <td>$35</td>
                    </tr>
                    <tr class="text-white h3">
                        <td class="p-2">ACRYLIC PEDICURE</td>
                        <td>$30</td>
                    </tr>
                </table>
            </div>
            <div class="col services-pedicure-content d-flex align-items-center ml-2 p-5">
                <img src="{{ asset('images/services/pedicure-content.webp') }}">
            </div>
        </div>
    </div>
</div>

<div class="services-manicure-header d-flex justify-content-center align-items-center" data-aos="fade-left" data-aos-duration="1000">
    <h1 class="font-weight-bold text-white">MANICURE</h1>
</div>

<div class="services-manicure p-5" data-aos="fade-up">
    <div class="container">
        <div class="row">
            <div class="col services-manicure-content d-flex align-items-center ml-2 p-5">
                <img src="{{ asset('images/services/manicure-content.webp') }}">
            </div>
            <div class="col d-flex">
                <table class="w-100">
                    <tr class="text-white h3">
                        <td class="p-2">CLASSIC MANICURE</td>
                        <td>$25</td>
                    </tr>
                    <tr class="text-white h3">
                        <td class="p-2">SIGNATURE MANICURE</td>
                        <td>$30</td>
                    </tr>
                    <tr class="text-white h3">
                        <td class="p-2">VIP MANICURE</td>
                        <td>$35</td>
                    </tr>
                    <tr class="text-white h3">
                        <td class="p-2">HOLLYWOOD MANICURE</td>
                        <td>$35</td>
                    </tr>
                    <tr class="text-white h3">
                        <td class="p-2">ACRYLIC MANICURE</td>
                        <td>$30</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="services-waxing-header d-flex justify-content-center align-items-center" data-aos="fade-right" data-aos-duration="1000">
    <h1 class="font-weight-bold text-white">WAXING</h1>
</div>

<div class="services-waxing p-5" data-aos="fade-up">
    <div class="container">
        <div class="row">
            <div class="col d-flex">
                <table class="w-100">
                    <tr class="text-white h3">
                        <td class="p-2">FACE WAX</td>
                        <td>$10</td>
                    </tr>
                    <tr class="text-white h3">
                        <td class="p-2">EYEBROWS</td>
                        <td>$10</td>
                    </tr>
                    <tr class="text-white h3">
                        <td class="p-2">BACK WAX</td>
                        <td>$18</td>
                    </tr>
                    <tr class="text-white h3">
                        <td class="p-2">CHEST WAX</td>
                        <td>$18</td>
                    </tr>
                    <tr class="text-white h3">
                        <td class="p-2">ARMPIT WAX</td>
                        <td>$15</td>
                    </tr>
                </table>
            </div>
            <div class="col services-waxing-content d-flex align-items-center ml-2 p-5">
                <img src="{{ asset('images/services/waxing-content.webp') }}">
            </div>
        </div>
    </div>
</div>

@endsection