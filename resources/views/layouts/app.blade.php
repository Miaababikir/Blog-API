<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

@include('includes.head')

<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Blog') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white page-md">
<div id="app">
    @include('includes.header')
    <div class="page-container">
    <!-- BEGIN CONTENT -->
        @include('includes.sidebar')
        <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
            <div class="page-content">
                @yield('content')
            </div>
        </div>
    </div>

</div>

<!-- Scripts -->
@include('includes.scripts')
@include('includes.messages')
</body>
</html>
