<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('vendor/js/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/js/js.cookie.min.js') }}"></script>
    <script src="{{ asset('vendor/js/bootstrap-hover-dropdown.min.js') }}"></script>
    <script src="{{ asset('vendor/js/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('vendor/js/jquery.blockui.min.js') }}"></script>
    <script src="{{ asset('vendor/js/bootstrap-switch.min.js') }}"></script>
    <script src="{{ asset('vendor/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('vendor/js/additional-methods.min.js') }}"></script>
    <script src="{{ asset('vendor/js/toastr.min.js') }}"></script>
    <script src="{{ asset('vendor/js/app.min.js') }}"></script>
    <script src="{{ asset('vendor/js/login.js') }}"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('vendor/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/css/simple-line-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/css/bootstrap-rtl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/css/bootstrap-switch-rtl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/css/toastr-rtl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/css/components-md-rtl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/css/plugins-md-rtl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/css/login.min.css') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class=" login">
<div id="app">

    @yield('content')

</div>
@include('includes.messages')
</body>
</html>
