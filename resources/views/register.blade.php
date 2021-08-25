<!DOCTYPE html>
<html lang="en">

<title>SCHMGT | Register</title>

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
        label{
            font-weight: bold;
        }
        .headerText{
            text-align: center;
            font-size: 30px;
            font-weight: bold;
            font-family: cursive;
        }
    </style>
    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-7 pt-4 pt-lg-0 order-2 order-lg-1 content offset-md-3">
                        <p class="headerText">
                            Regiser
                        </p>
                        <form action="{{ route('registration') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col form-group mb-2">
                                    <label for="firstname">First name</label>
                                    <input type="text" class="form-control" value="{{ old('firstname') }}"
                                        name="firstname">
                                    <span class="text-danger spanText">
                                        @error('firstname'){{ $message }}@enderror
                                        </span>
                                    </div>
                                    <div class="col form-group mb-2">
                                        <label for="lastname">Last name</label>
                                        <input type="text" class="form-control" value="{{ old('lastname') }}"
                                            name="lastname">
                                        <span class="text-danger spanText">
                                            @error('lastname'){{ $message }}@enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="row">
                                    <div class="col form-group">
                                        <label for="">Matric No</label>
                                        <input type="text" name="matric" class="form-control">
                                        <span class="text-danger spanText">
                                            @error('matric'){{ $message }}@enderror
                                            </span>
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Teller number</label>
                                        <input type="text" name="teller" class="form-control">
                                        <span class="text-danger spanText">
                                            @error('teller'){{ $message }}@enderror
                                            </span>
                                    </div>
                                    </div>
                                    <div class="row">
                                        <div class="col form-group mb-2">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" value="{{ old('email') }}" name="email">
                                            <span class="text-danger spanText">
                                                @error('email'){{ $message }}@enderror
                                                </span>
                                            </div>
                                            <div class="col form-group mb-2">
                                                <label for="gender">Gender</label>
                                                <select name="gender" class="form-control">
                                                    <option value="">--select gender---</option>
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col form-group mb-2">
                                                <label for="gender">Level</label>
                                                <select name="level" class="form-control" required>
                                                    <option value="">--Select Level---</option>
                                                    <option value="100">100</option>
                                                    <option value="200">200</option>
                                                    <option value="300">300</option>
                                                    <option value="400">400</option>
                                                </select>
                                            </div>
                                            <div class="col form-group mb-2">
                                                <label for="password">Department</label>
                                                <select name="department" class="form-select" required>
                                                    <option value="">--select department--</option>
                                                        <option value="Computer Science">Computer Science<option>
                                                        <option value="Chemistry">Chemistry<option>
                                                        <option value="Biologyical Science">Biologyical Science<option>
                                                        <option value="Physics">Physics<option>
                                                        <option value="Mathematics">Mathematics<option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                        <div class="col form-group mb-2">
                                            <label for="password">Password</label>
                                            <input type="password" name="password" class="form-control">
                                            <span class="text-danger spanText">
                                                @error('password'){{ $message }}@enderror
                                                </span>
                                            </div>
                                            <div class="col form-group mb-2">
                                                <label for="password">Confirm Password</label>
                                                <input type="password" name="password_confirmation" class="form-control">
                                            </div>
                                    </div>
                                    <div class="form-group mb-2 d-flex justify-content-end">
                                        <a href="{{ route('login') }}">Already have an account?</a>
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
