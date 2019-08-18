<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('partial.header')
</head>
<body>
    @include('partial.navbar')
    <div class="container">
        @yield('content')
    </div>
    @include('partial.footer')
</body>
</html>
