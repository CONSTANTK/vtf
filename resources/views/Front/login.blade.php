@extends('app')

@push('styles')

@endpush

@section('breadcrumb')
    <div class="inner-information-text">
        <div class="container">
            <h3>Register</h3>
            <ul class="breadcrumb">
                <li><a href="{{route('front.welcome')}}">Home</a></li>
                <li class="active">Login</li>
            </ul>
        </div >

        <!-- MultiStep Form -->
        <div class="form-center"  >

            <section class="vh-100 gradient-custom" >
                <div class="container mt-5" >
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="col-md-6" >
                            <form id="regForm" >
                                <h1 id="register">Login</h1>
                                <div class="form-outline form-white mb-4">
                                    <input type="email" id="typeEmailX" class="form-control form-control-lg" />
                                    <label class="form-label" for="typeEmailX">Username or Email</label>
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <input type="password" id="typePasswordX" class="form-control form-control-lg" />
                                    <label class="form-label" for="typePasswordX">Password</label>
                                    <button class="btn btn-outline-light btn-lg px-5" type="submit"><a href="{{route('front.welcome')}}"><h6 style="color:green"> Login</h6></a></button>

                                    <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="{{route('front.welcome')}}"><h6 style="color:green">Forgot password?</h6></a></p>



                                </div>

                            </form>
                        </div>
                    </div>
                </div>

            </section>
        </div>
    </div>

@endsection

@section('content')

    <script type="text/javascript">
        var currentTab = 0;
        document.addEventListener("DOMContentLoaded", function(event) {


            showTab(currentTab);

        });

        function showTab(n) {
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Submit";
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
            }
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            var x = document.getElementsByClassName("tab");
            if (n == 1 && !validateForm()) return false;
            x[currentTab].style.display = "none";
            currentTab = currentTab + n;
            if (currentTab >= x.length) {
// document.getElementById("regForm").submit();
// return false;
//alert("sdf");
                document.getElementById("nextprevious").style.display = "none";
                document.getElementById("all-steps").style.display = "none";
                document.getElementById("register").style.display = "none";
                document.getElementById("text-message").style.display = "block";




            }
            showTab(currentTab);
        }

        function validateForm() {
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");
            for (i = 0; i < y.length; i++) { if (y[i].value=="" ) { y[i].className +=" invalid" ; valid=false; } } if (valid) { document.getElementsByClassName("step")[currentTab].className +=" finish" ; } return valid; } function fixStepIndicator(n) { var i, x=document.getElementsByClassName("step"); for (i=0; i < x.length; i++) { x[i].className=x[i].className.replace(" active", "" ); } x[n].className +=" active" ; }
    </script>



@endsection

@push('scripts')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        //Swal.fire('Register Here')
    </script>
    <style>
        .form-center {
            display:flex;
            justify-content: center;
        }

    </style>
@endpush

