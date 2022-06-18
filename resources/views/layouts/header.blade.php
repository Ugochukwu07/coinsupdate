<header class="header-style-4">
    <div class="header-navbar navbar-sticky">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="site-logo col-xl-3 col-3 col-lg-3">
                    <a href="index.html">
                        <img src="assets/images/logo-white.png" alt="" class="img-fluid" />
                    </a>
                </div>

                <div class="col-6 offcanvas-icon offcanvas-icon text-end d-block d-lg-none">
                    <a href="#" class="nav-toggler"><i class="fa-solid fa-bars"></i></a> 
                </div>

                <div class="col-xl-9 col-lg-9">
                    <div class="d-flex align-items-center">
                        <nav class="site-navbar ms-auto" id="mobile-menu">
                            <ul class="primary-menu">
                                <li class="current">
                                    <a href="{{ route('index') }}" Class="smoth-scroll">Home</a>
                                </li>
                                <li><a href="#about" Class="smoth-scroll">About</a></li>
                                <li><a href="#author" Class="smoth-scroll">Author</a></li>
                                <li>
                                    <a href="#">Research</a>
                                    <ul class="submenu">
                                        <li><a href="#chapters" Class="smoth-scroll">Chapters</a></li>
                                        <li><a href="#pricing" Class="smoth-scroll">Pricing</a></li>
                                        <li><a href="#faq" Class="smoth-scroll">Faq</a></li>
                                    </ul>
                                </li>
                                <li><a href="#reviews" Class="smoth-scroll">Reviews</a></li>
                            </ul>
    
                            <a href="#" class="nav-close"><i class="fa-solid fa-circle-xmark"></i></a>
                        </nav>
    
                        <div class="header-btn border-left-0 ms-5 d-none d-xl-block">
                            <ul class="header-socials-2 list-inline">
                                <li class="list-inline-item"><a href="{{ config('main.site.social.facebbok') }}"><i class="fa-brands fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="{{ config('main.site.social.twitter') }}"><i class="fa-brands fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="{{ config('main.site.social.linkedin') }}"><i class="fa-brands fa-linkedin"></i></a></li>
                                <li class="list-inline-item"><a href="{{ config('main.site.social.telegram') }}"><i class="fa-brands fa-telegram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--====== Header End ======-->