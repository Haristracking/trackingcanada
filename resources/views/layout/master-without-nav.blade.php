<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-topbar="light">

    <head>
    <meta charset="utf-8" />
    <title>Tracking Website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.ico')}}">
        @include('layouts-be.head-css')
  </head>

    @yield('body')

    @yield('content')

    @include('layouts-be.vendor-scripts')
    </body>
</html>
