<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin Edit Profile</title>

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
        border: 5px solid rgb(20, 115, 153);
        padding: 1px;
    }
    .container{
        margin-top: 120px;
    }
</style>
<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        @include('layout.adminsidebar');
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                @include('layout.topbar')

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-3 col-lg-3">
                            <div class="formBox">
                                <div class="imageBox d-flex justify-content-center align-items-center">
                                    <img class="img-profile rounded-circle" width="160" height="160"
                                        src="{{ asset('userImages') }}/{{ auth()->user()->image }}">
                                </div>
                                @if (session('image_updated'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('image_updated') }}
                                </div>
                                @endif
                                <form action="{{route('edit-avatar')}}" method="post" class="mt-3" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <input type="file" name="image" class="form-control">
                                        <span class="text-danger spanText">
                                            @error('image'){{$message}}@enderror
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Update" class="form-control btn-dark">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-5">
                            <div class="formBox">
                                @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                                @endif
                                <form action="{{route('edit-profile')}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="firstname">First name</label>
                                        <input type="text" name="firstname" class="form-control" value="{{auth()->user()->firstname}}">
                                        <span class="text-danger spanText">
                                            @error('firstname'){{$message}}@enderror
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <label for="lastname">Last name</label>
                                        <input type="text" class="form-control" name="lastname" value="{{auth()->user()->lastname}}">
                                        <span class="text-danger spanText">
                                            @error('lastname'){{$message}}@enderror
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <label for="mobile">Mobile</label>
                                        <input type="tel" name="mobile" class="form-control" value="{{auth()->user()->mobile}}">
                                        <span class="text-danger spanText">
                                            @error('mobile'){{$message}}@enderror
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Update" class="form-control btn-dark">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            @if (session('status_email'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status_email') }}
                                </div>
                                @endif
                            <div class="formBox">
                                <form action="{{route('edit-email')}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" value="{{auth()->user()->email}}" class="form-control">
                                        <span class="text-danger spanText">
                                            @error('email'){{$message}}@enderror
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="form-control btn-dark" value="Update email">
                                    </div>
                                </form>
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
