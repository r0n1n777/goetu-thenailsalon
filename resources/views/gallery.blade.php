@extends('layout')

@section('title', 'Gallery - The Nail Salon')

@section('content')
<div id="home-carousel" class="carousel slide" data-ride="carousel" data-aos="fade-right" data-aos-duration="1000">
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


<div class="gallery-content" data-aos="fade-up">
    <div class="container">
        <div class="row photos pt-3">
            @for ($x = 12; $x >= 1; $x--)
            <div class="col-4 text-center item">
                <a data-fslightbox="gallery" href="{{ asset('images/gallery/'.$x.'.webp') }}">
                    <img class="img-fluid border rounded border-white shadow gallery-image mb-3" src="{{ asset('images/gallery/'.$x.'.webp') }}" data-aos="fade-up">
                </a>
            </div>
            @endfor
        </div>
    </div>
</div>
@endsection