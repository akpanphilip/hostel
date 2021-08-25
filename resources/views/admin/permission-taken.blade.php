<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Permission Taken</title>

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
        border: 5px solid rgb(20, 115, 153);
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

    .casesReported {
        text-align: center;
        font-family: cursive;
        font-size: 25px;
    }

</style>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        @include('layout.adminsidebar')
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                @include('layout.topbar')

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>Student Name</th>
                                        <th>Email</th>
                                        <th>Time of Departure</th>
                                        <th>Propsed Time of Arrival</th>
                                        <th>Date of Departure</th>
                                        <th>Proposed Date of Arrival</th>
                                        <th>Reasons to be away</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>SN</th>
                                        <th>Student Name</th>
                                        <th>Email</th>
                                        <th>Time of Departure</th>
                                        <th>Propsed Time of Arrival</th>
                                        <th>Date of Departure</th>
                                        <th>Proposed Date of Arrival</th>
                                        <th>Reasons to be away</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($permissions as $permission)
                                        <tr>
                                            <td>{{$cnt}}</td>
                                            <td>{{$permission->name}}</td>
                                            <td>{{$permission->email}}</td>
                                            <td>{{$permission->timeDept}}</td>
                                            <td>{{$permission->dateDept}}</td>
                                            <td>{{$permission->timeArrive}}</td>
                                            <td>{{$permission->dateArrive}}</td>
                                            <td>{{$permission->reasons}}</td>
                                        </tr>
                                        <?php $cnt++; ?>
                                    @endforeach

                                </tbody>
                            </table>
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
