<!DOCTYPE html>
<html lang="en">

<title>SCHMGT | Login</title>

@include('layout.head')

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <h1 class="logo me-auto"><a href="{{route('home')}}">Hostel Allocation System</a></h1>

            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            @include('layout.nav')
            <!-- .navbar -->


        </div>
    </header><!-- End Header -->
    <style>

        .about {
            margin-top: 5rem;
        }
        .textLogin{
            text-align: center;
            font-family: cursive;
            font-size: 40px;
        }
        .textLogin, label, a{
            color: #000;
            font-family: cursive;
        }
        input{
            height: 60px !important;
        }
        .order-lg-2 img{
            width: 100%;
        }
    </style>
    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content offset-md-3">
                        <p class="textLogin">Login</p>
                        @if (session('registeredSuccessfully'))
                            <div class="alert alert-success" role="alert">
                                {{ session('registeredSuccessfully') }}
                            </div>
                        @endif
                        @if (session('status'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form action="{{route('loginAccount')}}" method="post">
                            @csrf
                            <div class="form-group mb-2">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" name="email">
                                <span class="text-danger spanText">
                                    @error('email'){{$message}}@enderror
                                </span>
                            </div>
                            <div class="form-group mb-2">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control">
                                <span class="text-danger spanText">
                                    @error('password'){{$message}}@enderror
                                </span>
                            </div>
                            <div class="form-group mb-2 d-flex justify-content-between">
                                {{-- <a href="#">Forgot password</a> --}}
                                <a href="{{ route('register') }}">Don't have an account?</a>
                            </div>
                            <div class="form-group mb-2">
                                <input type="submit" value="Submit" class="form-control btn-dark">
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->
    </main>

    @include('layout.footer')
</body>

</html>
