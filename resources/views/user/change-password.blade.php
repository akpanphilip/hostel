<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Change password</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>
<style>
    .imageBox img {
        border: 1px solid rgb(20, 115, 153);
        /* padding: 1px; */
        border-radius: 9px;
    }

    .container {
        margin-top: 90px;
    }

    .detailsBox {
        background-color: white;
        width: auto;
        height: auto;
        border: 1px solid rgb(243, 240, 240);
        padding: 10px;
        border-radius: 9px;
        color: #000;
    }

    .detailsBox span {
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
                        @if (Session::has('changed'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('changed') }}
                            </div>
                        @endif
                        <div class="row justify-content-center">

                            <div class="col-md-8">

                                <div class="card">

                                    <div class="card-body">

                                        <form method="POST" action="{{ route('change.password') }}">

                                            @csrf



                                            @foreach ($errors->all() as $error)

                                                <p class="text-danger text-center">{{ $error }}</p>

                                            @endforeach



                                            <div class="form-group row">

                                                <label for="password"
                                                    class="col-md-4 col-form-label text-md-right">Current
                                                    Password</label>



                                                <div class="col-md-6">

                                                    <input id="password" type="password" class="form-control"
                                                        name="current_password" autocomplete="current-password">

                                                </div>

                                            </div>



                                            <div class="form-group row">

                                                <label for="password" class="col-md-4 col-form-label text-md-right">New
                                                    Password</label>



                                                <div class="col-md-6">

                                                    <input id="new_password" type="password" class="form-control"
                                                        name="new_password" autocomplete="current-password">

                                                </div>

                                            </div>



                                            <div class="form-group row">

                                                <label for="password" class="col-md-4 col-form-label text-md-right">New
                                                    Confirm
                                                    Password</label>



                                                <div class="col-md-6">

                                                    <input id="new_confirm_password" type="password"
                                                        class="form-control" name="new_confirm_password"
                                                        autocomplete="current-password">

                                                </div>

                                            </div>



                                            <div class="form-group row mb-0">

                                                <div class="col-md-8 offset-md-4">

                                                    <button type="submit" class="btn btn-dark">

                                                        Update Password

                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
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
