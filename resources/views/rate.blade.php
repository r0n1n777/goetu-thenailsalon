@extends('layout')

@section('title', 'Rate Us - The Nail Salon')

@section('content')
<div class="rate-header d-flex justify-content-center align-items-center" data-aos="fade-right" data-aos-duration="1000">
    <h1 class="font-weight-bold text-white">RATE OUR SERVICES</h1>
</div>

<div class="rate-content p-3" data-aos="fade-up">
    <div class="container">
        <div class="row justify-content-center">
            <img src="{{ asset('images/logo-white.webp') }}" class="rate-content-logo">
        </div>
        <div class="row justify-content-center">
            <div class="w-75">
                <p class="h3 font-weight-bold text-white text-center">
                    We would very much appreciate it if you would please take a few minutes today to share your experience.<br>
                    This feedback helps us improve our ability to provide you with the best service possible.
                </p>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <img src="{{ asset('images/rate/star.webp') }}" class="rate-star">
            <img src="{{ asset('images/rate/star.webp') }}" class="rate-star">
            <img src="{{ asset('images/rate/star.webp') }}" class="rate-star">
            <img src="{{ asset('images/rate/star.webp') }}" class="rate-star">
            <img src="{{ asset('images/rate/star.webp') }}" class="rate-star">
        </div>
        <div class="text-center">
            <p class="h1 text-white">FIND US ON YELP</p>
            <div class="d-flex align-items-center justify-content-center">
                <img src="{{ asset('images/yelp.webp') }}" class="social-media-logo">&nbsp;&nbsp;&nbsp;
                <span class="h3 text-white">YELP/NAILSALON.COM</span>
            </div>
        </div>
    </div>
</div>
@endsection