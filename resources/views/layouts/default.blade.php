<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @yield('custom-header')
</head>
<body>
@include('good-system::partials.top-navigation')

@yield('content')

@yield('scripts-before')
@yield('scripts-middle')
@yield('scripts-after')
</body>
</html>
