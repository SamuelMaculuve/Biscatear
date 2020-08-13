<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/elegant-icons.css')}}" type="text/css">

    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('_img/favicon.ico')}}">
    <!-- Google Fonts
		============================================ -->
    <link href="{{asset('_fonts/notika-icon.eot')}}" rel="stylesheet">
    <link href="{{asset('_fonts/notika-icon.eot')}}" rel="stylesheet">
    <link href="{{asset('_fonts/notika-icon.ttf')}}" rel="stylesheet">
    <link href="{{asset('_fonts/notika-icon.woff')}}" rel="stylesheet">
    <link href="{{asset('_fonts/notika-icon.svg')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('_css/chosen/chosen.css')}}">
    <script src="{{asset('_js/chosen/chosen.jquery.js')}}"></script>

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">

{{--    <link rel="stylesheet" href="{{asset('_css/bootstrap.min.css')}}">--}}
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('_css/font-awesome.min.css')}}">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('_css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('_css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{asset('_css/owl.transitions.css')}}">
    <!-- meanmenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('_css/meanmenu/meanmenu.min.css')}}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('_css/animate.css')}}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('_css/normalize.css')}}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('_css/scrollbar/jquery.mCustomScrollbar.min.css')}}">
    <!-- jvectormap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('_css/jvectormap/jquery-jvectormap-2.0.3.css')}}">
    <!-- notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('_css/notika-custom-icon.css')}}">
    <!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('_css/wave/waves.min.css')}}">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('_css/main.css')}}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('_css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('_css/responsive.css')}}">
    <!-- modernizr JS
		============================================ -->
    <script src="{{asset('_js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!-- Start Header Top Area -->
