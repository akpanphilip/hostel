<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Student Hostel Registration</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>
<style>
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
        @include('layout.adminsidebar');
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                @include('layout.topbar')

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="container">
                        <p class="reportText">Allocate Hostel space</p>
                        <div class="row d-flex justify-content-center">
                            <div class="col-sm-6 col-md-7">
                                <div class="formBox">
                                    @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                    <form action="{{route('updateHostel')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$students->id}}">
                                        <div class="form-group">
                                            <label for="name">Full Names</label>
                                            <input type="text" class="form-control" name="name"
                                                value="{{ $students->firstname }} {{ $students->lastname}}"
                                                disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Hostel name</label>
                                            <select name="hostel" class="form-control" required>
                                                <option value="">--select hostel--</option>
                                                @foreach ($hostels as $hostel )
                                                    <option value="{{$hostel->hostel_name}}">{{$hostel->hostel_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Room number</label>
                                            <input type="text" name="room_number" class="form-control" value="{{$students->room_number}}">
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" value="Submit" class="form-control btn-dark">
                                        </div>
                                    </form>
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

    <!-- Page level plugins -->
    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('js/demo/datatables-demo.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    @include('layout.head')
</body>

</html>
