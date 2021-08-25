<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Manage Students</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>

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
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>SN</th>
                                            <th>Image</th>
                                            <th>Student Name</th>
                                            <th>Department</th>
                                            <th>Gender</th>
                                            <th>Email</th>
                                            <th>Phone Number</th>
                                            <th>Hotel</th>
                                            <th>Hotel Room ID</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>SN</th>
                                            <th>Image</th>
                                            <th>Student Name</th>
                                            <th>Department</th>
                                            <th>Gender</th>
                                            <th>Email</th>
                                            <th>Phone Number</th>
                                            <th>Hotel</th>
                                            <th>Hotel Room ID</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($students as $student)
                                            <tr>
                                                <td>
                                                    <img class="mb-3"
                                                        src="{{ asset('userImages') }}/{{ $student->image }}"
                                                        width="100" height="100">
                                                </td>
                                                <td>{{ $cnt }}</td>
                                                <td>{{ $student->firstname }} {{ $student->lastname }}</td>
                                                <td>{{$student->department}}</td>
                                                <td>{{ $student->gender }}</td>
                                                <td>{{ $student->email }}</td>
                                                <td>{{ $student->mobile }}</td>
                                                <td>{{ $student->hostel }}</td>
                                                <td>{{ $student->room_number }}</td>
                                                <td>
                                                    <div class="buttons d-flex">
                                                        {{-- <a class="btn btn-primary m-1" href="">Edit</a> --}}
                                                        {{-- <a class="btn btn-danger m-1" href="">Delete</a> --}}
                                                        <a class="btn btn-dark m-1" href="/message-student/{{$student->id}}">message</a>
                                                        <a class="btn btn-warning m-1"
                                                            href="/assign-hostel-id/{{ $student->id }}">Assign Hostel</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php $cnt++; ?>
                                        @endforeach

                                    </tbody>
                                </table>
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
