<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Hostel Registration</title>

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
                        <p>You are currently in {{auth()->user()->hostel}} Hostel with room number {{auth()->user()->room_number}}</p>
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if (session('notavailable'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('notavailable') }}
                            </div>
                        @endif

                        <div class="formBox">
                            <form action="{{route('hostel-registration')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="">Fullname</label>
                                    <input type="text" class="form-control" value="{{auth()->user()->firstname}} {{auth()->user()->lastname}}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="text" class="form-control" value="{{auth()->user()->email}}" disabled>
                                </div>
                                <div class="form-group">
                                    <select name="hostel" class="form-select">
                                        @foreach ($hostels as $hostel)
                                            <option value="{{ $hostel->hostel_name }}">{{ $hostel->hostel_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <input type="submit" value="submit" class="form-control btn-dark">
                                </div>
                            </form>
                        </div>

                        <div class="row">
                            <div class="col-sm-6 col-md-12">
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
