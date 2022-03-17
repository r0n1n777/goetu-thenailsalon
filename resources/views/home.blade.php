@extends('layout')

@section('title', 'Home - The Nail Salon')

@section('content')
<div id="home-carousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img src="{{ asset('images/home/carousel-1.webp') }}" class="home-carousel">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/home/carousel-2.webp') }}" class="home-carousel">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/home/carousel-3.webp') }}" class="home-carousel">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/home/carousel-4.webp') }}" class="home-carousel">
        </div>
    </div>
    <a class="carousel-control-prev" href="#home-carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#home-carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<img src="{{ asset('images/promo/promo-1.webp') }}" class="w-100" data-aos="fade-up">

<div class="home-third-section p-5" data-aos="fade-up">
    <div class="container">
        <div class="row">
            <div class="col-5 d-flex flex-column align-items-center">
                <img src="{{ asset('images/home/rounded-1.webp') }}" class="rounded-circle home-rounded m-3" data-aos="fade-right" data-aos-duration="1000">
                <img src="{{ asset('images/home/rounded-2.webp') }}" class="rounded-circle home-rounded m-3" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100">
                <img src="{{ asset('images/home/rounded-3.webp') }}" class="rounded-circle home-rounded m-3" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="200">
            </div>
            <div class="col-7 home-third-section-inner d-flex align-items-center ml-2">
                <img src="{{ asset('images/home/third-section-inner-content.webp') }}" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
            </div>
        </div>
    </div>
</div>

<div class="home-form-section p-3" data-aos="fade-up">
    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-center align-items-center">
                <div class="w-75">
                    <h1 class="text-white font-weight-bold"><b>NAME</b></h1>
                    <input type="text" class="form-control p-2 mb-4 text-capitalize rounded-0">
                    <h1 class="text-white font-weight-bold"><b>EMAIL</b></h1>
                    <input type="text" class="form-control p-2 mb-4 rounded-0">
                    <h1 class="text-white font-weight-bold"><b>PHONE NUMBER</b></h1>
                    <input type="phone" class="form-control p-2 mb-4 rounded-0">
                    <h1 class="text-white font-weight-bold"><b>SUBJECT</b></h1>
                    <input type="text" class="form-control p-2 mb-4 rounded-0">
                    <h1 class="text-white font-weight-bold"><b>MESSAGE</b></h1>
                    <textarea rows="6" class="form-control p-2 mb-4 rounded-0"></textarea>
                    <div class="text-center">
                        <button type="button" class="p-3 my-4 book-us-button border-0 rounded">
                            <h1 class="font-weight-bold m-0"><b>SUBMIT</b></h1>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="contact-section p-3" data-aos="fade-up" id="find-us">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-12 text-center">
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