
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>ALCALDIA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Template de alcaldia" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <link rel="stylesheet" href="{{url('css/app.css')}}">


</head>


<body data-sidebar="dark">

<!-- <body data-layout="horizontal" data-topbar="dark"> -->

<!-- Begin page -->
<div id="layout-wrapper">


@include('Layouts.admin.components.navbar')

    <!-- ========== Left Sidebar Start ========== -->
@include('Layouts.admin.components.sidebar')
    <!-- Left Sidebar End -->


    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">


        <div class="page-content">

            <a href="/">welcome</a>
            <a href="{{route('dashboard.index')}}">Index</a>
            <a href="{{route('dashboard.perfil')}}">Perfil</a>
            @yield('content')
        </div>
        <!-- End Page-content -->


@include('Layouts.admin.components.footer')

    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->


<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<script src="{{url('js/app.js')}}"></script>


</body>

</html>
