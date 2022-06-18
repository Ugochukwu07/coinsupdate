@extends('layouts.app', ['title' => 'Welcome'])

@section('css')
    <style>
        .loading-p{
            position: relative;
        }
        .loading{
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background: rgb(13, 67, 182, 52%);
        }
    </style>
@endsection
@section('content')
    <!-- Banner Section Start -->
<section class="banner-style-5">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-md-12 col-xl-6 col-lg-6 ">
                <div class="banner-content">
                    <span class="subheading"><i class="fa fa-arrow-alt-circle-down"></i>50% discount on early purchase</span>
                    <h1>Millionaires Are Created in Bear Market</h1>
                    <p>Sometimes it's the only thing you do. But it's always the ONE Thing that delivers extraordinary results</p>
                    <a href="#" class="btn btn-white"><i class="fa-solid fa-cart-arrow-down"></i>Get the book Now</a>
                </div>
            </div>

            <div class="col-md-12 col-xl-5 col-lg-5">
                <div class="banner-img-round mt-5 mt-lg-0">
                    <img src="{{ asset('img/book-cover.png') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</section>
<!-- Banner Section End -->

<!-- Clients logo Section Start -->
<section class="clients-logo-section section-padding pt-200">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-sm-12">
                <div class="heading text-center mb-30">
                    <p class="subheading">We are featured on</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg col-sm-4 col-xl-2">
                <div class="client-logo2">
                   <img src="{{ asset('img/book-cover.jpg') }}" alt="" class="img-fluid">
                </div>
            </div>
             <div class="col-lg col-sm-4 col-xl-2">
                <div class="client-logo2">
                    <img src="{{ asset('img/book-cover.jpg') }}" alt="" class="img-fluid">
                </div>
            </div>
             <div class="col-lg col-sm-4 col-xl-2">
                <div class="client-logo2">
                   <img src="{{ asset('img/book-cover.jpg') }}" alt="" class="img-fluid">
                </div>
            </div>
             <div class="col-lg col-sm-4 col-xl-2">
                <div class="client-logo2">
                    <img src="{{ asset('img/book-cover.jpg') }}" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg col-sm-4 col-xl-2">
                <div class="client-logo2">
                   <img src="{{ asset('img/book-cover.jpg') }}" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg col-sm-4 col-xl-2">
                <div class="client-logo2">
                   <img src="{{ asset('img/book-cover.jpg') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Clients logo Section End -->
<!-- About Section Start -->
<section class="about-wrapper section-padding" id="about"> 
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-xl-5 col-md-6 pe-5">
                <div class="about-img2 mb-5 mb-lg-0">
                    <img src="{{ asset('img/book-cover.png') }}" alt="" class="img-fluid">
               </div>
            </div>

            <div class="col-xl-6 col-md-6">
                <div class="about-content">
                    <span class="subheading mb-10">simple and flexible</span>
                    <h2 class="font-lg ">About The Book</h2>
                    <p class="mb-30">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by humour. There are many variations of passages of Lorem available.</p>

                    <h4 class="mb-20">Who This Book Is For</h4>
                    <p>There are many variations of passages of Lorem Ipsum available, 
                        but the majority have suffered alteration</p>

                    <ul class="about-features">
                        <li>
                            <i class="fa-solid fa-check"></i>
                            <h5>Beats to boost your
                                productivity.</h5>
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            <h5>A Complete Solution </h5>
                        </li>
                         <li>
                            <i class="fa-solid fa-check"></i>
                            <h5>Powerful Options</h5>
                        </li>
                        
                    </ul>

                    <a href="#chapters" class="btn btn-dark">Discover More</a>  
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section END -->

