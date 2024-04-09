@extends('app')


@section('breadcrumb')
    <div class="inner-information-text">
        <div class="container">
            <h3>About Us</h3>
            <ul class="breadcrumb">
                <li><a href="{{route('front.welcome')}}">Home</a></li>
                <li class="active">About Us</li>
            </ul>
        </div>
    </div>
@endsection


@section('content')
<section id="contant" class="contant main-heading" style="{{asset('vtf/padding-bottom:0;margin-bottom:-1px;position:relative;z-index:1;')}}">
    <div class="aboutus">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="col-md-7 col-sm-7 col-xs-12">
                        <div class="full">
                            <h3>SHORT HISTORY OF VOLTA TAEKWONDO</h3>
                            <p>The Volta Taekwondo club was founded by Mr. Frederick Martey in the year 1999. He started the club with just 5 athletes including the founder himself.
                               Out of the 5 athletes, 3 were under the age of 15. Out of his love for the game, he single-handedly funded the club from his own pocket for 5 years until the athletes have decided to start paying monthly dues.
                               Within 2 years, the number of athletes grew to more than 50. Today, Volta Taekwondo Club has about 5 branches, 2 of which are in Ho.
                            </p>
                            <ul class="icon-list">
                                <li><i class="fa fa-angle-right"></i> Voluptate illum dolore ita ipsum</li>
                                <li><i class="fa fa-angle-right"></i> Labore admodum ita multos malis ea nam nam tamen fore amet</li>
                                <li><i class="fa fa-angle-right"></i> Voluptate illum dolore ita ipsum</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-5 col-xs-12">
                        <img class="img-responsive" src="{{asset('vtf/images/img-07.jpg')}}" alt="#" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="dark-section" style="background:url({{asset('vtf/images/walle.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="heading-main">
                        <h2>Our Testimonials</h2>
                    </div>
                    <div class="testimonial-slider">
                        <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                            <!-- Carousel Slides / Quotes -->
                            <div class="carousel-inner text-center">
                                <!-- Quote 1 -->
                                <div class="item active">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. !</p>
                                                <small>Someone famous</small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!-- Quote 2 -->
                                <div class="item">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                                <small>Someone famous</small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!-- Quote 3 -->
                                <div class="item">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. .</p>
                                                <small>Someone famous</small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>
                            <!-- Bottom Carousel Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#quote-carousel" data-slide-to="0" class="active"><img class="img-responsive " src="{{asset('vtf/https://s3.amazonaws.com/uifaces/faces/twitter/mantia/128.jpg')}}" alt="">
                                </li>
                                <li data-target="#quote-carousel" data-slide-to="1"><img class="img-responsive" src="{{asset('vtf/https://s3.amazonaws.com/uifaces/faces/twitter/adhamdannaway/128.jpg')}}" alt="">
                                </li>
                                <li data-target="#quote-carousel" data-slide-to="2"><img class="img-responsive" src="{{asset('vtf/https://s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg')}}" alt="">
                                </li>
                            </ol>
                            <!-- Carousel Buttons Next/Prev -->
                            <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                            <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
      //  Swal.fire('About Us')
    </script>
@endpush