<style>
    header.header {
        background-color: #e7f2f !important;
        background: #A5C6E5;
    }
    #register{
        z-index: 1;
        min-width: 152px;
        height: 46px;
        line-height: 50px;
        font-size: 16px;
        font-weight: 600;
        display: inline-block;
        padding: 0px 7px;
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
/*    Detalhes*/
    .product-details {
        padding-top: 70px;
        padding-bottom: 50px;
    }

    .product__details__pic {
        overflow: hidden;
    }

    .product__details__pic__left {
        width: 22%;
        max-height: 574px;
        float: left;
        overflow-y: auto;
    }

    .product__details__pic__left .pt {
        display: block;
        margin-bottom: 20px;
        cursor: pointer;
        position: relative;
    }

    .product__details__pic__left .pt::after {
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        left: 0;
        top: 0;
        background: #000;
        opacity: 0;
        -webkit-transition: all 0.3s;
        -o-transition: all 0.3s;
        transition: all 0.3s;
    }

    .product__details__pic__left .pt.active::after {
        opacity: 0.3;
    }

    .product__details__pic__left .pt:last-child {
        margin-bottom: 0;
    }

    .product__details__pic__left .pt img {
        min-width: 100%;
    }

    .product__details__slider__content {
        width: calc(78% - 20px);
        float: left;
        margin-left: 20px;
    }

    .product__details__pic__slider.owl-carousel .owl-nav button {
        position: absolute;
        left: 10px;
        top: 50%;
        font-size: 22px;
        color: #111111;
        width: 40px;
        height: 40px;
        background: rgba(255, 255, 255, 0.7);
        border-radius: 50%;
        line-height: 44px;
        text-align: center;
        margin-top: -20px;
    }

    .product__details__pic__slider.owl-carousel .owl-nav button.owl-next {
        left: auto;
        right: 10px;
    }

    .product__details__text h3 {
        color: #111111;
        font-weight: 600;
        text-transform: uppercase;
        margin-bottom: 12px;
    }

    .product__details__text h3 span {
        display: block;
        font-size: 14px;
        color: #444444;
        text-transform: none;
        font-weight: 400;
        margin-top: 5px;
    }

    .product__details__text .rating {
        margin-bottom: 16px;
    }

    .product__details__text .rating i {
        font-size: 12px;
        color: #e3c01c;
        margin-right: -4px;
    }

    .product__details__text .rating span {
        font-size: 12px;
        color: #666666;
        margin-left: 5px;
    }

    .product__details__text p {
        color: #444444;
        margin-bottom: 28px;
    }

    .product__details__price {
        font-size: 30px;
        font-weight: 600;
        color: #ca1515;
        margin-bottom: 30px;
    }

    .product__details__price span {
        font-size: 18px;
        color: #b1b0b0;
        text-decoration: line-through;
        margin-left: 10px;
        display: inline-block;
    }

    .quantity {
        float: left;
        margin-right: 10px;
        margin-bottom: 10px;
    }

    .quantity>span {
        font-size: 14px;
        color: #111111;
        font-weight: 600;
        float: left;
        margin-top: 14px;
        margin-right: 15px;
    }

    .pro-qty {
        height: 50px;
        width: 150px;
        border: 1px solid #ebebeb;
        border-radius: 50px;
        padding: 0 20px;
        overflow: hidden;
        display: inline-block;
    }

    .pro-qty .qtybtn {
        font-size: 14px;
        color: #666666;
        cursor: pointer;
        float: left;
        width: 12px;
        line-height: 46px;
    }

    .pro-qty input {
        font-size: 14px;
        color: #666666;
        font-weight: 500;
        border: none;
        float: left;
        width: 84px;
        text-align: center;
        height: 48px;
    }

    .product__details__button {
        overflow: hidden;
        margin-bottom: 25px;
    }

    .product__details__button .cart-btn {
        display: inline-block;
        font-size: 14px;
        color: #ffffff;
        background: #ca1515;
        font-weight: 600;
        text-transform: uppercase;
        padding: 14px 30px 15px;
        border-radius: 50px;
        float: left;
        margin-right: 10px;
        margin-bottom: 10px;
    }

    .product__details__button ul {
        float: left;
    }

    .product__details__button ul li {
        list-style: none;
        display: inline-block;
        margin-right: 5px;
    }

    .product__details__button ul li:last-child {
        margin-right: 0;
    }

    .product__details__button ul li a {
        display: inline-block;
        height: 50px;
        width: 50px;
        border: 1px solid #ebebeb;
        border-radius: 50%;
        line-height: 50px;
        text-align: center;
        padding-top: 1px;
    }

    .product__details__button ul li a span {
        font-size: 18px;
        color: #666666;
    }

    .product__details__widget {
        border-top: 1px solid #ebebeb;
        padding-top: 35px;
    }

    .product__details__widget ul li {
        list-style: none;
        margin-bottom: 10px;
    }

    .product__details__widget ul li:last-child {
        margin-bottom: 0;
    }

    .product__details__widget ul li span {
        display: inline-block;
        font-size: 14px;
        font-weight: 600;
        color: #111111;
        width: 150px;
        float: left;
    }

    .product__details__widget ul li .stock__checkbox {
        overflow: hidden;
    }

    .product__details__widget ul li .stock__checkbox label {
        display: block;
        padding-left: 20px;
        font-size: 14px;
        color: #666666;
        position: relative;
        cursor: pointer;
    }

    .product__details__widget ul li .stock__checkbox label input {
        position: absolute;
        visibility: hidden;
    }

    .product__details__widget ul li .stock__checkbox label input:checked~.checkmark {
        border-color: #ca1515;
    }

    .product__details__widget ul li .stock__checkbox label input:checked~.checkmark:after {
        border-color: #ca1515;
        opacity: 1;
    }

    .product__details__widget ul li .stock__checkbox label .checkmark {
        position: absolute;
        left: 0;
        top: 5px;
        height: 10px;
        width: 10px;
        border: 1px solid #444444;
        border-radius: 2px;
    }

    .product__details__widget ul li .stock__checkbox label .checkmark:after {
        position: absolute;
        left: 0px;
        top: -2px;
        width: 11px;
        height: 5px;
        border: solid #ffffff;
        border-width: 1.5px 1.5px 0px 0px;
        -webkit-transform: rotate(127deg);
        -ms-transform: rotate(127deg);
        transform: rotate(127deg);
        opacity: 0;
        content: "";
    }

    .product__details__widget ul li .color__checkbox label {
        display: inline-block;
        cursor: pointer;
        position: relative;
        margin-right: 20px;
    }

    .product__details__widget ul li .color__checkbox label.active input~.checkmark:after {
        border-color: #ffffff;
        opacity: 1;
    }

    .product__details__widget ul li .color__checkbox label:last-child {
        margin-right: 0;
    }

    .product__details__widget ul li .color__checkbox label input {
        position: absolute;
        visibility: hidden;
    }

    .product__details__widget ul li .color__checkbox label input:checked~.checkmark:after {
        border-color: #ffffff;
        opacity: 1;
    }

    .product__details__widget ul li .color__checkbox label .checkmark {
        position: absolute;
        left: 0;
        top: -10px;
        height: 20px;
        width: 20px;
        background: #e31e2f;
        border-radius: 50%;
        content: "";
    }

    .product__details__widget ul li .color__checkbox label .checkmark.black-bg {
        background: #111111;
    }

    .product__details__widget ul li .color__checkbox label .checkmark.grey-bg {
        background: #e4aa8b;
    }

    .product__details__widget ul li .color__checkbox label .checkmark:after {
        position: absolute;
        left: 3px;
        top: 5px;
        width: 13px;
        height: 6px;
        border: solid #ffffff;
        border-width: 1.5px 1.5px 0px 0px;
        -webkit-transform: rotate(127deg);
        -ms-transform: rotate(127deg);
        transform: rotate(127deg);
        opacity: 0;
        content: "";
    }

    .product__details__widget ul li .size__btn label {
        font-size: 14px;
        color: #666666;
        text-transform: uppercase;
        cursor: pointer;
        margin-right: 10px;
        display: inline-block;
        margin-bottom: 0;
    }

    .product__details__widget ul li .size__btn label:last-child {
        margin-right: 0;
    }

    .product__details__widget ul li .size__btn label.active {
        color: #ca1515;
    }

    .product__details__widget ul li .size__btn label input {
        position: absolute;
        visibility: hidden;
    }

    .product__details__widget ul li p {
        margin-bottom: 0;
        color: #666666;
    }

    .product__details__tab {
        padding-top: 80px;
        margin-bottom: 65px;
    }

    /*.nav {*/
    /*    border-bottom: none;*/
    /*    -webkit-box-pack: center;*/
    /*    -ms-flex-pack: center;*/
    /*    justify-content: center;*/
    /*    position: relative;*/
    /*    margin-bottom: 40px;*/
    /*}*/

    /*.nav::before {*/
    /*    position: absolute;*/
    /*    left: 0;*/
    /*    top: 13px;*/
    /*    height: 1px;*/
    /*    width: 335px;*/
    /*    background: #e1e1e1;*/
    /*    content: "";*/
    /*}*/

    /*.nav::after {*/
    /*    position: absolute;*/
    /*    right: 0;*/
    /*    top: 13px;*/
    /*    height: 1px;*/
    /*    width: 335px;*/
    /*    background: #e1e1e1;*/
    /*    content: "";*/
    /*}*/

    /*.nav-item {*/
    /*    margin-right: 46px;*/
    /*}*/

    /*.nav-item:last-child {*/
    /*    margin-right: 0;*/
    /*}*/

    /*.nav-item .nav-link {*/
    /*    font-size: 18px;*/
    /*    color: #666666;*/
    /*    font-weight: 600;*/
    /*    border: none;*/
    /*    border-top-left-radius: 0;*/
    /*    border-top-right-radius: 0;*/
    /*    padding: 0;*/
    /*}*/

    /*.nav-item .nav-link.active {*/
    /*    color: #111111;*/
    /*}*/

    /*.tab-content .tab-pane h6 {*/
    /*    color: #666666;*/
    /*    font-weight: 600;*/
    /*    margin-bottom: 24px;*/
    /*}*/

    /*.tab-content .tab-pane p:last-child {*/
    /*    margin-bottom: 0;*/
    /*}*/

    .related__title h5 {
        font-size: 20px;
        color: #111111;
        font-weight: 600;
        text-transform: uppercase;
        margin-bottom: 35px;
    }
