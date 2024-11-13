<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.asset')
</head>
<body class="p-0">
        @include('layouts.header')
    <contents>
        @yield('content')
    </contents>
        @include('layouts.footer')
</body>
@include('layouts.script')
</html>
