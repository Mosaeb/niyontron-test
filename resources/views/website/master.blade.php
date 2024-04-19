<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta Tags -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <!-- Title -->
    <title>Niyontron</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('/')}}website/assets/images/favicon.ico">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">

    <!-- Css Link -->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}website/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}website/assets/css/bootstrap-slider.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}website/assets/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}website/assets/css/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}website/assets/css/layerslider.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}website/assets/css/color.css" id="color-change">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}website/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}website/assets/webfonts/flaticon/flaticon.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}website/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

<!--	Page Loader -->
<!-- <div class="page-loader position-fixed z-index-9999 w-100 bg-white vh-100">
<div class="d-flex justify-content-center y-middle position-relative">
  <div class="spinner-border" role="status">
    <span class="sr-only">Loading...</span>
  </div>
</div>
</div> -->

{{--Header here navigation start}}

{{--Header here navigation ends--}}



<div id="page-wrapper" class="bg-white">
    <!--============== Header One Section Start ==============-->
    <header id="header" class="fixed-header-bg-white">
        <div class="main-nav bg-white">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <nav class="navbar navbar-expand-lg navbar-light secondary-nav hover-primary-nav">
                            <a class="navbar-brand" href="{{route('home')}}"><img class="nav-logo" src="{{asset('/')}}website/assets/img/logo1.png" alt=""></a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mx-auto">
                                    <li class="nav-item"> <a class="nav-link " href="{{route('home')}}" >Home</a>
                                    </li>
                                    <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="{{route('services')}}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Service</a>
                                        <ul class="dropdown-menu">
                                            <li class=""> <a class=" dropdown-item" href="{{route('services')}}">services</a></li>
                                            <li class="dropdown"> <a class=" dropdown-item" href="{{route('service-providers')}}">service-providers</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="{{route('property-list')}}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Property</a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown"> <a class=" dropdown-item" href="{{route('property-list')}}">Property List</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"> <a class="nav-link" href="{{route('contact')}}">Contact</a> </li>
                                </ul>
                                <a href="{{route('login')}}" class="hover-text-primary text-white me-3 px-4 py-1 rounded rounded-3" style="background-color: rgba(95, 98, 139, 1)">Login</a>
                                <a href="{{route('register.index')}}" class="hover-text-primary text-white me-3 px-4 py-1 rounded rounded-3" style="background-color: rgba(95, 98, 139, 1)" >Register</a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--============== Header One Section End ==============-->

@yield('body')




<!--============== Subscribe Section Start ==============-->
    <div class="full-row bg-gray p-0">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="divider py-80">
                        <div class="row align-items-center g-3">
                            <div class="col-lg-7">
                                <h4 class="text-secondary mb-0">Enter your email for subscribe to get monthly newslatter</h4>
                            </div>
                            <div class="col-lg-5">
                                <form class="subscribe">
                                    <div class="input-group">
                                        <input type="email" class="form-control" placeholder="Enter your email">
                                        <button class="btn text-white"  style="background-color: rgba(95, 98, 139, 1)" type="submit">Subscribe</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============== Subscribe Section End ==============-->



    <!--============== Footer Section Start ==============-->
    <footer class="full-row bg-gray p-0">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="divider py-80">
                        <div class="row g-4">
                            <div class="col-lg-4">
                                <div class="footer-widget">
                                    <div class="footer-logo mb-4">
                                        <a href="#"><img class="logo-bottom" src="{{asset('/')}}website/assets/img/logo1.png" alt="image"></a>
                                    </div>
                                    <p class="pb-20">Risus commodo congue augue phasellus morbi hymenaeos ante tincidunt eu orci dictum bibendum lacus platea primis mi lacinia felis gravida natoque bibendum cubilia montes tristique et arcu blandit risus. Lobortis
                                        dignissim nam.
                                    </p>
                                    <a class="btn text-white mt-4 rounded rounded-3" style="background-color: rgba(95, 98, 139, 1)"  href="{{route('register.index')}}">Register Now</a>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="row row-cols-md-3 row-cols-1">
                                    <div class="col">
                                        <div class="footer-widget footer-nav">
                                            <h4 class="widget-title text-secondary double-down-line-left position-relative">Others</h4>
                                            <ul>
                                                <li><a href="#">Terms and Condition</a></li>
                                                <li><a href="#">Get Support</a></li>
                                                <li><a href="#">Freequenly Ask Question</a></li>
                                                <li><a href="{{route('contact')}}">Contact</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="footer-widget footer-nav">
                                            <h4 class="widget-title text-secondary double-down-line-left position-relative">Quick Links</h4>
                                            <ul>
                                                <li><a href="#">About Us</a></li>
                                                <li><a href="#">Property List</a></li>
                                                <li><a href="#">services</a></li>
                                                <li><a href="#">service-providers</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="footer-widget">
                                            <h4 class="widget-title text-secondary double-down-line-left position-relative">Contact Us</h4>
                                            <ul>
                                                <li>Collins Street West, Victoria 8007, Australia</li>
                                                <li>+1 246-345-0695</li>
                                                <li>helpline@homex.com</li>
                                            </ul>
                                        </div>
                                        <div class="footer-widget media-widget mt-4 text-secondary hover-text-primary">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-youtube-square"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright Start -->
{{--        <div class="copyright">--}}
{{--            <div class="container">--}}
{{--                <div class="row row-cols-sm-2 row-cols-1">--}}
{{--                    <div class="col"> <span>© 2021 Homex All right reserved</span> </div>--}}
{{--                    <div class="col">--}}
{{--                        <ul class="line-menu text-ordinary float-end">--}}
{{--                            <li><a href="#">Privacy & Policy</a></li>--}}
{{--                            <li>|</li>--}}
{{--                            <li><a href="#"> Site Map</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <!-- Copyright End -->
    </footer>
    <!--============== Footer Section End ==============-->



    <!-- Scroll to top -->
<a href="#" class="bg-secondary text-white" id="scroll"><i class="fas fa-angle-up"></i></a>
<!-- End Scroll To top -->
</div>
<!-- Wrapper End -->

<!-- Javascript Files -->
<script src="{{asset('/')}}website/assets/js/jquery.min.js"></script>
<!--jQuery Layer Slider -->
<script src="{{asset('/')}}website/assets/js/greensock.js"></script>
<script src="{{asset('/')}}website/assets/js/layerslider.transitions.js"></script>
<script src="{{asset('/')}}website/assets/js/layerslider.kreaturamedia.jquery.js"></script>
<!--jQuery Layer Slider -->
<script src="{{asset('/')}}website/assets/js/popper.min.js"></script>
<script src="{{asset('/')}}website/assets/js/bootstrap.min.js"></script>
<script src="{{asset('/')}}website/assets/js/owl.carousel.min.js"></script>
<script src="{{asset('/')}}website/assets/js/tmpl.js"></script>
<script src="{{asset('/')}}website/assets/js/jquery.dependClass-0.1.js"></script>
<script src="{{asset('/')}}website/assets/js/draggable-0.1.js"></script>
<script src="{{asset('/')}}website/assets/js/jquery.slider.js"></script>
<script src="{{asset('/')}}website/assets/js/wow.js"></script>
<script src="{{asset('/')}}website/assets/js/YouTubePopUp.jquery.js"></script>
<script src="{{asset('/')}}website/assets/js/validate.js"></script>
<script src="{{asset('/')}}website/assets/js/jquery.cookie.js"></script>
<script src="{{asset('/')}}website/assets/js/custom.js"></script>
</body>
</html>
