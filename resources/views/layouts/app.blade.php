<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" id="js_meta" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Example') }}</title>


    <link href="{{ asset('asstes/bootstrap.css') }}" rel="stylesheet" />


    @stack('style')

</head>

<body>
    @include('layouts.header')


    @yield('content')

    <p>Footer part</p>
<!-- jQuery -->
{{--@yield('script')--}}

{{--<script src="{{ asset('js/report.js') }}"></script>--}}
{{--<script src="{{ asset('js/admin_update.js') }}"></script>--}}
</body>

</html>
