<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/admin/demo/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="/admin/demo/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="/admin/demo/assets/libs/css/style.css">
    <link rel="stylesheet" href="/admin/demo/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="/admin/demo/assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="/admin/demo/assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="/admin/demo/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/admin/demo/assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="/admin/demo/assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <title>Административная панель</title>
</head>

<body>
<!-- ============================================================== -->
<!-- main wrapper -->
<!-- ============================================================== -->
<div class="dashboard-main-wrapper">
    <!-- ============================================================== -->
    <!-- navbar -->
    <!-- ============================================================== -->
    <div class="dashboard-header">
        <nav class="navbar navbar-expand-lg bg-white fixed-top">
            <a class="navbar-brand" href="/" target="_blank" style="font-size: 16px">dostoprimechatelnosti.by</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto navbar-right-top">
                    <li class="nav-item dropdown nav-user">
                            <a class="dropdown-item" href="/logout"><i class="fas fa-power-off mr-2"></i>Выйти</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- ============================================================== -->
    <!-- end navbar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- left sidebar -->
    <!-- ============================================================== -->
    <div class="nav-left-sidebar sidebar-dark">
        <div class="menu-list">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="d-xl-none d-lg-none" href="/admin-panel">Панель управления</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="/admin-panel"><i class="fas fa-home"></i>Панель управления</a>
                        </li>

                        <li class="nav-divider">Туристический отдел</li>
                        <li class="nav-item">
                            <a class="nav-link" href="/admin-panel/attraction-categories"><i class="fas fa-map-signs"></i>Категории</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/admin-panel/attractions"><i class="fas fa-images"></i>Достопримечательности</a>
                        </li>

                        <li class="nav-divider">Информационный отдел</li>
                        <li class="nav-item">
                            <a class="nav-link" href="/admin-panel/blog"><i class="fas fa-print"></i>Записи блога</a>
                        </li>

                        <li class="nav-divider">Служебный отдел</li>
                        <li class="nav-item">
                            <a class="nav-link" href="/admin-panel/static-pages"><i class="fas fa-fw fa-file"></i>Статические страницы</a>
                        </li>



                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end left sidebar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- wrapper  -->
    <!-- ============================================================== -->
    <div class="dashboard-wrapper">
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                <!-- ============================================================== -->
                <!-- pageheader  -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h1 class="pageheader-title">@yield('h1')</h1>
                            <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                            @if(isset($breadcrumbs))
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/admin-panel" class="breadcrumb-link">Панель управления</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">{{$breadcrumbs}}</li>
                                    </ol>
                                </nav>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>


                <!-- ============================================================== -->
                <!-- end pageheader  -->
                <!-- ============================================================== -->
                <div class="ecommerce-widget">
                    @yield('content')
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
{{--        <div class="footer">--}}
{{--            <div class="container-fluid">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">--}}
{{--                        Copyright © 2018. All rights reserved. Template designed by <a href="https://colorlib.com/wp/">Colorlib</a>.--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <!-- ============================================================== -->
        <!-- end footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end wrapper  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- end main wrapper  -->
<!-- ============================================================== -->
<!-- Optional JavaScript -->
<!-- jquery 3.3.1 -->
<script src="/admin/demo/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<!-- bootstap bundle js -->
<script src="/admin/demo/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
<!-- slimscroll js -->
<script src="/admin/demo/assets/vendor/slimscroll/jquery.slimscroll.js"></script>
<!-- main js -->
<script src="/admin/demo/assets/libs/js/main-js.js"></script>
<!-- chart chartist js -->
<script src="/admin/demo/assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
<!-- sparkline js -->
<script src="/admin/demo/assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
<!-- morris js -->
<script src="/admin/demo/assets/vendor/charts/morris-bundle/raphael.min.js"></script>
<script src="/admin/demo/assets/vendor/charts/morris-bundle/morris.js"></script>
<!-- chart c3 js -->
<script src="/admin/demo/assets/vendor/charts/c3charts/c3.min.js"></script>
<script src="/admin/demo/assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
<script src="/admin/demo/assets/vendor/charts/c3charts/C3chartjs.js"></script>
<script src="/admin/demo/assets/libs/js/dashboard-ecommerce.js"></script>
</body>

</html>