<!-- chapters Section Start -->
<section class="feature-section section-padding" id="chapters">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-8">
                <div class="heading mb-70 text-center">
                    <span class="subheading">How it works</span>
                    <h2 class="mb-20 font-lg ">Chapters we've covered</h2>
                </div>
            </div>

            <div class="col-xl-10">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 ">
                        <div class="feature-intro">
                            <i class="fa-solid fa-layer-group"></i>
                            <div class="feature-text">
                                <h4>Design principles</h4>
                                <p>Our users are impatient. They're probably distracted too. Keep it simple and beautiful, </p>
                            </div>
                        </div>

                        <div class="feature-intro">
                            <i class="fa-solid fa-book-open-reader"></i>
                            <div class="feature-text">
                                <h4>Visual hierarchy</h4>
                                <p>Our users are impatient. They're probably distracted too. Keep it simple and beautiful, </p>
                            </div>
                        </div>

                        <div class="feature-intro">
                            <i class="fa-solid fa-book-open-reader"></i>
                            <div class="feature-text">
                                <h4>White space</h4>
                                <p>Our users are impatient. They're probably distracted too. Keep it simple and beautiful, </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6">
                        <div class="feature-intro">
                            <i class="fa-solid fa-chart-line-up"></i>
                            <div class="feature-text">
                                <h4>Typography</h4>
                                <p>Our users are impatient. They're probably distracted too. Keep it simple and beautiful, </p>
                            </div>
                        </div>
                        <div class="feature-intro">
                            <i class="fa-solid fa-grid-2-plus"></i>
                            <div class="feature-text">
                                <h4>The rise of trend Design </h4>
                                <p>Our users are impatient. They're probably distracted too. Keep it simple and beautiful, </p>
                            </div>
                        </div>
                        <div class="feature-intro">
                            <i class="fa-solid fa-chart-line-up"></i>
                            <div class="feature-text">
                                <h4>Data Science Process </h4>
                                <p>Our users are impatient. They're probably distracted too. Keep it simple and beautiful, </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Feature Section END -->
<!-- CTA Sidebar start -->
<section class="cta-6">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="cta-content">
                    <span class="subheading">All Versions Rating avg. 4.5</span>
                    <h2 class="font-lg mt-10">Get more Productivity <br> with less effort</h2>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="subcribe-form">
                    <h4 class="text-white mb-4">Be part of our Pre-Sale Group</h4>
                    <form action="{{ route('presale.add.store') }}" method="POST">
                        @csrf
                        <div class="form-group mb-4">
                            <input type="text" name="email" class="form-control" placeholder="Email Address">
                        </div>
                        <input class="btn btn-main" type="submit" value="Add to Pre-Sale Group" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CTA Sidebar end -->

<!-- Testimonial section start -->
<section class="testimonial-3 section-padding"  id="reviews">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="section-heading text-center mb-50">
                    <span class="subheading mb-10 sub-style-2">Clients Feedback</span>
                    <h2 class="font-lg">What Our Customers Think</h2>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-9 col-xl-9 mx-auto">
                <div class="testimonials-slides-5 owl-carousel owl-theme">
                    <div class="testimonial-item">
                       <div class="testimonial-inner">
                           
                            <div class="testimonial-text mb-30">
                                Cras vel purus fringilla, lobortis libero ut Proin a velit convallis, fermentum orci in, rutrum diam. Duis elementum odio a pharetra commodo.
                                On the other hand wesay denounce with righteous indignation and dislimen who are so beguiled
                            </div>

                            <div class="client-info">
                               
                                <div class="testimonial-author">
                                    <h4>Cory Zamora</h4>
                                    <span class="meta">Marketing Specialist</span>
                                </div>
                            </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-10 mx-auto text-center" id="review-btn">
                <a href="#chapters" class="btn btn-dark">Drop a Review</a>
            </div>
            <div class="col-xl-10 col-lg-10 col-md-10 m-0 loading-p text-center mx-auto wow fadeInDown" id="review-form" style="display: none">
                <div class="loading"></div>
                <div class="subcribe-form p-5" style="background: rgb(13,67,182)">
                    <style>
                        textarea.form-control {
                            height: auto !important;
                        }
                    </style>
                    <h4 class="text-white mb-4">Drop a Review</h4>
                    <form action="{{ route('review.store') }}" method="POST" class="row">
                        @csrf
                        <div class="col-md-6 col-12">
                            <div class="form-group mb-4">
                                <input type="text" name="name" class="form-control" placeholder="Full Name*">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group mb-4">
                                <input type="email" class="form-control" name="email" placeholder="Email Address*">
                            </div>
                        </div>
                        <div class="col-md-12 col-12">
                            <div class="form-group mb-4">
                                <input type="url" class="form-control" name="website" placeholder="Web Site(Optional)">
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <textarea name="review" id="review" class="form-control" placeholder="Your Review*" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group mb-4">
                            <input type="submit" class="btn btn-main" value="Review">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial section End -->
