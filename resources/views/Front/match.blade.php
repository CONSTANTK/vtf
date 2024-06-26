@extends('app')

@push('styles')

@endpush

@section('breadcrumb')
    <div class="inner-information-text">
        <div class="container">
            <h3>Our Matches</h3>
            <ul class="breadcrumb">
                <li><a href="{{route('front.welcome')}}">Home</a></li>
                <li class="active">Matches</li>
            </ul>
        </div>
    </div>
@endsection

@section('content')
<section id="top">


            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- /.carousel -->
        <div class="news">
            <div class="container">
                <div class="heading-slider">
                    <p class="headline"><i class="fa fa-star" aria-hidden="true"></i> Top Headlines :</p>
                    <!--made by vipul mirajkar thevipulm.appspot.com-->
                    <h1>
                        <a href="" class="typewrite" data-period="2000" data-type='[ "Contrary to popular belief, Lorem Ipsum is not simply random text.", "Lorem Ipsum is simply dummy text of the printing and typesetting industry.", "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout."]'>
                            <span class="wrap"></span>
                        </a>
                    </h1
                    <span class="wrap"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="matchs-info">
    <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="row">
            <div class="full">
                <div class="matchs-vs">
                    <div class="vs-team">
                        <div class="team-btw-match">
                            <ul>
                                <li>
                                    <img src="{{asset('vtf/images/img-03.png')}}" alt="">
                                    <span>Footbal Team</span>
                                </li>
                                <li class="vs"><span>vs</span></li>
                                <li>
                                    <img src="{{asset('vtf/images/img-04.png')}}" alt="">
                                    <span>Super Team Club</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="row">
            <div class="full">
                <div class="right-match-time">
                    <h2>Next Match</h2>
                    <ul id="countdown-1" class="countdown">
                        <li><span class="days">10 </span>Day </li>
                        <li><span class="hours">5 </span>Hours </li>
                        <li><span class="minutes">25 </span>Minutes </li>
                        <li><span class="seconds">10 </span>Seconds </li>
                    </ul>
                    <span>12/02/2017 /19:00pm</span>
                </div>
            </div>
        </div>
    </div>
