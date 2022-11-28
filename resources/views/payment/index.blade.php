<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>ZINWA</title>

        <link rel="shortcut icon" href="assets/img/favicon.png">

        <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

        <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
        <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

        <link rel="stylesheet" href="assets/css/animate.min.css">

        <link rel="stylesheet" href="assets/css/select2.min.css">

        <link rel="stylesheet" href="assets/css/admin.css">
    </head>

    <body>
        <div class="main-wrapper">

            <div class="sidebar" id="sidebar">
                <div class="sidebar-logo">
                    <a href="#">
                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="sidebar-inner slimscroll">
                    <div id="sidebar-menu" class="sidebar-menu">
                        <ul>
                            <li >
                                <a href="dashboard"><i class="fas fa-columns"></i> <span>Dashboard</span></a>
                            </li>


                            <li class="active">
                                <a href=""><i class="fas fa-wallet"></i> <span> Payments</span></a>
                            </li>

                            <li>
                                <a href="add_user"><i class="fas fa-user-plus"></i> <span>Add Meter</span></a>
                            </li>

                            <li>
                                <a href="view"><i class="fas fa-users"></i> <span>View</span></a>
                            </li>
                        </ul>
                        </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="page-wrapper">
                <div class="content container-fluid">
                    <div class="page-header">
                        <div class="row">
                            <div class="col">
                                <h3 class="page-title">Search Parcel</h3>
                                <ul class="breadcrumb">
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                </div>
                                <div class="card-body">
                                    <form action="{{route('payment.create')}}" method="GET">
                                        <h4 class="card-title">Enter Meter Number</h4>
                                        @if(Session::has('error'))
                                        <div class="alert alert-warning">
                                            {{Session::get('error')}}
                                        </div>
                                        @endif
                                        <div class="row">
                                            <div class="form-group mb-0 row">
                                                <div class="col-md-10">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">#</span>
                                                        </div>
                                                        <input class="form-control" name="meter_number" type="text" />
                                                        <div class="input-group-append">
                                                            <button class="btn btn-primary" type="submit">
                                                                Search
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <script src="assets/js/jquery-3.6.0.min.js"></script>

        <script src="assets/js/popper.min.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

        <script src="assets/js/moment.min.js"></script>
        <script src="assets/js/bootstrap-datetimepicker.min.js"></script>

        <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

        <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/plugins/datatables/datatables.min.js"></script>

        <script src="assets/js/select2.min.js"></script>

        <script src="assets/js/admin.js"></script>
    </body>

    <!-- Mirrored from truelysell-admin.dreamguystech.com/template/form-vertical.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Nov 2022 04:19:23 GMT -->

    </html>
</x-app-layout>
