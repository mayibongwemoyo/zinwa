<x-app-layout>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from truelysell-admin.dreamguystech.com/template/form-vertical.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Nov 2022 04:19:23 GMT -->

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

                        <li class="active">
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
                            <h3 class="page-title">Register Parcel</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item active">Add Stand Details</li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                {{-- <h4 class="card-title">Two Column Vertical Form</h4> --}}
                            </div>
                            <div class="card-body">
                                <form action="#">
                                    <h4 class="card-title">Meter Info</h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Meter Number</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Meter Coordinates</label>
                                                <input type="text" class="form-control">
                                            </div>

                                        </div>

                                    </div>
                                    <h4 class="card-title">Stand Information</h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Owner First Name</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Owner Last Name</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Parcel Type</label>
                                                <select class="select">
                                                    <option>Select</option>
                                                    <option value="1">Urban A1</option>
                                                    <option value="2">Urban A2</option>
                                                    <option value="1">Urban B1</option>
                                                    <option value="2">Urban B2</option>
                                                    <option value="3">Commercial A1</option>
                                                    <option value="4">Commercial A2</option>
                                                    <option value="3">Commercial B1</option>
                                                    <option value="4">Commercial B2</option>
                                                </select>
                                            </div>


                                            {{-- <div class="form-group">
                                                <label class="d-block">Gender:</label>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gender"
                                                        id="gender_male" value="option1">
                                                    <label class="form-check-label" for="gender_male">Male</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gender"
                                                        id="gender_female" value="option2">
                                                    <label class="form-check-label" for="gender_female">Female</label>
                                                </div>
                                            </div> --}}
                                        </div>
                                        {{-- <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Repeat Password</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div> --}}

                                    <div class="text-end">
                                        <button type="submit" class="btn btn-primary">Add</button>
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
