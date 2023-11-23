<!doctype html >
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg">

<head>
    <meta charset="utf-8" />
    <title>{{ (isset($pageTitle)) ? $pageTitle . ' ' : '' }}| FOTA</title>
    <meta name="description" content="FOTA. Tracking, KSA">
    <meta name="keywords" content="Fota, Tracking, KSA, Pakistan, Tracking, Devices, Tracking Devices, FOTA, Tracking.ksa, Quaid Ventures">
    <meta name="author" content="Tracking KSA">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('assets/images/logo.ico')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    @include('layouts-be.head-css')
    <style>
        .ajax-loader {
            position: fixed;
            visibility: hidden;
            background-color: rgba(255,255,255,0.7);
            z-index: +10000 !important;
            width: 100%;
            height:100vh;
        }

        .ajax-loader .loader {
            position: relative;
            top:45%;
            left:45%;
            width: 100px;
            height: 100px;
        }

        .ajax-loader span {
            color: #3c9edc;
            font-size: 26px;
            width: 100%;
            padding-left: 17px;
        }
    </style>
</head>

@section('body')
    @include('layouts-be.body')
@show
    <!-- Begin page -->
<div class="ajax-loader">
    <div class="loader">
        <img src="{{ url('assets/images/loading_progress.gif') }}" alt="loading" class="img-responsive" />
        <span>Loading...</span>
    </div>
</div>
    <div id="layout-wrapper">

        @include('layouts-be.topbar')
        @include('layouts-be.sidebar')
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    @yield('content')
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
            @include('layouts-be.footer')
        </div>
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->
    <!-- JAVASCRIPT -->
    @include('layouts-be.vendor-scripts')
    <script src="{{ URL::asset('assets/js/main.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/app.js') }}"></script>
</body>

</html>
