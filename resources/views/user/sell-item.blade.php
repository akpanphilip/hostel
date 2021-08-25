<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Sell Item</title>

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
        border: 2px solid brown;
        /* padding: 1px; */
        border-radius: 9px;
    }

    .container {
        margin-top: 10px;
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

    .reportText {
        font-size: 30px;
        font-family: cursive;
        font-weight: 500;
        text-align: center
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
                    <p class="reportText">Easy Offer an item for sale!</p>
                    <div class="row d-flex justify-content-center">
                        <div class="col-sm-6 col-md-7">
                            <div class="formBox">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <form action="{{ route('sellItem') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-row">
                                        <div class="col form-group">
                                            <label for="name">Seller</label>
                                            <input type="text" class="form-control"
                                                value="{{ auth()->user()->firstname }} {{ auth()->user()->lastname }}"
                                                disabled>
                                        </div>
                                        <div class="col form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control"
                                                value="{{ auth()->user()->email }}" disabled>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col form-group">
                                            <label for="name">Name of Item</label>
                                            <input type="text" class="form-control" name="nameItem">
                                            <span class="text-danger spanText">
                                                @error('nameItem'){{ $message }}@enderror
                                                </span>
                                            </div>
                                            <div class="col form-group">
                                                <label for="price">Price in Naira</label>
                                                <input type="text" class="form-control" name="price">
                                                <span class="text-danger spanText">
                                                    @error('price'){{ $message }}@enderror
                                                    </span>
                                                </div>
                                                <div class="col form-group">
                                                    <label for="image">Image</label>
                                                    <input type="file" class="form-control" name="image">
                                                    <span class="text-danger spanText">
                                                        @error('image'){{ $message }}@enderror
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="desc">Short Description</label>
                                                    <textarea name="description" cols="30" rows="3" class="form-control"></textarea>
                                                    <span class="text-danger spanText">
                                                        @error('description'){{ $message }}@enderror
                                                        </span>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="submit" value="Submit" class="form-control btn-dark">
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
