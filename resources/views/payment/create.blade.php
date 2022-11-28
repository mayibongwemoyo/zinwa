<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>ZINWA</title>

        <link rel="shortcut icon" href="{{asset('assets/img/favicon.png')}}">

        <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">

        <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/all.min.css')}}">

        <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">

        <link rel="stylesheet" href="{{asset('assets/css/select2.min.css')}}">

        <link rel="stylesheet" href="{{asset('assets/css/admin.css')}}">
    </head>

    <body>
    <div class="main-wrapper">

        <div class="sidebar" id="sidebar">
            <div class="sidebar-logo">
                <a href="#">
                    <img src="{{asset('assets/img/logo.png')}}" class="img-fluid" alt="">
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
                            <h3 class="page-title">Parcel Details</h3>
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
                                <form action="#">
                                    <label for=" "></label>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <table class="table table-striped mb-0" >
                                                        <tbody>
                                                        <tr>
                                                            <td><b>Meter:</b></td>
                                                            <td><code>{{$meter->meter_number}}</code></td>
                                                            <td><b>Address:</b></td>
                                                            <td style ="width:200%"><code>{{$meter->parcel->stand_number}}</code></td>
                                                        </tr>
                                                        <tr>
                                                            <td><b>Owner:</b></td>
                                                            <td>{{$meter->parcel->stand_owner}}</td>
                                                            <td><b>Reading:</b></td>
                                                            <td><code>{{$meter->current_reading}}</code></td>
                                                        </tr>
                                                        <tr>
                                                            <td><b>Coordinates:</b></td>
                                                            <td>{{$meter->coordinates}}</td>
                                                            <td><b>Amount Due:</b></td>
                                                            <td>$<code>{{$meter->amount_due}}</code></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-0 row">
                                            <h4 class="card-title">Enter Meter Reading</h4>

                                            <div class="col-md-10">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">00-</span>
                                                    </div>
                                                    <input class="form-control" type="text" />
                                                    <div class="input-group-append">
                                                        <button class="btn btn-primary" type="button">
                                                            Enter
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <label for=" "></label>
                                        <h4 class="card-title">Consumption</h4>

                                        <div class="form-group row">

                                            <div class="col-lg-10">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"></span>
                                                    </div>
                                                    <input type="text" class="form-control" />
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">L</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <h4 class="card-title">Amount Due</h4>

                                            <div class="col-lg-10">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">$</span>
                                                    </div>
                                                    <input type="text" class="form-control" />
                                                    <div class="input-group-append">
                                                        <span class="input-group-text"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <center><button type="button" class="btn btn-info"><span class="spinner-border spinner-border-sm mr-2" role="status"></span>Print Invoice</button></center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <label> " "  </label>
        <label> " "  </label>

        <div class="page-wrapper">
            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row">
                        <div class="col">
                            <h3 class="page-title">Generate Receipt</h3>
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
                                <form action="#">
                                    <h4 class="card-title">Enter Transaction ID</h4>
                                    <div class="row">
                                        <div class="col-lg-10">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">#</span>
                                                </div>
                                                <input type="text" class="form-control" />
                                                <div class="input-group-append">
                                                    <span class="input-group-text"></span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <label for=" "></label>
                                    <div class="row">

                                        <div class="form-group row">
                                            <h4 class="card-title">Amount Paid</h4>

                                            <div class="col-lg-10">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">$</span>
                                                    </div>
                                                    <input type="text" class="form-control" />
                                                    <div class="input-group-append">
                                                        <span class="input-group-text"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-end">
                                        <button type="submit" class="btn btn-primary">Enter</button>
                                    </div>

                                </form>
                                <label for=" "></label>
                                <label for=" "></label>

                                <center><button type="button" class="btn btn-info"><span class="spinner-border spinner-border-sm mr-2" role="status"></span>Print Receipt</button></center>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>

    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{asset('assets/js/moment.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap-datetimepicker.min.js')}}"></script>

    <script src="{{asset('assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

    <script src="{{asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/datatables.min.js')}}"></script>

    <script src="{{asset('assets/js/select2.min.js')}}"></script>

    <script src="{{asset('assets/js/admin.js')}}"></script>
    </body>

    </html>
</x-app-layout>
<?php
