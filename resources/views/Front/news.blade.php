@extends('app')

@push('styles')

@endpush

@section('breadcrumb')
    <div class="inner-information-text">
        <div class="container">
            <h3>News</h3>
            <ul class="breadcrumb">
                <li><a href="{{route('front.welcome')}}">Home</a></li>
                <li class="active">News</li>
            </ul>
        </div>
    </div>
@endsection

@section('content')
    <section id="contant" class="contant">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-sm-12 col-xs-12">
                    <div class="news-post-holder">
                        <div class="col-lg-6 col-sm-6 col-xs-12">
                            <div class="news-post-widget">
                                <img class="img-responsive" src="{{asset('vtf/images/ma4.jpg')}}" alt="">
                                <div class="news-post-detail">
                                    <span class="date">20 march 2016</span>
                                    <h2><a href="{{route('front.blog')}}">National U15 Championship</a></h2>
                                    <p>Just hours after that his grandma had died, Angel Di Maria imagined how she might react if he didn't play</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-xs-12">
                            <div class="news-post-widget">
                                <img class="img-responsive" src="{{asset('vtf/images/ma23.jpg')}}" alt="">
                                <div class="news-post-detail">
                                    <span class="date">20 march 2016</span>
                                    <h2><a href="{{asset('vtf/blog-detail.html')}}">Korea Cup</a></h2>
                                    <p>Just hours after that his grandma had died, Angel Di Maria imagined how she might react if he didn't play</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-xs-12">
                            <div class="news-post-widget">
                                <img class="img-responsive" src="{{asset('vtf/images/ma10.jpg')}}" alt="">
                                <div class="news-post-detail">
                                    <span class="date">20 January 2023</span>
                                    <h2><a href="{{asset('vtf/blog-detail.html')}}">Five Taekwondo athletes from Volta selected into the national team</a></h2>
                                    <p>Following their gallant dislays at the 2022 Korea Cup held in Tema, 5 athletes from the Volta Taekwondo Club have been selected to reresent Ghana at the World Taekwondo Championship to be held in the United Kingdom. The championship is scheduled to take olace between 15th February 2023 and 5th day  of March 2023.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-xs-12">
                            <div class="news-post-widget">
                                <img class="img-responsive" src="{{asset('vtf/images/ma2.jpg')}}" alt="">
                                <div class="news-post-detail">
                                    <span class="date">25 January 2023</span>
                                    <h2><a href="{{asset('vtf/blog-detail.html')}}">Team Volta produces Olymic Taekwondo Champion </a></h2>
                                    <p>Daniel Kofi Ewegbetor wins gold medal at the 2022 Olymic games in Brazil.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="content-widget top-story" style="background: url({{asset('vtf/images/top-story-bg.jpg')}});">
                        <div class="top-stroy-header">
                            <h2>Top Taekwondo Headlines Story <a href="#" class="fa fa-fa fa-angle-right"></a></h2>
                            <span class="date">July 05, 2017</span>
                            <h2>Other Headlines</h2>
                        </div>
                        <ul class="other-stroies">
                            <li><a href="#">Volta the 2022 champions</a></li>
                            <li><a href="#">Volta gets Olympic Champion</a></li>
                            <li><a href="#">Volta tops medals table at Korea Cup </a></li>
                            <li><a href="#">Okazaki backing</a></li>
                            <li><a href="#">Wolfsburg's Rodriguez</a></li>
                            <li><a href="#">Jamie Vardy compared</a></li>
                            <li><a href="#">Arsenal target Mkhitaryan</a></li>
                            <li><a href="#">Messi wins libel case.</a></li>
                        </ul>
                    </div>
                    <aside id="sidebar" class="right-bar">
                        <div class="banner">
                            <img class="img-responsive" src="{{asset('vtf/images/ma4.jpg')}}" alt="#">
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        //Swal.fire('Our News')
    </script>
@endpush
