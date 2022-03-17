@extends('layout')

@section('title', 'Contact Us - The Nail Salon')

@section('content')
<div class="contact-header d-flex justify-content-center align-items-center" data-aos="fade-right" data-aos-duration="1000">
    <h1 class="font-weight-bold text-white">SEND YOUR FEEDBACK</h1>
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
@endsection