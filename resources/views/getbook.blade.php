@extends('layouts.app', ['title' => 'Get Your Copy Now!'])

@section('css')
    <style>
        .pay-now{
            background: rgb(15,38,181);
            background: linear-gradient(193deg, rgba(15,38,181,1) 0%, rgba(26,61,212,1) 33%, rgba(188,219,249,1) 67%);
        }
    </style>
@endsection

@section('content')
<section class="testimonial-3 section-padding"  style="background: rgb(13,67,182)">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="section-heading text-center mb-50">
                    <span class="subheading mb-10 sub-style-2 text-white">Payment</span>
                    <h2 class="font-lg text-white">Get the eBook</h2>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonial section start -->
<section class="testimonial-3 section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="section-heading text-center mb-50">
                    <span class="subheading mb-10 sub-style-2">Payment</span>
                    <h2 class="font-lg">Procced to Payment</h2>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-10 col-lg-10 col-md-10 m-0 text-center mx-auto wow fadeInDown">
                
                <div class="pay-now p-2 pt-4 m-md-5">
                    <h4 class="text-white mb-4">Fill this form Below</h4>
                    <form action="{{ route('review.store') }}" method="POST" class="row">
                        @csrf
                        <div class="col-md-12 col-12">
                            <div class="form-group mb-4">
                                <input type="text" name="name" class="form-control" placeholder="Full Name*">
                            </div>
                        </div>
                        <div class="col-md-12 col-12">
                            <div class="form-group mb-4">
                                <input type="email" class="form-control" name="email" placeholder="Email Address*">
                            </div>
                        </div>
                        <div class="col-md-12 col-12">
                            <div class="form-group mb-4">
                                <button type="submit" class="btn btn-main">Pay Now* <br> NGN10,000</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial section End -->
@endsection