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
                <a href="index.html">
                    <img src="assets/img/logo.png" class="img-fluid" alt="">
                </a>
            </div>
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li>
                            <a href="dashboard"><i class="fas fa-columns"></i> <span>Dashboard</span></a>
                        </li>


                        <li>
                            <a href="payment"><i class="fas fa-wallet"></i> <span> Payments</span></a>
                        </li>

                        <li>
                            <a href="add_user"><i class="fas fa-user-plus"></i> <span>Add Meter</span></a>
                        </li>

                        <li class="active">
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
                            <h3 class="page-title">Parcel Data</h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <p class="card-text">
                                    Viewing data
                                </p>
                            </div>
                            <div class="card-body">
                                @if(Session::has('success'))
                                    <div class="alert alert-success" role="alert">
                                        {{Session::get('success')}}
                                    </div>
                                @endif
                                <div class="table-responsive">
                                    <table class="datatable table table-stripped">
                                        <thead>
                                        <tr>
                                            <th>Meter</th>
                                            <th>Owner</th>
                                            <th>Coordinates</th>
                                            <th>Address</th>
                                            <th>Reading</th>
                                            <th>Amount Due</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($meters as $meter)
                                            <tr>
                                                <td>{{$meter->meter_number}}</td>
                                                <td>{{$meter->parcel->stand_owner}}</td>
                                                <td>{{$meter->coordinates}}</td>
                                                <td>{{$meter->parcel->stand_number}}</td>
                                                <td>{{$meter->current_reading}}</td>
                                                <td>{{$meter->amount_due}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
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

    </html>
</x-app-layout>
