<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> --}}
</x-app-layout>



<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from truelysell-admin.dreamguystech.com/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Nov 2022 04:14:59 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>ZINWA</title>

    <link rel="shortcut icon" href="assets/img/favicon.png">

    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="assets/css/animate.min.css">

    <link rel="stylesheet" href="assets/css/admin.css">
</head>

<body>
    <div class="main-wrapper">
        <div class="header">

        </div>
        {{-- <div class="header">
            <div class="header-left">
                <a href="index.html" class="logo logo-small">
                    <img src="assets/img/logo-icon.png" alt="Logo" width="30" height="30">
                </a>
            </div>
            <a href="javascript:void(0);" id="toggle_btn">
                <i class="fas fa-align-left"></i>
            </a>
            <a class="mobile_btn" id="mobile_btn" href="javascript:void(0);">
                <i class="fas fa-align-left"></i>
            </a>
            <ul class="nav user-menu">

                <li class="nav-item dropdown noti-dropdown">
                    <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                        <i class="far fa-bell"></i> <span class="badge badge-pill"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right notifications">
                        <div class="topnav-dropdown-header">
                            <span class="notification-title">Notifications</span>
                            <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                        </div>
                        <div class="noti-content">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="admin-notification.html">
                                        <div class="media">
                                            <span class="avatar avatar-sm">
                                                <img class="avatar-img rounded-circle" alt=""
                                                    src="assets/img/provider/provider-01.jpg">
                                            </span>
                                            <div class="media-body">
                                                <p class="noti-details">
                                                    <span class="noti-title">Thomas Herzberg have been subscribed</span>
                                                </p>
                                                <p class="noti-time">
                                                    <span class="notification-time">15 Sep 2020 10:20 PM</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="admin-notification.html">
                                        <div class="media">
                                            <span class="avatar avatar-sm">
                                                <img class="avatar-img rounded-circle" alt=""
                                                    src="assets/img/provider/provider-02.jpg">
                                            </span>
                                            <div class="media-body">
                                                <p class="noti-details">
                                                    <span class="noti-title">Matthew Garcia have been subscribed</span>
                                                </p>
                                                <p class="noti-time">
                                                    <span class="notification-time">13 Sep 2020 03:56 AM</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="admin-notification.html">
                                        <div class="media">
                                            <span class="avatar avatar-sm">
                                                <img class="avatar-img rounded-circle" alt=""
                                                    src="assets/img/provider/provider-03.jpg">
                                            </span>
                                            <div class="media-body">
                                                <p class="noti-details">
                                                    <span class="noti-title">Yolanda Potter have been subscribed</span>
                                                </p>
                                                <p class="noti-time">
                                                    <span class="notification-time">12 Sep 2020 09:25 PM</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="admin-notification.html">
                                        <div class="media">
                                            <span class="avatar avatar-sm">
                                                <img class="avatar-img rounded-circle" alt="User Image"
                                                    src="assets/img/provider/provider-04.jpg">
                                            </span>
                                            <div class="media-body">
                                                <p class="noti-details">
                                                    <span class="noti-title">Ricardo Flemings have been
                                                        subscribed</span>
                                                </p>
                                                <p class="noti-time">
                                                    <span class="notification-time">11 Sep 2020 06:36 PM</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="admin-notification.html">
                                        <div class="media">
                                            <span class="avatar avatar-sm">
                                                <img class="avatar-img rounded-circle" alt="User Image"
                                                    src="assets/img/provider/provider-05.jpg">
                                            </span>
                                            <div class="media-body">
                                                <p class="noti-details">
                                                    <span class="noti-title">Maritza Wasson have been subscribed</span>
                                                </p>
                                                <p class="noti-time">
                                                    <span class="notification-time">10 Sep 2020 08:42 AM</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="admin-notification.html">
                                        <div class="media">
                                            <span class="avatar avatar-sm">
                                                <img class="avatar-img rounded-circle" alt="User Image"
                                                    src="assets/img/provider/provider-06.jpg">
                                            </span>
                                            <div class="media-body">
                                                <p class="noti-details">
                                                    <span class="noti-title">Marya Ruiz have been subscribed</span>
                                                </p>
                                                <p class="noti-time">
                                                    <span class="notification-time">9 Sep 2020 11:01 AM</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="admin-notification.html">
                                        <div class="media">
                                            <span class="avatar avatar-sm">
                                                <img class="avatar-img rounded-circle" alt="User Image"
                                                    src="assets/img/provider/provider-07.jpg">
                                            </span>
                                            <div class="media-body">
                                                <p class="noti-details">
                                                    <span class="noti-title">Richard Hughes have been subscribed</span>
                                                </p>
                                                <p class="noti-time">
                                                    <span class="notification-time">8 Sep 2020 06:23 AM</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="admin-notification.html">View all Notifications</a>
                        </div>
                    </div>
                </li>


                <li class="nav-item dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle user-link  nav-link"
                        data-bs-toggle="dropdown">
                        <span class="user-img">
                            <img class="rounded-circle" src="assets/img/user.jpg" width="40" alt="Admin">
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="admin-profile.html">Profile</a>
                        <a class="dropdown-item" href="login.html">Logout</a>
                    </div>
                </li>

            </ul>
        </div> --}}


         <div class="sidebar" id="sidebar">
            <div class="sidebar-logo">
                <a href="index.html">
                    <img src="assets/img/logo-icon.png" class="img-fluid" alt="">
                </a>
            </div>
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="active">
                            <a href="index.html"><i class="fas fa-columns"></i> <span>Dashboard</span></a>
                        </li>
                        <li>
                            <a href="categories.html"><i class="fas fa-layer-group"></i> <span>Categories</span></a>
                        </li>
                        <li>
                            <a href="subcategories.html"><i class="fab fa-buffer"></i> <span>Sub Categories</span></a>
                        </li>
                        <li>
                            <a href="service-list.html"><i class="fas fa-bullhorn"></i> <span> Services</span></a>
                        </li>
                        <li>
                            <a href="total-report.html"><i class="far fa-calendar-check"></i> <span> Booking
                                    List</span></a>
                        </li>
                        <li>
                            <a href="payment_list.html"><i class="fas fa-hashtag"></i> <span>Payments</span></a>
                        </li>
                        <li>
                            <a href="ratingstype.html"><i class="fas fa-star-half-alt"></i> <span>Rating
                                    Type</span></a>
                        </li>
                        <li>
                            <a href="review-reports.html"><i class="fas fa-star"></i> <span>Ratings</span></a>
                        </li>
                        <li>
                            <a href="subscriptions.html"><i class="far fa-calendar-alt"></i>
                                <span>Subscriptions</span></a>
                        </li>
                        <li>
                            <a href="wallet.html"><i class="fas fa-wallet"></i> <span> Wallet</span></a>
                        </li>
                        <li>
                            <a href="service-providers.html"><i class="fas fa-user-tie"></i> <span> Service
                                    Providers</span></a>
                        </li>
                        <li>
                            <a href="settings.html"><i class="fas fa-cog"></i> <span> Settings</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-border-all"></i> <span> Application</span> <span
                                    class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="chat.html">Chat</a></li>
                                <li><a href="calendar.html">Calendar</a></li>
                                <li><a href="inbox.html">Email</a></li>
                            </ul>
                        </li>
                        <li class="menu-title">
                            <span>Pages</span>
                        </li>
                        <li>
                            <a href="admin-profile.html"><i class="fas fa-user-plus"></i> <span>Profile</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-user-lock"></i> <span> Authentication </span> <span
                                    class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="login.html"> Login </a></li>
                                <li><a href="register.html"> Register </a></li>
                                <li><a href="forgot-password.html"> Forgot Password </a></li>
                                <li><a href="lock-screen.html"> Lock Screen </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-exclamation-circle"></i> <span> Error Pages </span>
                                <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="error-404.html">404 Error </a></li>
                                <li><a href="error-500.html">500 Error </a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="users.html"><i class="fas fa-users"></i> <span>Users</span></a>
                        </li>
                        <li>
                            <a href="blank-page.html"><i class="far fa-file"></i> <span>Blank Page</span></a>
                        </li>
                        <li>
                            <a href="maps-vector.html"><i class="far fa-map"></i> <span>Vector Maps</span></a>
                        </li>
                        <li class="menu-title">
                            <span>UI Interface</span>
                        </li>
                        <li>
                            <a href="components.html"><i class="fas fa-vector-square"></i> <span>Components</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fab fa-wpforms"></i> <span> Forms </span> <span
                                    class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="form-basic-inputs.html">Basic Inputs </a></li>
                                <li><a href="form-input-groups.html">Input Groups </a></li>
                                <li><a href="form-horizontal.html">Horizontal Form </a></li>
                                <li><a href="form-vertical.html"> Vertical Form </a></li>
                                <li><a href="form-mask.html"> Form Mask </a></li>
                                <li><a href="form-validation.html"> Form Validation </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-table"></i> <span> Tables </span> <span
                                    class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="tables-basic.html">Basic Tables </a></li>
                                <li><a href="data-tables.html">Data Table </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><i class="fas fa-code"></i> <span>Multi Level</span> <span
                                    class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li class="submenu">
                                    <a href="javascript:void(0);"> <span>Level 1</span> <span
                                            class="menu-arrow"></span></a>
                                    <ul style="display: none;">
                                        <li><a href="javascript:void(0);"><span>Level 2</span></a></li>
                                        <li class="submenu">
                                            <a href="javascript:void(0);"> <span> Level 2</span> <span
                                                    class="menu-arrow"></span></a>
                                            <ul style="display: none;">
                                                <li><a href="javascript:void(0);">Level 3</a></li>
                                                <li><a href="javascript:void(0);">Level 3</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:void(0);"> <span>Level 2</span></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0);"> <span>Level 1</span></a>
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
                        <div class="col-12">
                            <h3 class="page-title">Welcome Admin!</h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="dash-widget-header">
                                    <span class="dash-widget-icon bg-primary">
                                        <i class="far fa-user"></i>
                                    </span>
                                    <div class="dash-widget-info">
                                        <h3>429</h3>
                                        <h6 class="text-muted">Users</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="dash-widget-header">
                                    <span class="dash-widget-icon bg-primary">
                                        <i class="fas fa-user-shield"></i>
                                    </span>
                                    <div class="dash-widget-info">
                                        <h3>148</h3>
                                        <h6 class="text-muted">Providers</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="dash-widget-header">
                                    <span class="dash-widget-icon bg-primary">
                                        <i class="fas fa-qrcode"></i>
                                    </span>
                                    <div class="dash-widget-info">
                                        <h3>124</h3>
                                        <h6 class="text-muted">Services</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="dash-widget-header">
                                    <span class="dash-widget-icon bg-primary">
                                        <i class="far fa-credit-card"></i>
                                    </span>
                                    <div class="dash-widget-info">
                                        <h3>$11378</h3>
                                        <h6 class="text-muted">Subscription</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 d-flex">

                        <div class="card card-table flex-fill">
                            <div class="card-header">
                                <h4 class="card-title">Recent Bookings</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-center">
                                        <thead>
                                            <tr>
                                                <th>Customer</th>
                                                <th>Date</th>
                                                <th>Service</th>
                                                <th>Status</th>
                                                <th>Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-nowrap">
                                                    <img class="avatar-xs rounded-circle"
                                                        src="assets/img/customer/user-05.jpg" alt="User Image">
                                                    Annette Silva
                                                </td>
                                                <td class="text-nowrap">9 Sep 2020</td>
                                                <td>Car Repair Services</td>
                                                <td>
                                                    <span class="badge bg-danger inv-badge">Pending</span>
                                                </td>
                                                <td>
                                                    <div class="font-weight-600">$50</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-nowrap">
                                                    <img class="avatar-xs rounded-circle"
                                                        src="assets/img/customer/user-06.jpg" alt="User Image">
                                                    Stephen Wilson
                                                </td>
                                                <td class="text-nowrap">8 Sep 2020</td>
                                                <td>Steam Car Wash</td>
                                                <td>
                                                    <span class="badge bg-danger inv-badge">Pending</span>
                                                </td>
                                                <td>
                                                    <div class="font-weight-600">$14</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-nowrap">
                                                    <img class="avatar-xs rounded-circle"
                                                        src="assets/img/customer/user-07.jpg" alt="User Image"> Ryan
                                                    Rodriguez
                                                </td>
                                                <td class="text-nowrap">7 Sep 2020</td>
                                                <td>House Cleaning Services</td>
                                                <td>
                                                    <span class="badge bg-danger inv-badge">Pending</span>
                                                </td>
                                                <td>
                                                    <div class="font-weight-600">$100</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-nowrap">
                                                    <img class="avatar-xs rounded-circle"
                                                        src="assets/img/customer/user-08.jpg" alt="User Image"> Lucile
                                                    Devera
                                                </td>
                                                <td class="text-nowrap">6 Sep 2020</td>
                                                <td>Interior Designing</td>
                                                <td>
                                                    <span class="badge bg-danger inv-badge">Pending</span>
                                                </td>
                                                <td>
                                                    <div class="font-weight-600">$5</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-nowrap">
                                                    <img class="avatar-xs rounded-circle"
                                                        src="assets/img/customer/user-09.jpg" alt="User Image"> Roland
                                                    Storey
                                                </td>
                                                <td class="text-nowrap">5 Sep 2020</td>
                                                <td>Plumbing Services</td>
                                                <td>
                                                    <span class="badge bg-danger inv-badge">Pending</span>
                                                </td>
                                                <td>
                                                    <div class="font-weight-600">$150</div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6 d-flex">

                        <div class="card card-table flex-fill">
                            <div class="card-header">
                                <h4 class="card-title">Payments</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-center">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>User</th>
                                                <th>Provider</th>
                                                <th>Service</th>
                                                <th>Amount</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>15 Sep 2020</td>
                                                <td>
                                                    <span class="table-avatar">
                                                        <a href="#" class="avatar avatar-xs mr-2">
                                                            <img class="avatar-img rounded-circle" alt=""
                                                                src="assets/img/customer/user-02.jpg">
                                                        </a>
                                                        <a href="javascript:void(0);">Nancy Olson</a>
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="table-avatar">
                                                        <a href="#" class="avatar avatar-xs mr-2">
                                                            <img class="avatar-img rounded-circle" alt=""
                                                                src="assets/img/provider/provider-02.jpg">
                                                        </a>
                                                        <a href="javascript:void(0);">Matthew Garcia</a>
                                                    </span>
                                                </td>
                                                <td>Car Repair Services</td>
                                                <td>$50</td>
                                                <td>
                                                    <span class="badge badge-dark">Pending</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>14 Sep 2020</td>
                                                <td>
                                                    <span class="table-avatar">
                                                        <a href="#" class="avatar avatar-xs mr-2">
                                                            <img class="avatar-img rounded-circle" alt=""
                                                                src="assets/img/customer/user-03.jpg">
                                                        </a>
                                                        <a href="javascript:void(0);">Ramona Kingsley</a>
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="table-avatar">
                                                        <a href="#" class="avatar avatar-xs mr-2">
                                                            <img class="avatar-img rounded-circle" alt=""
                                                                src="assets/img/provider/provider-03.jpg">
                                                        </a>
                                                        <a href="javascript:void(0);">Yolanda Potter</a>
                                                    </span>
                                                </td>
                                                <td>Electric Panel Repairing Service</td>
                                                <td>$45</td>
                                                <td>
                                                    <span class="badge badge-dark">Pending</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>13 Sep 2020</td>
                                                <td>
                                                    <span class="table-avatar">
                                                        <a href="#" class="avatar avatar-xs mr-2">
                                                            <img class="avatar-img rounded-circle" alt=""
                                                                src="assets/img/customer/user-04.jpg">
                                                        </a>
                                                        <a href="javascript:void(0);">Ricardo Lung</a>
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="table-avatar">
                                                        <a href="#" class="avatar avatar-xs mr-2">
                                                            <img class="avatar-img rounded-circle" alt=""
                                                                src="assets/img/provider/provider-04.jpg">
                                                        </a>
                                                        <a href="javascript:void(0);">Ricardo Flemings</a>
                                                    </span>
                                                </td>
                                                <td>Steam Car Wash</td>
                                                <td>$14</td>
                                                <td>
                                                    <span class="badge badge-dark">Pending</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>12 Sep 2020</td>
                                                <td>
                                                    <span class="table-avatar">
                                                        <a href="#" class="avatar avatar-xs mr-2">
                                                            <img class="avatar-img rounded-circle" alt=""
                                                                src="assets/img/customer/user-05.jpg">
                                                        </a>
                                                        <a href="javascript:void(0);">Annette Silva</a>
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="table-avatar">
                                                        <a href="#" class="avatar avatar-xs mr-2">
                                                            <img class="avatar-img rounded-circle" alt=""
                                                                src="assets/img/provider/provider-05.jpg">
                                                        </a>
                                                        <a href="javascript:void(0);">Maritza Wasson</a>
                                                    </span>
                                                </td>
                                                <td>House Cleaning Services</td>
                                                <td>$100</td>
                                                <td>
                                                    <span class="badge badge-dark">Pending</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>11 Sep 2020</td>
                                                <td>
                                                    <span class="table-avatar">
                                                        <a href="#" class="avatar avatar-xs mr-2">
                                                            <img class="avatar-img rounded-circle" alt=""
                                                                src="assets/img/customer/user-06.jpg">
                                                        </a>
                                                        <a href="javascript:void(0);">Stephen Wilson</a>
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="table-avatar">
                                                        <a href="#" class="avatar avatar-xs mr-2">
                                                            <img class="avatar-img rounded-circle" alt=""
                                                                src="assets/img/provider/provider-06.jpg">
                                                        </a>
                                                        <a href="javascript:void(0);">Marya Ruiz</a>
                                                    </span>
                                                </td>
                                                <td>Computer & Server AMC Service</td>
                                                <td>$80</td>
                                                <td>
                                                    <span class="badge badge-info">Inprogress</span>
                                                </td>
                                            </tr>
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

    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <script src="assets/js/admin.js"></script>
</body>

<!-- Mirrored from truelysell-admin.dreamguystech.com/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Nov 2022 04:16:02 GMT -->

</html>