</div>
<section id="contant" class="contant">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-4 col-xs-12">
                <aside id="sidebar" class="left-bar">
                    <div class="banner-sidebar">
                        <img class="img-responsive" src="{{asset('vtf/images/img-05.jpg')}}" alt="#" />
                        <h3>Lorem Ipsum is simply dummy text..</h3>
                    </div>
                </aside>
                <h4>Match Fixture</h4>
                <aside id="sidebar" class="left-bar">
                    <div class="feature-matchs">
                        <div class="team-btw-match">
                            <ul>
                                <li>
                                    <img src="{{asset('vtf/images/img-01_002.png')}}" alt="">
                                    <span>Portugal</span>
                                </li>
                                <li class="vs"><span>vs</span></li>
                                <li>
                                    <img src="{{asset('vtf/images/img-02.png')}}" alt="">
                                    <span>Germany</span>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <img src="{{asset('vtf/images/img-03_002.png')}}" alt="">
                                    <span>Portugal</span>
                                </li>
                                <li class="vs"><span>vs</span></li>
                                <li>
                                    <img src="{{asset('vtf/images/img-04_003.png')}}" alt="">
                                    <span>Germany</span>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <img src="{{asset('vtf/images/img-05_002.png')}}" alt="">
                                    <span>Portugal</span>
                                </li>
                                <li class="vs"><span>vs</span></li>
                                <li>
                                    <img src="{{asset('vtf/images/img-06.png')}}" alt="">
                                    <span>Germany</span>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <img src="{{asset('vtf/images/img-07_002.png')}}" alt="">
                                    <span>Portugal</span>
                                </li>
                                <li class="vs"><span>vs</span></li>
                                <li>
                                    <img src="{{asset('vtf/images/img-08.png')}}" alt="">
                                    <span>Germany</span>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <img src="{{asset('vtf/images/img-05_002.png')}}" alt="">
                                    <span>Portugal</span>
                                </li>
                                <li class="vs"><span>vs</span></li>
                                <li>
                                    <img src="{{asset('vtf/images/img-06.png')}}" alt="">
                                    <span>Germany</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </aside>
                <h4>Points Table</h4>
                <aside id="sidebar" class="left-bar">
                    <div class="feature-matchs">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Team</th>
                                <th>P</th>
                                <th>W</th>
                                <th>L</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td><img src="{{asset('vtf/images/img-01_004.png')}}" alt="">Liverpool</td>
                                <td>10</td>
                                <td>12</td>
                                <td>20</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><img src="{{asset('vtf/images/img-02_002.png')}}" alt="">Chelsea</td>
                                <td>10</td>
                                <td>12</td>
                                <td>20</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><img src="{{asset('vtf/images/img-03_003.png')}}" alt="">Norwich City</td>
                                <td>20</td>
                                <td>15</td>
                                <td>20</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td><img src="{{asset('vtf/images/img-04_002.png')}}" alt="">West Brom</td>
                                <td>60</td>
                                <td>10</td>
                                <td>60</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td><img src="{{asset('vtf/images/img-05.png')}}" alt="">sunderland</td>
                                <td>30</td>
                                <td>06</td>
                                <td>30</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td><img src="{{asset('vtf/images/img-01_004.png')}}" alt="">Liverpool</td>
                                <td>10</td>
                                <td>12</td>
                                <td>20</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </aside>
                <div class="content-widget top-story" style="background: url(images/top-story-bg.jpg);">
                    <div class="top-stroy-header">
                        <h2>Top Soccer Headlines Story <a href="#" class="fa fa-fa fa-angle-right"></a></h2>
                        <span class="date">July 05, 2017</span>
                        <h2>Other Headlines</h2>
                    </div>
                    <ul class="other-stroies">
                        <li><a href="#">Wenger Vardy won't start</a></li>
                        <li><a href="#">Evans: Vardy just</a></li>
                        <li><a href="#">Pires and Murray </a></li>
                        <li><a href="#">Okazaki backing</a></li>
                        <li><a href="#">Wolfsburg's Rodriguez</a></li>
                        <li><a href="#">Jamie Vardy compared</a></li>
                        <li><a href="#">Arsenal target Mkhitaryan</a></li>
                        <li><a href="#">Messi wins libel case.</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8 col-sm-8 col-xs-12">
                <div class="news-post-holder">
                    <div class="news-post-widget">
                        <img class="img-responsive" src="{{asset('vtf/images/img-01_002.jpg')}}" alt="">
                        <div class="news-post-detail">
                            <span class="date">20 march 2016</span>
                            <h2><a href="{{route('front.blog')}}">At vero eos et accusamus et iusto odio dignissimos ducimus</a></h2>
                            <p>Just hours after that his grandma had died, Angel Di Maria imagined how she might react if he didn't play</p>
                        </div>
                    </div>
                    <div class="news-post-widget">
                        <img class="img-responsive" src="{{asset('vtf/images/img-02_003.jpg')}}" alt="">
                        <div class="news-post-detail">
                            <span class="date">20 march 2016</span>
                            <h2><a href="{{route('front.blog')}}">At vero eos et accusamus et iusto odio dignissimos ducimus</a></h2>
                            <p>Just hours after that his grandma had died, Angel Di Maria imagined how she might react if he didn't play</p>
                        </div>
                    </div>
                </div>
                <div class="news-post-holder">
                    <div class="news-post-widget">
                        <img class="img-responsive" src="{{asset('vtf/images/img-03_003.jpg')}}" alt="">
                        <div class="news-post-detail">
                            <span class="date">20 march 2016</span>
                            <h2><a href="{{route('front.blog')}}">At vero eos et accusamus et iusto odio dignissimos ducimus</a></h2>
                            <p>Just hours after that his grandma had died, Angel Di Maria imagined how she might react if he didn't play</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="full">
                    <div class="main-heading sytle-2">
                        <h2>Video</h2>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium<br>doloremque laudantium, totam rem aperiam</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="video_section_main theme-padding middle-bg vedio">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="full">
                    <div class="match_vedio">
                        <img class="img-responsive" src="{{asset('vtf/images/img-07.jpg')}}" alt="#" />
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
        Swal.fire('Our Matches')
    </script>
@endpush
