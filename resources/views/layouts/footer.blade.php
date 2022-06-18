<!-- Footer section start -->
<section class="footer">
	<div class="footer-mid">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-xl-3 me-auto col-sm-8 col-md-6">
					<div class="widget footer-widget mb-5 mb-xl-0">				
						<h2 class="font-lg fw-400">coinsUpdate.</h2>
					</div>
				</div>

				<div class="col-xl-3 me-auto col-sm-8 col-md-6">
					<div class="widget footer-widget mb-5 mb-xl-0">				
						<h5 class="widget-title">Call Us</h5>
						<h3>{{ config('main.author.phone') }}</h3>
						<p>Mon-Fri (08:00-16.00)</p>
					</div>
				</div>

				<div class="col-xl-3 me-auto col-sm-8 col-md-6">
					<div class="widget footer-widget mb-5 mb-xl-0">				
						<h5 class="widget-title">Email</h5>
						<h3><a href="malito:{{ config('main.site.email.info') }}">{{ config('main.site.email.info') }}</a></h3>
					</div>
				</div>

				<div class="col-xl-2 ms-lg-auto col-sm-8 col-md-6">
					<div class="widget footer-widget mb-5 mb-xl-0">				
						<h5 class="widget-title">Connect Us</h5>
						<div class="footer-socials">
							<a href="{{ config('main.site.social.facebbok') }}"><i class="fa-brands fa-facebook"></i></a>
                            <a href="{{ config('main.site.social.twitter') }}"><i class="fa-brands fa-twitter"></i></a>
                            <a href="{{ config('main.site.social.linkedin') }}"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="{{ config('main.site.social.telegram') }}"><i class="fa-brands fa-telegram"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="footer-btm">
		<div class="container">
			<div class="row ">
				<div class="col-xl-6 col-sm-12 col-lg-6 col-md-6">
					<p class="mb-0 copyright text-lg-start">© 2021 Copyright All rights reserved by <a href="{{ route('index') }}" rel="nofollow">{{ config('main.site.name') }}</a> </p>
				</div>
				<div class="col-xl-6 col-sm-12 col-lg-6 col-md-6">
					<div class="footer-btm-links text-start text-lg-end">
						<a href="#">Legal</a>
						<a href="#">Supports</a>
						<a href="#">Terms</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="fixed-btm-top">
		<a href="#top-header" class="js-scroll-trigger scroll-to-top"><i class="fa fa-angle-up"></i></a>
	</div>
	
</section>
<!-- Footer section End -->