<section class="author-section section-padding bg-grey2" id="author"> 
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-6 col-lg-6">
                <div class="about-img pe-xl-5 mb-4 mb-lg-0">
                    <img src="{{ asset('img/paul-test.jpg') }}" alt="" class="img-fluid">
                    
                    <div class="author-socials">
                        <span>Follow Me :</span>
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="#"><i class="fa-brands fa-telegram"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-xl-5 col-lg-6">
                <div class="about-content">
                    <span class="subheading mb-10 sub-style-2">Technical Writer</span>
                    <h2 class="font-lg ">Michale John</h2>
                    
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo sint modi tempore assumenda facere, sequi dolores officiis quasi molestias, 
                        distinctio optio aperiam quae, nobis quibusdam rerum cumque nulla? In, animi. </p>

                    <ul class="about-features">
                        <li>
                            <i class="fa-solid fa-file-certificate"></i>
                            <h5> Achieved 10+ awarded</h5>
                        </li>
                        <li>
                            <i class="fa-solid fa-pencil"></i>
                            <h5>Very passionate about writting</h5>
                        </li>
                         <li>
                            <i class="fa-solid fa-heart"></i>
                            <h5>Most Popular writter in the year</h5>
                        </li>
                        
                    </ul>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Counter Section start -->
<section class="counter-section">
    <div class="container">
        <div class="row justify-content-center g-0" >
            <div class="col-lg-3 col-sm-6">
                <div class="counter-item mb-5 mb-lg-0">
                    <i class="fa-solid fa-books"></i>
                    <div class="count">
                        <span class="counter h2">28</span>k
                        <p>Copies Sold</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="counter-item mb-5 mb-lg-0">
                    <i class="fa-solid fa-users"></i>
                    <div class="count">
                        <span class="counter h2">10</span>M
                        <p>Readers Worldwide</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">         
                <div class="counter-item mb-5 mb-lg-0">
                    <i class="fa-solid fa-language"></i>
                    <div class="count">
                        <span class="counter h2">20</span>+
                        <p>Languages</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-sm-6">
                <div class="counter-item ">
                    <i class="fa-solid fa-face-smile-hearts"></i>
                    <div class="count">
                        <span class="counter h2">100</span>%
                        <p>Satisfaction rate</p> 
                    </div>
                </div>
            </div>
       </div>
    </div>
</section>
<!-- COunter Section End -->

<!-- Pricing start -->

