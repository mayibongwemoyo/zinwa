<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from truelysell-admin.dreamguystech.com/template/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Nov 2022 04:17:12 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>ZNWA</title>

    <link rel="shortcut icon" href="assets/img/favicon.png">

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/admin.css">
</head>

<body>
    <div class="main-wrapper">
        <div class="login-page">
            <div class="login-body container">
                <div class="loginbox">
                    <div class="login-right-wrap">
                        <div class="account-header">
                            <div class="account-logo text-center mb-4">
                                <a href="index.html">
                                    <img src="assets/img/logo.png" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>
                        <div class="login-header">
                            <h3><span>ZINWA Bill Payment System</span></h3>
                            <p class="text-muted">Access to our dashboard</p>
                        </div>

                        @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"><button class="btn btn-primary btn-block account-btn"> Dashboard</button></a>
                            @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"> <button class="btn btn-primary btn-block account-btn"> Log in</button></a>
<label>  </label>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline"><button class="btn btn-primary btn-block account-btn"> Register</button></a>
                                @endif
                            @endauth
                        </div>
                        @endif








                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <script src="assets/js/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/admin.js"></script>
</body>

<!-- Mirrored from truelysell-admin.dreamguystech.com/template/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Nov 2022 04:17:12 GMT -->

</html>
















