<section id="top">
    <header>
        <div class="container">
            <div class="header-top">
                <div class="row">
                    <div class="col-md-6">
                        <div class="full">
                            <div class="logo">
                                <a href="{{route('front.news')}}"><img style="{{asset('vtf/width: 20px;')}}" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="right_top_section">
                            <!-- social icon -->
                            <ul class="social-icons pull-left">
                                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                <li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            </ul>
                            <!-- end social icon -->
                            <!-- button section -->
                            <ul class="login">
                                <li class="login-modal">
                                    <a href="{{route('front.login')}}" class="login"><i class="fa fa-user"></i>Login</a>
                                </li>
                                <li>
                                    <div class="cart-option">
                                        <a href="{{route('front.register')}}"><i class="fa fa-shopping-cart"></i>Register</a>
                                    </div>
                                </li>
                            </ul>
                            <!-- end button section -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom">
                <div class="row">
                    <div class="col-md-12">
                        <div class="full">
                            <div class="main-menu-section">
                                <div class="menu">
                                    <nav class="navbar navbar-inverse">
                                        <div class="navbar-header">
                                            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                                                <span class="sr-only">Toggle navigation</span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>
                                            <a class="navbar-brand" href="#">Menu</a>
                                        </div>
                                        <div class="collapse navbar-collapse js-navbar-collapse">
                                            <ul class="nav navbar-nav">
                                                <li class="active"><a href="{{route('front.welcome')}}">Home</a></li>
                                                <li><a href="{{route('front.about')}}">About</a></li>
                                                <li><a href="{{route('front.team')}}">Team</a></li>
                                                <li><a href="{{route('front.news')}}">News</a></li>
                                                <li class="dropdown mega-dropdown">
                                                    <a href="{{asset('vtf/match')}}" class="dropdown-toggle" data-toggle="dropdown">Match<span class="caret"></span></a>
                                                    <ul class="dropdown-menu mega-dropdown-menu">
                                                        <li class="col-sm-8">
                                                            <ul>
                                                                <li class="dropdown-header">Men Collection</li>
                                                                <div id="menCollection" class="carousel slide" data-ride="carousel">
                                                                    <div class="carousel-inner">
                                                                        <div class="item active">
                                                                            <div class="banner-for-match"><a href="#"><img class="img-responsive" src="{{asset('vtf/images/ma6.jpg')}}" alt="#" /></a></div>
                                                                        </div>
                                                                        <!-- End Item -->
                                                                        <div class="item">
                                                                            <div class="banner-for-match"><a href="#"><img class="img-responsive" src="{{asset('vtf/images/ma7.jpg')}}" alt="#" /></a></div>
                                                                        </div>
                                                                        <!-- End Item -->
                                                                        <div class="item">
                                                                            <div class="banner-for-match"><a href="#"><img class="img-responsive" src="{{asset('vtf/images/ma00.jpg')}}" alt="#" /></a></div>
                                                                        </div>
                                                                        <!-- End Item -->
                                                                    </div>
                                                                    <!-- End Carousel Inner -->
                                                                    <!-- Controls -->
                                                                    <a class="left carousel-control" href="#menCollection" role="button" data-slide="prev">
                                                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                                                        <span class="sr-only">Previous</span>
                                                                    </a>
                                                                    <a class="right carousel-control" href="#menCollection" role="button" data-slide="next">
                                                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                                        <span class="sr-only">Next</span>
                                                                    </a>
                                                                </div>
                                                                <!-- /.carousel -->
                                                            </ul>
                                                        </li>
                                                        <li class="col-sm-4">
                                                            <ul class="menu-inner">
                                                                <li class="dropdown-header">Next Matchs</li>
                                                                <li><a href="#">Volta vs Ashanti</a></li>
                                                                <li><a href="#">Greater Accra vs Eastern</a></li>
                                                                <li><a href="#">Contrary vs classical</a></li>
                                                                <li><a href="#">Discovered vs undoubtable</a></li>
                                                                <li><a href="#">Contrary vs classical</a></li>
                                                                <li><a href="#">Discovered vs undoubtable</a></li>
                                                                <li><a href="#">Contrary vs classical</a></li>
                                                                <li><a href="#">Discovered vs undoubtable</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="{{route('front.blog')}}">Blog</a></li>
                                                <li><a href="{{route('front.contact')}}">Contact</a></li>
                                            </ul>
                                        </div>
                                        <!-- /.nav-collapse -->
                                    </nav>
                                    <div class="search-bar">
                                        <div id="imaginary_container">
                                            <div class="input-group stylish-input-group">
                                                <input type="text" class="form-control"  placeholder="Search" >
                                                <span class="input-group-addon">
                                          <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                          </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="inner-page-banner">
        <div class="container">
        </div>
    </div>

    @yield('breadcrumb')

</section>