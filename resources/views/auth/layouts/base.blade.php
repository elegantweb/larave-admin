<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>{{ config('app.name') }} - {{ config('admin.name') }} - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('vendor/admin/node_modules/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/admin/node_modules/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/admin/node_modules/ionicons/dist/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/admin/node_modules/admin-lte/dist/css/AdminLTE.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/admin/node_modules/admin-lte/plugins/iCheck/square/blue.css') }}">
    @stack('styles')
</head>
<body class="hold-transition login-page @yield('body-class')">
    @include('admin::auth.partials.body')
    <script src="{{ asset('vendor/admin/node_modules/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/admin/node_modules/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/admin/node_modules/admin-lte/plugins/iCheck/icheck.min.js') }}"></script>
    <script>$('input').iCheck({ checkboxClass: 'icheckbox_square-blue', radioClass: 'iradio_square-blue', increaseArea: '20%' })</script>
    @stack('scripts')
</body>
</html>
