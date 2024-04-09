@extends('app')

@push('styles')

@endpush

@section('breadcrumb')
    <div class="inner-information-text">
        <div class="container">
            <h3>Our Team</h3>
            <ul class="breadcrumb">
                <li><a href="{{route('front.welcome')}}">Home</a></li>
                <li class="active">Team</li>
            </ul>
        </div>
    </div>
@endsection

@section('content')

<section id="contant" class="contant main-heading team">
    <div class="row">
        <div class="container">
            <div class="col-md-3 column">
                <div class="card">
                    <img class="img-responsive" src="{{asset('vtf/images/img-1-4.jpg')}}" alt="Coach Fataw" style="{{asset('vtf/width:100%')}}">
                    <div class="">
                        <h4>Dr. Abdul Fataw</h4>
                        <p class="title">Regional Chairman</p>
                        <p>
                        <div class="center"><button class="button">Contact</button></div>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 column">
                <div class="card">
                    <img class="img-responsive" src="{{asset('vtf/images/img-1-2.jpg')}}" alt="Coach Fred" style="{{asset('vtf/width:100%')}}">
                    <div class="">
                        <h4>Mr. Frederick Martey</h4>
                        <p class="title">Vice Chairman</p>
                        <p>
                        <div class="center"><button class="button">Contact</button></div>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 column">
                <div class="card">
                    <img class="img-responsive" src="{{asset('vtf/images/img-1-3.jpg')}}" alt="Coach Prosper" style="{{asset('vtf/width:100%')}}">
                    <div class="">
                        <h4>Master Prosper</h4>
                        <p class="title">Regional Administrator</p>
                        <p>
                        <div class="center"><button class="button">Contact</button></div>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 column">
                <div class="card">
                    <img class="img-responsive" src="{{asset('vtf/images/img-1-4.jpg')}}" alt="John" style="{{asset('vtf/width:100%')}}">
                    <div class="">
                        <h4>Davis A. Klotey</h4>
                        <p class="title">P.R.O</p>
                        <p>
                        <div class="center"><button class="button">Contact</button></div>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 column">
                <div class="card">
                    <img class="img-responsive" src="{{asset('vtf/images/img-1-2.jpg')}}" alt="Mike" style="{{asset('vtf/width:100%')}}">
                    <div class="">
                        <h4>Mike Ross</h4>
                        <p class="title">Regional Secretary</p>
                        <p>
                        <div class="center"><button class="button">Contact</button></div>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 column">
                <div class="card">
                    <img class="img-responsive" src="{{asset('vtf/images/img-1-3.jpg')}}" alt="John" style="{{asset('vtf/width:100%')}}">
                    <div class="">
                        <h4>John Doe</h4>
                        <p class="title">Designer</p>
                        <p>
                        <div class="center"><button class="button">Contact</button></div>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 column">
                <div class="card">
                    <img class="img-responsive" src="{{asset('vtf/images/img-1-3.jpg')}}" alt="John" style="{{asset('vtf/width:100%')}}">
                    <div class="">
                        <h4>John Doe</h4>
                        <p class="title">Designer</p>
                        <p>
                        <div class="center"><button class="button">Contact</button></div>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 column">
                <div class="card">
                    <img class="img-responsive" src="{{asset('vtf/images/img-1-4.jpg')}}" alt="John" style="{{asset('vtf/width:100%')}}">
                    <div class="">
                        <h4>John Doe</h4>
                        <p class="title">Designer</p>
                        <p>
                        <div class="center"><button class="button">Contact</button></div>
                        </p>
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
       // Swal.fire('About Our Team')
    </script>
@endpush
