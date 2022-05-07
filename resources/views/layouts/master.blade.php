<!DOCTYPE html>
<html lang="{{ App::getLocale() }}" dir="{{ trans('all.dir')}}">
<head>
    <title> @yield('title')</title>
    <meta charset=utf-8>
    <meta content="IE=edge" http-equiv=X-UA-Compatible>
    <meta content="width=device-width" name=viewport>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="@yield('title')">

    <meta property="og:title" content="@yield('og-title')">
    <meta property="og:description" content="@yield('og-description')">
    <meta property="og:image" content="@yield('og-image')">
    <meta property="og:url" content="@yield('og-url')">
    <meta name="twitter:card" content="summary_large_image">
     <link rel="shortcut icon" href="{{ asset('images/logo.png') }}">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png')}}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">
    <!-- Template Main CSS File -->
    @if(trans('all.dir') != 'rtl')
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}"/>
    @else
        <!-- <link rel="stylesheet" href="{{ asset('css/bootstrap-rtl.min.css')}}"/> -->
        <link rel="stylesheet" href="{{ asset('css/style-ar.css')}}"/>
    @endif
  </head>
  <body>
    @include('layouts.nav')
    <section class="content">
        @yield('content')
    </section>
    @include('layouts.footer')
  </body>
</html>
