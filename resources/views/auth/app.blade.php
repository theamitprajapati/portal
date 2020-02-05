<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="shortcut icon" href="assets/global/images/favicon.png">
        <link href="assets/global/css/style.css" rel="stylesheet">
        <link href="assets/global/css/ui.css" rel="stylesheet">
        <link href="assets/global/plugins/bootstrap-loading/lada.min.css" rel="stylesheet">


</head>      
<body class="account2" data-page="login">
            @yield('content')
   
    <p class="account-copyright">
            <span>Copyright © 2020 </span><span>THEMES LAB</span>.<span>All rights reserved.</span>
        </p>
       <script src="assets/global/plugins/jquery/jquery-3.1.0.min.js"></script>
        <script src="assets/global/plugins/jquery/jquery-migrate-3.0.0.min.js"></script>
        <script src="assets/global/plugins/gsap/main-gsap.min.js"></script>
        <script src="assets/global/plugins/tether/js/tether.min.js"></script>
        <script src="assets/global/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/global/plugins/backstretch/backstretch.min.js"></script>
        <script src="assets/global/plugins/bootstrap-loading/lada.min.js"></script>
        <script src="assets/global/js/pages/login-v2.js"></script>
</body>
</html>