/*comentarios*/
    .chat
    {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .chat li
    {
        margin-bottom: 10px;
        padding-bottom: 5px;
        border-bottom: 1px dotted #B3A9A9;
    }

    .chat li.left .chat-body
    {
        margin-left: 60px;
    }

    .chat li.right .chat-body
    {
        margin-right: 60px;
    }


    .chat li .chat-body p
    {
        margin: 0;
        color: #777777;
    }

    .panel .slidedown .glyphicon, .chat .glyphicon
    {
        margin-right: 5px;
    }

    .panel-body
    {
        overflow-y: scroll;
        height: 250px;
    }

    ::-webkit-scrollbar-track
    {
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
        background-color: #F5F5F5;
    }

    ::-webkit-scrollbar
    {
        width: 12px;
        background-color: #F5F5F5;
    }

    ::-webkit-scrollbar-thumb
    {
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
        background-color: #555;
    }
/*profile*/
    .emp-profile{
        padding: 3%;
        margin-top: 3%;
        margin-bottom: 3%;
        border-radius: 0.5rem;
        background: #fff;
    }
    .profile-img{
        text-align: center;
    }
    .profile-img img{
        width: 70%;
        height: 100%;
    }
    .profile-img .file {
        position: relative;
        overflow: hidden;
        margin-top: -20%;
        width: 70%;
        border: none;
        border-radius: 0;
        font-size: 15px;
        background: #212529b8;
    }
    .profile-img .file input {
        position: absolute;
        opacity: 0;
        right: 0;
        top: 0;
    }
    .profile-head h5{
        color: #333;
    }
    .profile-head h6{
        color: #0062cc;
    }
    .profile-edit-btn{
        border: none;
        border-radius: 1.5rem;
        width: 70%;
        padding: 2%;
        font-weight: 600;
        color: #6c757d;
        cursor: pointer;
    }
    .proile-rating{
        font-size: 12px;
        color: #818182;
        margin-top: 5%;
    }
    .proile-rating span{
        color: #495057;
        font-size: 15px;
        font-weight: 600;
    }
    .profile-head .nav-tabs{
        margin-bottom:5%;
    }
    .profile-head .nav-tabs .nav-link{
        font-weight:600;
        border: none;
    }
    .profile-head .nav-tabs .nav-link.active{
        border: none;
        border-bottom:2px solid #0062cc;
    }
    .profile-work{
        padding: 14%;
        margin-top: -15%;
    }
    .profile-work p{
        font-size: 12px;
        color: #818182;
        font-weight: 600;
        margin-top: 10%;
    }
    .profile-work a{
        text-decoration: none;
        color: #495057;
        font-weight: 600;
        font-size: 14px;
    }
    .profile-work ul{
        list-style: none;
    }
    .profile-tab label{
        font-weight: 600;
    }
    .profile-tab p{
        font-weight: 600;
        color: #0062cc;
    }
</style>
</head>

<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!-- Start Header Top Area -->
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
                        <li><a href="#">Atualizações</a>
                            <ul class="dropdown">
                                <li><a href="./about.html">About Us</a></li>
                                <li><a href="./services-details.html">Services Details</a></li>
                                <li><a href="./shop-details.html">Shop Details</a></li>
                                <li><a href="./blog-details.html">Blog Details</a></li>
                                <li><a href="./contact.html">Contact</a></li>
                            </ul>
                        </li>
                        {{--                <li><a href="./services.html">Sobre Nos</a></li>--}}
                        <li><a id="register" href="./shop.html">Publicar Projecto</a></li>
                        <li><a href="#"><b><i class="fa fa-user"></i></b></a>
                            <ul class="dropdown">
                                <li><a href="./about.html">About Us</a></li>
                                <li><a href="./services-details.html">Services Details</a></li>
                                <li><a href="./shop-details.html">Shop Details</a></li>
                                <li><a href="./blog-details.html">Blog Details</a></li>
                                <li><a href="./contact.html">Contact</a></li>
                            </ul>
                        </li>
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
<!-- End Header Top Area -->
<!-- Mobile Menu start -->
<div class="mobile-menu-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul class="mobile-menu-nav">
                            <li><a data-toggle="collapse" data-target="#Charts" href="#">Painel</a>
                                {{--                                <ul class="collapse dropdown-header-top">--}}
                                {{--                                    <li><a href="index.html">Dashboard One</a></li>--}}
                                {{--                                    <li><a href="index-2.html">Dashboard Two</a></li>--}}
                                {{--                                    <li><a href="index-3.html">Dashboard Three</a></li>--}}
                                {{--                                    <li><a href="index-4.html">Dashboard Four</a></li>--}}
                                {{--                                    <li><a href="analytics.html">Analytics</a></li>--}}
                                {{--                                    <li><a href="widgets.html">Widgets</a></li>--}}
                                {{--                                </ul>--}}
                            </li>
                            <li><a data-toggle="collapse" data-target="#demoevent" href="#">Email</a>
                                <ul id="demoevent" class="collapse dropdown-header-top">
                                    <li><a href="inbox.html">Inbox</a></li>
                                    <li><a href="view-email.html">View Email</a></li>
                                    <li><a href="compose-email.html">Compose Email</a></li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#democrou" href="#">Interface</a>
                                <ul id="democrou" class="collapse dropdown-header-top">
                                    <li><a href="animations.html">Animations</a></li>
                                    <li><a href="google-map.html">Google Map</a></li>
                                    <li><a href="data-map.html">Data Maps</a></li>
                                    <li><a href="code-editor.html">Code Editor</a></li>
                                    <li><a href="image-cropper.html">Images Cropper</a></li>
                                    <li><a href="wizard.html">Wizard</a></li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#demolibra" href="#">Charts</a>
                                <ul id="demolibra" class="collapse dropdown-header-top">
                                    <li><a href="flot-charts.html">Flot Charts</a></li>
                                    <li><a href="bar-charts.html">Bar Charts</a></li>
                                    <li><a href="line-charts.html">Line Charts</a></li>
                                    <li><a href="area-charts.html">Area Charts</a></li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#demodepart" href="#">Tables</a>
                                <ul id="demodepart" class="collapse dropdown-header-top">
                                    <li><a href="normal-table.html">Normal Table</a></li>
                                    <li><a href="data-table.html">Data Table</a></li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#demo" href="#">Forms</a>
                                <ul id="demo" class="collapse dropdown-header-top">
                                    <li><a href="form-elements.html">Form Elements</a></li>
                                    <li><a href="form-components.html">Form Components</a></li>
                                    <li><a href="form-examples.html">Form Examples</a></li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">App views</a>
                                <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                    <li><a href="notification.html">Notifications</a>
                                    </li>
                                    <li><a href="alert.html">Alerts</a>
                                    </li>
                                    <li><a href="modals.html">Modals</a>
                                    </li>
                                    <li><a href="buttons.html">Buttons</a>
                                    </li>
                                    <li><a href="tabs.html">Tabs</a>
                                    </li>
                                    <li><a href="accordion.html">Accordion</a>
                                    </li>
                                    <li><a href="dialog.html">Dialogs</a>
                                    </li>
                                    <li><a href="popovers.html">Popovers</a>
                                    </li>
                                    <li><a href="tooltips.html">Tooltips</a>
                                    </li>
                                    <li><a href="dropdown.html">Dropdowns</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Pages</a>
                                <ul id="Pagemob" class="collapse dropdown-header-top">
                                    <li><a href="contact.html">Contact</a>
                                    </li>
                                    <li><a href="invoice.html">Invoice</a>
                                    </li>
                                    <li><a href="typography.html">Typography</a>
                                    </li>
                                    <li><a href="color.html">Color</a>
                                    </li>
                                    <li><a href="login-register.html">Login Register</a>
                                    </li>
                                    <li><a href="404.html">404 Page</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Mobile Menu end -->
<!-- Main Menu area start-->
<div class="main-menu-area pt-3" style="background-color: #1568AD">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                    <li class=""><a href="/dashboard"><i class="fa fa-home"></i> Painel</a>
                    </li>
                    <li><a data-toggle="tab" href="#mailbox"><i class="fa fa-briefcase"></i> Meus Projectos</a>
                    </li>
                    {{--                    Freelacer--}}
                    <li><a data-toggle="tab" href="#Interface"><i class="fa fa-tasks"></i> Trabalhos</a>
                    </li>
                    <li><a data-toggle="tab" href="#Charts"><i class="fa fa-shield"></i> Freelancer</a>
{{--                    </li>--}}
{{--                    <li><a data-toggle="tab" href="#Tables"><i class="notika-icon notika-windows"></i> Tables</a>--}}
{{--                    </li>--}}
{{--                    <li><a data-toggle="tab" href="#Forms"><i class="notika-icon notika-form"></i> Forms</a>--}}
{{--                    </li>--}}
{{--                    <li><a data-toggle="tab" href="#Appviews"><i class="notika-icon notika-app"></i> App views</a>--}}
{{--                    </li>--}}
{{--                    <li><a data-toggle="tab" href="#Page"><i class="notika-icon notika-support"></i> Pages</a>--}}
{{--                    </li>--}}
                </ul>
                <div class="tab-content custom-menu-content">
                    <div id="Home" class="tab-pane in  notika-tab-menu-bg animated flipInX">
{{--                        <ul class="notika-main-menu-dropdown">--}}
{{--                            <li><a href="index.html">Dashboard One</a>--}}
{{--                            </li>--}}
{{--                            <li><a href="index-2.html">Dashboard Two</a>--}}
{{--                            </li>--}}
{{--                            <li><a href="index-3.html">Dashboard Three</a>--}}
{{--                            </li>--}}
{{--                            <li><a href="index-4.html">Dashboard Four</a>--}}
{{--                            </li>--}}
{{--                            <li><a href="analytics.html">Analytics</a>--}}
{{--                            </li>--}}
{{--                            <li><a href="widgets.html">Widgets</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
                    </div>
                    <div id="mailbox" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="/myProject">Tralhos pedentes</a>
                            </li>
                            <li><a href="view-email.html">Trabalhos feitos</a>
                            </li>
                            <li><a href="compose-email.html">Compose Email</a>
                            </li>
                        </ul>
                    </div>
                    <div id="Interface" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="animations.html" data-toggle="modal" data-target="#myModalone">Cabeleireiro</a>
                            </li>
                            <li><a href="animations.html" data-toggle="modal" data-target="#myModalone">Canalização</a>
                            </li>
                            <li><a href="animations.html" data-toggle="modal" data-target="#myModalone">Carpintaria</a>
                            </li>
                            <li><a href="animations.html" data-toggle="modal" data-target="#myModalone">Construção e Reparação</a>
                            </li>
                            <li><a href="animations.html" data-toggle="modal" data-target="#myModalone">Costura</a>
                            </li>
                            <li><a href="animations.html">Electricidade</a>
                            </li>
                            <li><a href="animations.html">Entregas</a>
                            </li>
                            <li><a href="animations.html">Estofagem</a>
                            </li>
                            <li><a href="animations.html">Instalação de TV</a>
                            </li>

                        </ul>
                    </div>
                    <div id="Charts" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="/freelancer">Flot Charts</a>
                            </li>
                            <li><a href="bar-charts.html">Bar Charts</a>
                            </li>
                            <li><a href="line-charts.html">Line Charts</a>
                            </li>
                            <li><a href="area-charts.html">Area Charts</a>
                            </li>
                        </ul>
                    </div>
                    <div id="Tables" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="normal-table.html">Normal Table</a>
                            </li>
                            <li><a href="data-table.html">Data Table</a>
                            </li>
                        </ul>
                    </div>
                    <div id="Forms" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="form-elements.html">Form Elements</a>
                            </li>
                            <li><a href="form-components.html">Form Components</a>
                            </li>
                            <li><a href="form-examples.html">Form Examples</a>
                            </li>
                        </ul>
                    </div>
                    <div id="Appviews" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="notification.html">Notifications</a>
                            </li>
                            <li><a href="alert.html">Alerts</a>
                            </li>
                            <li><a href="modals.html">Modals</a>
                            </li>
                            <li><a href="buttons.html">Buttons</a>
                            </li>
                            <li><a href="tabs.html">Tabs</a>
                            </li>
                            <li><a href="accordion.html">Accordion</a>
                            </li>
                            <li><a href="dialog.html">Dialogs</a>
                            </li>
                            <li><a href="popovers.html">Popovers</a>
                            </li>
                            <li><a href="tooltips.html">Tooltips</a>
                            </li>
                            <li><a href="dropdown.html">Dropdowns</a>
                            </li>
                        </ul>
                    </div>
                    <div id="Page" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="contact.html">Contact</a>
                            </li>
                            <li><a href="invoice.html">Invoice</a>
                            </li>
                            <li><a href="typography.html">Typography</a>
                            </li>
                            <li><a href="color.html">Color</a>
                            </li>
                            <li><a href="login-register.html">Login Register</a>
                            </li>
                            <li><a href="404.html">404 Page</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Menu area End-->
<!-- Start Status area -->
@yield('content')
</div>
<!-- End Status area-->
<div class="modal fade" id="myModalone" role="dialog">
    <div class="modal-dialog modals-default">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <h2>Modal title</h2>
                <p>Curabitur blandit mollis lacus. Nulla sit amet est. Suspendisse nisl elit, rhoncus eget, elementum ac, condimentum eget, diam. Donec mi odio, faucibus at, scelerisque quis, convallis in, nisi. Cras sagittis.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Save changes</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- End Realtime sts area-->
<!-- Start Footer area-->
<div class="footer-copyright-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="footer-copy-right">
                    <p>Copyright © 2018
                        . All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Footer area-->
<!-- jquery
    ============================================ -->
<script src="{{asset('_js/vendor/jquery-1.12.4.min.js')}}"></script>
<!-- bootstrap JS
    ============================================ -->
{{--<script src="{{asset('_js/bootstrap.min.js')}}"></script>--}}
<!-- wow JS
    ============================================ -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>

<script src="{{asset('_js/wow.min.js')}}"></script>
<!-- price-slider JS
    ============================================ -->
<script src="{{asset('_js/jquery-price-slider.js')}}"></script>
<!-- owl.carousel JS
    ============================================ -->
<script src="{{asset('_js/owl.carousel.min.js')}}"></script>
<!-- scrollUp JS
    ============================================ -->
<script src="{{asset('_js/jquery.scrollUp.min.js')}}"></script>
<!-- meanmenu JS
    ============================================ -->
<script src="{{asset('_js/meanmenu/jquery.meanmenu.js')}}"></script>
<!-- counterup JS
    ============================================ -->
{{--<script src="{{asset('_js/counterup/jquery.counterup.min.js')}}"></script>--}}
{{--<script src="{{asset('_js/counterup/waypoints.min.js')}}"></script>--}}
{{--<script src="{{asset('_js/counterup/counterup-active.js')}}"></script>--}}
<!-- mCustomScrollbar JS
    ============================================ -->
<script src="{{asset('_js/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<!-- jvectormap JS
    ============================================ -->
{{--<script src="{{asset('_js/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>--}}
{{--<script src="{{asset('_js/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>--}}
{{--<script src="{{asset('_js/jvectormap/jvectormap-active.js')}}"></script>--}}
<!-- sparkline JS
    ============================================ -->
{{--<script src="{{asset('_js/sparkline/jquery.sparkline.min.js')}}"></script>--}}
{{--<script src="{{asset('_js/sparkline/sparkline-active.js')}}"></script>--}}
<!-- sparkline JS
    ============================================ -->
{{--<script src="{{asset('_js/flot/jquery.flot.js')}}"></script>--}}
{{--<script src="{{asset('_js/flot/jquery.flot.resize.js')}}"></script>--}}
{{--<script src="{{asset('_js/flot/curvedLines.js')}}"></script>--}}
{{--<script src="{{asset('_js/flot/flot-active.js')}}"></script>--}}
<!-- knob JS
    ============================================ -->
<script src="{{asset('_js/knob/jquery.knob.js')}}"></script>
<script src="{{asset('_js/knob/jquery.appear.js')}}"></script>
<script src="{{asset('_js/knob/knob-active.js')}}"></script>
<!--  wave JS
    ============================================ -->
<script src="{{asset('_js/wave/waves.min.js')}}"></script>
<script src="{{asset('_js/wave/wave-active.js')}}"></script>
<!--  todo JS
    ============================================ -->
<script src="{{asset('_js/todo/jquery.todo.js')}}"></script>
<!-- plugins JS
    ============================================ -->
<script src="{{asset('_js/plugins.js')}}"></script>
<!--  Chat JS
    ============================================ -->
<script src="{{asset('{_js/chat/moment.min.js')}}"></script>
<script src="{{asset('_js/chat/jquery.chat.js')}}"></script>
<!-- main JS
    ============================================ -->
<script src="{{asset('_js/main.js')}}"></script>
<!-- tawk chat JS
{{--    ============================================ -->--}}
{{--<script src="{{asset('_js/tawk-chat.js')}}"></script>--}}
</body>

</html>
