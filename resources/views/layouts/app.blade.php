
<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Booki- {{ $title }} by dreambuzz">
  <meta name="keywords" content="author,shop,ebooki,ebook,book,marekting,online,online book store, agency, promotion, startup,onepage, clean, modern,business, company">
  <meta name="author" content="dreambuzz">

  <title>CoinsUpdate - {{ $title }}</title>

  <!-- Mobile Specific Meta-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
  <!-- Iconfont Css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
  <link rel="stylesheet" href="{{ asset('css/lineicons.css') }}">
  <!-- animate.css -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

  @yield('css')
  
    <!-- Main jQuery -->
    <script src="{{ asset('js/jquery.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
    new WOW().init();
  </script>
</head>

<body id="top-header">



@include('layouts.header')

@yield('content')

@include('layouts.footer')
    <!-- 
    Essential Scripts
    =====================================-->
    
    <!-- Bootstrap 5:0 -->
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <!-- Counterup -->
    <script src="{{ asset('js/waypoint.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <!--  Owl Carousel -->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    
    <script src="{{ asset('js/script.js') }}"></script>

    @yield('script')
  </body>
  </html>
