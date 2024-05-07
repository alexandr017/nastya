<!DOCTYPE html>
<html lang="ru" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="/template/img/fav.png">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->

    <title>@yield('title')</title>
    <meta name="description" content="@yield('meta_description')">


    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="/template/css/linearicons.css">
    <link rel="stylesheet" href="/template/css/font-awesome.min.css">
    <link rel="stylesheet" href="/template/css/bootstrap.css">
    <link rel="stylesheet" href="/template/css/magnific-popup.css">
    <link rel="stylesheet" href="/template/css/jquery-ui.css">
    <link rel="stylesheet" href="/template/css/nice-select.css">
    <link rel="stylesheet" href="/template/css/animate.min.css">
    <link rel="stylesheet" href="/template/css/owl.carousel.css">
    <link rel="stylesheet" href="/template/css/main.css">
</head>
<body>
@include('includes.header')

@yield('content')

@include('includes.footer')

<script src="/template/js/vendor/jquery-2.2.4.min.js"></script>
<script src="/template/js/popper.min.js"></script>
<script src="/template/js/vendor/bootstrap.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
<script src="/template/js/jquery-ui.js"></script>
<script src="/template/js/easing.min.js"></script>
<script src="/template/js/hoverIntent.js"></script>
<script src="/template/js/superfish.min.js"></script>
<script src="/template/js/jquery.ajaxchimp.min.js"></script>
<script src="/template/js/jquery.magnific-popup.min.js"></script>
<script src="/template/js/jquery.nice-select.min.js"></script>
<script src="/template/js/owl.carousel.min.js"></script>
<script src="/template/js/mail-script.js"></script>
<script src="/template/js/main.js"></script>
</body>
</html>
