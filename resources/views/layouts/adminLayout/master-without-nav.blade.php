<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        @include('layouts.adminLayout.title-meta')
        @include('layouts.adminLayout.head')
  </head>

    <body class="authentication-bg">
        @yield('content')
        @include('layouts.adminLayout.vendor-scripts')
    </body>
</html>