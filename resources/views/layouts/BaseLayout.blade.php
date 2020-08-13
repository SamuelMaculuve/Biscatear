<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Askbootstrap">
<meta name="author" content="Askbootstrap">
<title>VIDOE - Video Streaming Website HTML Template</title>
<!-- Css Styles -->
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('css/elegant-icons.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('css/nice-select.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('css/jquery-ui.min.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('css/slicknav.min.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
 <style>
     body{
         background-color: #F6F8FA;
     }
     #register{
         z-index: 1;
         min-width: 160px;
         height: 50px;
         line-height: 50px;
         font-size: 16px;
         font-weight: 600;
         display: inline-block;
         padding: 0 30px;
         text-align: center;
         text-transform: capitalize;
         color: #1583e9;
         border: none;
         border-radius: 50px;
         background-color: #ffffff;
         -webkit-transition-duration: 500ms;
         -o-transition-duration: 500ms;
         transition-duration: 500ms;
         -webkit-box-shadow: 0 6px 50px 8px rgba(21, 131, 233, 0.15);
         box-shadow: 0 6px 50px 8px rgba(21, 131, 233, 0.15);
     }
     header.header {
         background-color: #e7f2f !important;
         background: #A5C6E5;
     }

 </style>
</head>
<body>
<!-- Page Preloder -->
<div id="preloder">
<div class="loader"></div>
</div>

<!-- Offcanvas Menu Begin -->
<div class="offcanvas-menu-overlay"></div>
<div class="offcanvas-menu-wrapper">
<ul class="offcanvas__widget">
<li><a href="#" class="search-switch"><span class="icon_search"></span></a></li>
<li><a href="#"><span class="icon_user"></span></a></li>
</ul>
<div class="offcanvas__logo">
<a href="./index.html"><img src="img/logo.png" alt=""></a>
</div>
<div id="mobile-menu-wrap"></div>
<ul class="offcanvas__date">
<li><span class="icon_mobile"></span> (+123) 4567-7890-123</li>
<li><span class="icon_clock_alt"></span> Mon-Sat: 10:00 - 16:00 / Sunday Close</li>
</ul>
<div class="offcanvas__social">
<a href="#" class="map-btn">Find us on map <span class="arrow_right"></span></a>
<div class="header__right__social">
    <a href="#"><span class="social_facebook"></span></a>
    <a href="#"><span class="social_twitter"></span></a>
    <a href="#"><span class="social_vimeo"></span></a>
    <a href="#"><span class="social_pinterest"></span></a>
</div>
</div>
</div>
<!-- Offcanvas Menu End -->

<!-- Header Section Begin -->
<header class="header">
<div class="header__top">
<div class="container">
    <div class="row">
        <div class="col-lg-7">
            <ul class="header__top__left">
                <li><span class="icon_mobile"></span> (+123) 4567-7890-123</li>
                <li><span class="icon_clock_alt"></span> Mon-Sat: 10:00 - 16:00 / Sunday Close</li>
            </ul>
        </div>
        <div class="col-lg-5">
            <div class="header__top__right">
                <a href="#" class="map-btn">Find us on map <span class="arrow_right"></span></a>
                <div class="header__right__social">
                    <a href="#"><span class="social_facebook"></span></a>
                    <a href="#"><span class="social_twitter"></span></a>
                    <a href="#"><span class="social_vimeo"></span></a>
                    <a href="#"><span class="social_pinterest"></span></a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="container">
<div class="row">
    <div class="col-lg-3">
        <div class="header__logo">
            <a href="./index.html"><img src="img/logo.png" alt=""></a>
        </div>
    </div>
    <div class="col-lg-2">
{{--        <ul class="header__right">--}}
{{--            <li><a href="#" class="search-switch"><span class="icon_search"></span></a></li>--}}
{{--            <li><a href="#"><span class="icon_user"></span></a></li>--}}
{{--        </ul>--}}
    </div>
    <div class="col-lg-7">
        <nav class="header__menu">
            <ul>
                <li><a href="./index.html">Biscatear Pro</a></li>
{{--                <li><a href="./services.html">Sobre Nos</a></li>--}}
                <li><a id="register" href="./shop.html">Entrar</a></li>
                <li><a href="./shop.html">Registar-se</a></li>
                <li><a href="#" class="search-switch"><span class="icon_search"></span></a></li>
            </ul>
        </nav>
    </div>
</div>
<div class="canvas__open">
    <i class="fa fa-bars"></i>
</div>
</div>
</header>
<!-- Header Section End -->
@yield('content')
<!-- Footer Section Begin -->
<footer class="footer set-bg" data-setbg="img/footer-bg.jpg">
<div class="container">
<div class="footer__top">
<div class="row">
    <div class="col-lg-4 col-md-6">
        <div class="footer__top__item">
            <div class="footer__top__item__text">
                <img src="img/icon/ft-1.png" alt="">
                <p>Booking Repair</p>
                <h3>Appointment</h3>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6">
        <div class="footer__top__item">
            <div class="footer__top__item__text">
                <img src="img/icon/ft-2.png" alt="">
                <p>Contact Us Now!</p>
                <h3>123-4567-7890</h3>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6">
        <div class="footer__top__item last__item">
            <div class="footer__top__item__text">
                <img src="img/icon/ft-3.png" alt="">
                <p>Location</p>
                <h3>Find us on map</h3>
            </div>
        </div>
    </div>
</div>
</div>
<div class="footer__text">
<div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="footer__about">
            <div class="footer__logo">
                <img src="img/footer-logo.png" alt="">
            </div>
            <p>Class is also likely to be focused on slow and gentle movements so it's a great type of
                yoga to is also likely to be</p>
            <a href="#" class="primary-btn"><span class="icon_phone"></span> Contact Us</a>
        </div>
    </div>
    <div class="col-lg-2 offset-lg-1 col-md-5 offset-md-1 col-sm-6">
        <div class="footer__widget">
            <h5>Quick Link</h5>
            <ul>
                <li><a href="#">Purchase <span class="arrow_right"></span></a></li>
                <li><a href="#">Payment <span class="arrow_right"></span></a></li>
                <li><a href="#">Shipping <span class="arrow_right"></span></a></li>
                <li><a href="#">Return <span class="arrow_right"></span></a></li>
                <li><a href="#">Detailing <span class="arrow_right"></span></a></li>
            </ul>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="footer__news">
            <h5>News</h5>
            <a href="#" class="footer__news__item">
                Free Philippine Real Estate Ads...
                <span>November 11, 2020</span>
            </a>
            <a href="#" class="footer__news__item">
                Free Philippine Real Estate Ads...
                <span>November 11, 2020</span>
            </a>
            <a href="#" class="footer__news__item">
                Free Philippine Real Estate Ads...
                <span>November 11, 2020</span>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="footer__address">
            <h5>My Office</h5>
            <p>Address: 7986 Pennsylvania St. Rockville Centre, NY</p>
            <ul>
                <li>Fax: (+123) 4567-7890-123</li>
                <li>Mobile: (+123) 4567-7890-123</li>
                <li>Email: Hello@gmail.com</li>
            </ul>
        </div>
    </div>
</div>
</div>
</div>
</footer>
<div class="footer__copyright">
<div class="container">
<div class="row">
<div class="col-md-8">
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    <div class="footer__copyright__text">
        <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
    </div>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</div>
<div class="col-md-4">
    <div class="footer__copyright__social">
        <a href="#"><span class="social_facebook"></span></a>
        <a href="#" class="twitter"><span class="social_twitter"></span></a>
        <a href="#" class="vimeo"><span class="social_vimeo"></span></a>
        <a href="#" class="pinterest"><span class="social_pinterest"></span></a>
    </div>
</div>
</div>
</div>
</div>
<!-- Footer Section End -->

<!-- Search Begin -->
<div class="search-model">
<div class="h-100 d-flex align-items-center justify-content-center">
<div class="search-close-switch">+</div>
<form class="search-model-form">
<input type="text" id="search-input" placeholder="Search here.....">
</form>
</div>
</div>
<!-- Search End -->

<!-- Js Plugins -->
<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/jquery-ui.min.js')}}"></script>
<script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('js/jquery.slicknav.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
</body>

</html>