<section class="pricing section-padding" id="pricing">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-6">
                <div class="heading text-center mb-70">
                    <span class="subheading sub-style-2">pricing plan</span>
                    <h2 class="font-lg">Flexible Pricing plan</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 col-xl-4">
                <div class="pricing-item pricing-style-2 mb-4 mb-lg-0">
                    <div class="pricing-header">
                        <span class="badge">Free Version</span>
                        <p>Get Chapter One</p>
                    </div>
                    <div class="price">
                        <h2>Free</h2>
                    </div>

                    <div class="pricing-features mb-30">
                        <ul>
                            <li> <i class="lni lni-checkmark"></i>1 Free Chapter</li>
                            <li><i class="lni lni-checkmark"></i> PDF version</li>
                            <li><i class="lni lni-checkmark"></i> Free Subscripion</li>
                            <li class="not-included"> <i class="lni lni-checkmark"></i>hardcover </li>
                        </ul>
                    </div>

                    <a href="#" class="btn btn-black">Get it Now</a>
                    <p class="mb-0 mt-3 font-sm-14">* No Hidden Charge and Fees</p>

                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-xl-4">
                <div class="pricing-item featured pricing-style-2 mb-4 mb-lg-0">
                    <div class="pricing-header">
                        <span class="badge">Hard Copy</span>
                        <p>Get eBook version Free</p>
                    </div>
                    <div class="price">
                        <h2><span class="currency">$</span>29.99</h2>
                        
                    </div>
                    <div class="pricing-features mb-30">
                        <ul>
                            <li><i class="lni lni-checkmark"></i>Ebook Version</li>
                            <li><i class="lni lni-checkmark"></i> PDF version</li>
                            <li><i class="lni lni-checkmark"></i> hardcover</li>
                            <li class="not-included"><i class="lni lni-checkmark"></i> Audio Book</li>
                        </ul>
                    </div>
                    <a href="#" class="btn btn-black">Get it Now</a>
                    <p class="mb-0 mt-3 font-sm-14">* No Hidden Charge and Fees</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-xl-4">
                <div class="pricing-item pricing-style-2">
                    <div class="pricing-header">
                        <span class="badge">eBook version</span>
                        <p>Pdf &amp; Audio Book Added</p>
                    </div>
                    <div class="price">
                        <h2><span class="currency">$</span>39.99 </h2>
                    </div>
                    <div class="pricing-features mb-30">
                        <ul>
                            <li><i class="lni lni-checkmark"></i> Ebook Version</li>
                            <li><i class="lni lni-checkmark"></i> Audio Book</li>
                            <li><i class="lni lni-checkmark"></i> PDF version</li>
                            <li><i class="lni lni-checkmark"></i> hardcover </li>
                        </ul>
                    </div>
                    <a href="#" class="btn btn-black">Get it Now</a>
                    <p class="mb-0 mt-3 font-sm-14">* No Hidden Charge and Fees</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Faq Section Start -->
<section class="faq section-padding-btm" id="faq">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-xl-4 col-lg-6">
                <div class="heading">
                    <span class="subheading">Have Question on Mind</span>
                    <h2 class="mb-40 font-lg">Frequently Asked Questions </h2>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6">
                <div class="faq-list-wrapper">
                    <div class="faq-single">
                        <h4>Do I need to make a payment?</h4>
                        <p>No one cares about products. People care about ideas. Is a product an idea? Noup. Is a brand? A good one is.</p>
                    </div>
                    <div class="faq-single">
                        <h4>Can I track my daily tasks?</h4>
                        <p>While designing residential property, a great emphasis is placed on infrastructure: 
                            landscaping design, transport accessibility.</p>
                    </div>
                    <div class="faq-single">
                        <h4>Will you provide regular updates?</h4>
                        <p>Big, small, online, offline, local or international. Size doesn't matter. 
                            We work on diverse projects for top brands as well as for cool startups. Check out some of our favorites.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- FAQ Section END -->

<!-- CTA Sidebar start -->
<section class="cta-4 section-padding cta-bg-2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-8 col-lg-8">
                <div class="cta-content mb-4 mb-lg-0">
                    <span class="subheading ">All Versions Rating avg. 4.5</span>
                    <h2 class="font-lg mt-20">The surprisingly simple truth behind extraordinary results</h2>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4">
                <div class="download-btn">
                    <p>Available Now :</p>
                    <a href="#" class="btn btn-white d-block mb-2"><i class="fa-solid fa-cart-shopping me-2"></i>Purchase Now</a>
                    <a href="#" class="btn btn-black d-block"><i class="fa-brands fa-amazon me-2"></i>Get It on Amazon</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CTA Sidebar end -->

@endsection

@section('script')
<script>
    $('#review-btn').on('click', function(e){
      e.preventDefault()
      $('#review-btn').css("display", "none");
      $('#review-form').css("display", "block");
    });
  </script>
@endsection