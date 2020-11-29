<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>SENA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


    <link rel="stylesheet" href="{{ url('css/app.css') }}">

</head>
<body data-sidebar="dark" class="">

    <div id="layout-wrapper">
    @include('layouts.admin.components.navbar')

    @include('layouts.admin.components.sidebar')





    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <a href="/">welcome</a>
            <a href="{{route('dashboard.index')}}">index</a>
            @yield('content')
        </div>
        <!-- End Page-content -->


       @include('layouts.admin.components.footer')
    </div>
    <!-- end main content-->

</div>

<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<script src="{{url('js/app.js')}}"></script>



</body>

</head>

</html>

