@extends('layout')

@section('title', 'Promos - The Nail Salon')

@section('content')
<div class="p-5 promo-header">
    <div class="container text-center">
        <img src="{{ asset('images/promo/promo-header.webp') }}" class="img-fluid" width="90%" data-aos="fade-up" data-aos-duration="1000">
    </div>
</div>

<img src="{{ asset('images/promo/promo-2.webp') }}" class="w-100" data-aos="fade-right" data-aos-duration="1000">
<img src="{{ asset('images/promo/promo-1.webp') }}" class="w-100" data-aos="fade-left" data-aos-duration="1000">
<img src="{{ asset('images/promo/promo-3.webp') }}" class="w-100" data-aos="fade-right" data-aos-duration="1000">

<div class="contact-section p-3" data-aos="fade-up">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-12 text-center p-5">
                <h1 class="text-white font-weight-bold"><b>FIND US HERE</b></h1>
                <img src="{{ asset('images/map.webp') }}" class="img-fluid">
            </div>
            <div class="col-md-5 col-sm-12 d-flex justify-content-center align-items-center p-4">
                <div class="text-center w-100">
                    <img src="{{ asset('images/logo-white.webp') }}" class="img-fluid">
                    <h1 class="font-weight-bold text-white my-4"><b>714-222-8081</b></h2>
                    <h4 class="text-white">123 MAIN ST,</h4>
                    <h4 class="text-white mb-4">WESTMINSTER CA, 92683</h4>
                    <h4 class="text-white">MON-FRI: 9AM-7AM</h4>
                    <h4 class="text-white">SATURDAY: 10AM-6PM</h4>
                    <h4 class="text-white">SUNDAY: CLOSED</h4>
                </h1>
            </div>
        </div>
    </div>
</div>
@endsection