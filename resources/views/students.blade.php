<!DOCTYPE html>
<html lang="en">

<title>Students</title>

<style>
    .box {
        width: 100%;
        background-color: #fff;
        height: 300px;
        /* border: 1px solid black; */
        /* background-color: rgb(192, 247, 215); */
        /* box-shadow: 0px 0px 2px 2px rgb(211, 208, 208); */
        border-radius: 15px;
    }

    .container-students {
        margin-top: 150px;
    }

    .imageBox {
        width: 100%;
        height: 60%;
        display: flex;
        justify-content: center;
        align-items: center;

    }

    .imageBox img {
        border: 1px solid black;
        width: 60%;
        height: 80%;
        border-radius: 100%;
    }
    .box p{
        line-height: 10px;
        /* margin-top: -5px; */
        text-align: center;
        font-size: 14px;
        font-weight: 600;
    }
    .box .first{
        font-size: 22px;
    }

</style>
@include('layout.head')

<body>


    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="{{ route('home') }}">HMGT</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            @include('layout.nav')
            <!-- .navbar -->


        </div>
    </header><!-- End Header -->

    <div class="container container-students">
        <div class="row">
            @foreach ($students as $student)
                <div class="col-sm-6 col-md-3">
                    <div class="box">
                        <div class="imageBox">
                            <img class="mb-3" src="{{ asset('userImages') }}/{{ $student->image }}">
                        </div>
                        <p class="first">{{ $student->firstname }} {{ $student->lastname }}</p>
                        <p>Department of {{ $student->department }}</p>
                        <p>Matric number: {{$student->matric}}</p>
                        <p>Hostel ID: {{$student->hostel}}</p>
                        <p>Room number: {{$student->room_number}}</p>

                    </div>
                </div>
            @endforeach
        </div>
    </div>

    @include('layout.footer')
</body>

</html>
