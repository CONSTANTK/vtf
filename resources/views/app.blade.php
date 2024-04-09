<!DOCTYPE html>
<html lang="en">
<!-- Basic -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!-- Site Metas -->

<title>{{$data['pageTitle'] ?? 'Volta Taekwondo'}}</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<!-- Site Icons -->
<link rel="shortcut icon" href="" type="image/x-icon" />
<link rel="apple-touch-icon" href="">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{asset('vtf/css/bootstrap.min.css')}}">
<!-- Site CSS -->
<link rel="stylesheet" href="{{asset('vtf/style.css')}}">
<!-- Colors CSS -->
<link rel="stylesheet" href="{{asset('vtf/css/colors.css')}}">
<!-- ALL VERSION CSS -->
<link rel="stylesheet" href="{{asset('vtf/css/versions.css')}}">
<!-- Responsive CSS -->
<link rel="stylesheet" href="{{asset('vtf/css/responsive.css')}}">
<!-- Custom CSS -->
<link rel="stylesheet" href="{{asset('vtf/css/custom.css')}}">
<!-- font family -->
<link href="{{asset('vtf/https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i')}}" rel="stylesheet">
<!-- end font family -->
<link rel="stylesheet" href="{{asset('vtf/css/3dslider.css')}}" />
    @include('Front.partials.css.banner-background')
    @stack('styles')

<script src="{{asset('vtf/http://code.jquery.com/jquery-1.11.1.min.js')}}"></script>
<link href="{{asset('vtf/http://www.jqueryscript.net/css/jquerysctipttop.css')}}" rel="stylesheet" type="text/css">
<script src="{{asset('vtf/js/3dslider.js')}}"></script>



</head>
<body class="game_info" data-spy="scroll" data-target=".header">
<!-- LOADER -->
<div id="preloader">
    <img class="preloader" src="{{asset('vtf/images/loading-img.gif')}}" alt="">
</div>

<!-- END LOADER -->

@include('Front.partials.top-nav-bar')

@yield('content')

<footer id="footer" class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="full">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="#"><img src="{{asset('vtf/images/footer-logo.png')}}" alt="#" /></a>
                        </div>
                        <p>Most of our events have hard and easy route choices as we are always keen to encourage new riders.</p>
                        <ul class="social-icons style-4 pull-left">
                            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
                            <li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="full">
                    <div class="footer-widget">
                        <h3>Menu</h3>
                        <ul class="footer-menu">
                            <li><a href="{{route('front.about')}}">About Us</a></li>
                            <li><a href="{{route('front.team')}}">Our Team</a></li>
                            <li><a href="{{route('front.news')}}">Latest News</a></li>
                            <li><a href="{{route('front.match')}}">Recent Matchs</a></li>
                            <li><a href="{{route('front.blog')}}">Our Blog</a></li>
                            <li><a href="{{route('front.contact')}}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="full">
                    <div class="footer-widget">
                        <h3>Contact us</h3>
                        <ul class="address-list">
                            <li><i class="fa fa-map-marker"></i> You can contact Volta Taekwondo club on the following.</li>
                            <li><i class="fa fa-phone"></i> +233 24 2989 197</li>
                            <li><i style="font-size:20px;top:5px;" class="fa fa-envelope"></i> vtf@gmail.com</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="full">
                    <div class="contact-footer">
                        <iframe src="{{asset('vtf/https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d120615.72236587871!2d73.07890527988283!3d19.140910987164396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1527759905404')}}" width="600" height="350" frameborder="0" style="{{asset('vtf/border:0')}}" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <p>Copyright © 2018 Distributed by <a href="{{asset('vtf/https://themewagon.com/')}}" target="_blank">ThemeWagon</a></p>
        </div>
    </div>
</footer>

@stack('scripts')

<a href="{{asset('vtf/#home')}}" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
<!-- ALL JS FILES -->
<script src="{{asset('vtf/js/all.js')}}"></script>
<!-- ALL PLUGINS -->
<script src="{{asset('vtf/js/custom.js')}}"></script>
</body>
</html>
