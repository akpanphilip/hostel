<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Student Profile</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>
<style>
    .imageBox img{
        border: 1px solid rgb(20, 115, 153);
        /* padding: 1px; */
        border-radius: 9px;
    }
    .container{
        margin-top: 90px;
    }
    .detailsBox{
        background-color: white;
        width: auto;
        height: auto;
        border: 1px solid rgb(243, 240, 240);
        padding: 10px;
        border-radius: 9px;
        color: #000;
    }
    .detailsBox span{
        font-weight: bold;
    }
</style>
<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        @include('layout.usersidebar');
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                @include('layout.topbar')

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 col-md-3 col-lg-3">
                                <div class="formBox">
                                    <div class="imageBox d-flex justify-content-center align-items-center">
                                        <img class="img-profile " width="220" height="220"
                                            src="{{ asset('userImages') }}/{{ auth()->user()->image }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="detailsBox">
                                    <p><span>Name: </span>{{auth()->user()->firstname}} {{auth()->user()->lastname}} </p>
                                    <p><span>Email: </span>{{auth()->user()->email}}</p>
                                    <p><span>Department:</span> {{auth()->user()->department}} </p>
                                    <p><span>Level: </span>{{auth()->user()->level}} Level</p>
                                    <p><span>Matric Number: </span> {{auth()->user()->matric}}</p>
                                    <p><span>Mobile: </span> {{auth()->user()->mobile}}</p>
                                    <p><span>Teller ID: </span> {{auth()->user()->teller}}</p>
                                    <p><span>Hostel name: </span> {{auth()->user()->hostel}}</p>
                                    <p><span>Room number: </span> {{auth()->user()->room_number}}</p>

                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Content Row -->
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->

            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    @include('layout.head')
</body>

</html>
