<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('page-title')</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    {{--<link href="{{asset('css/bootstrap.min.css'}}" rel="stylesheet">--}}
    @yield('page-styles')
</head>

<body>
    @yield('page-content')
    @include('layouts.partials.footer')
    <!-- Bootstrap core JavaScript -->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    @yield('page-scripts')
</body>

</html>
