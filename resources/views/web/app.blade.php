<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <!-- viewport meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="DigiPro - Digital Products Marketplace ">
    <meta name="keywords" content="marketplace, easy digital download, digital product, digital, html5">

    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/public/images/favicon-32x32.png">


    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600" rel="stylesheet">

    <!-- inject:css -->
    <link rel="stylesheet" href="/public/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="/public/css/animate.css">
    <link rel="stylesheet" href="/public/css/font-awesome.min.css">
    <link rel="stylesheet" href="/public/css/jquery-ui.css">
    <link rel="stylesheet" href="/public/css/owl.carousel.css">
    <link rel="stylesheet" href="/public/css/select2.min.css">
    <link rel="stylesheet" href="/public/css/simple-line-icons.css">
    <link rel="stylesheet" href="/public/css/slick.css">
    <link rel="stylesheet" href="/public/css/trumbowyg.min.css">
    <link rel="stylesheet" href="/public/css/venobox.css">
    <link rel="stylesheet" href="/public/style.css">
    <!-- endinject -->
</head>

<body class="home1 mutlti-vendor">

@section('header')
    @include('web.partials.header')
@show

@yield('content')


@section('footer')
    @include('web.partials.footer')
@show
{{-- TODO Footer --}}

<!--//////////////////// JS GOES HERE ////////////////-->

<!-- inject:js -->
<script src="/public/js/vendor/jquery/jquery-1.12.3.js"></script>
<script src="/public/js/vendor/jquery/popper.min.js"></script>
<script src="/public/js/vendor/jquery/uikit.min.js"></script>
<script src="/public/js/vendor/bootstrap.min.js"></script>
<script src="/public/js/vendor/chart.bundle.min.js"></script>
<script src="/public/js/vendor/grid.min.js"></script>
<script src="/public/js/vendor/jquery-ui.min.js"></script>
<script src="/public/js/vendor/jquery.barrating.min.js"></script>
<script src="/public/js/vendor/jquery.countdown.min.js"></script>
<script src="/public/js/vendor/jquery.counterup.min.js"></script>
<script src="/public/js/vendor/jquery.easing1.3.js"></script>
<script src="/public/js/vendor/owl.carousel.min.js"></script>
<script src="/public/js/vendor/select2.full.min.js"></script>
<script src="/public/js/vendor/slick.min.js"></script>
<script src="/public/js/vendor/tether.min.js"></script>
<script src="/public/js/vendor/trumbowyg.min.js"></script>
<script src="/public/js/vendor/venobox.min.js"></script>
<script src="/public/js/vendor/waypoints.min.js"></script>
<script src="/public/js/dashboard.js"></script>
<script src="/public/js/main.js"></script>
<script src="/public/js/map.js"></script>
<!-- endinject -->
</body>
</html>