<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Manage Hostel</title>

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

    .formBox {
        width: 50%;
        margin: 20px auto;
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
                    <div class="row">
                        <div class="col-sm-6 col-md-7">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>SN</th>
                                                <th>Hostel name</th>
                                                <th>Capacity</th>
                                                <th>Rooms left</th>
                                                <th>Date of creation</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>SN</th>
                                                <th>Hostel name</th>
                                                <th>Capacity</th>
                                                <th>Rooms left</th>
                                                <th>Date of creation</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            @foreach ($hostels as $hostel)
                                                <tr>
                                                    <td>{{ $cnt }}</td>
                                                    <td>{{ $hostel->hostel_name }}</td>
                                                    <td>{{ $hostel->capacity }}</td>
                                                    <td>{{ $hostel->rooms_left }}</td>
                                                    <td>{{ $hostel->created_at }}</td>
                                                </tr>
                                                <?php $cnt++; ?>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-5">
                            <div class="formBox">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <form action="{{ route('store-hostel') }}" method="post">
                                    <p>Add Hostel</p>
                                    @csrf
                                    <div class="form-group">
                                        <label for="">Hostel name</label>
                                        <input type="text" class="form-control" name="nameHostel">
                                        <span class="text-danger spanText">
                                            @error('nameHostel'){{$message}}@enderror
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <label for="capacity">Capacity</label>
                                        <input type="text" class="form-control" name="capacity">
                                        <span class="text-danger spanText">
                                            @error('capacity'){{$message}}@enderror
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="sumbit" class="form-control btn-dark">
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
