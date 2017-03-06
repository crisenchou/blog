<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta charset="utf-8"/>
    <title>@yield('title')</title>
    <meta name="keywords" content="@yield('keywords','crisenchou')"/>
    <meta name="description" content="@yield('description','crisenchou')"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    @yield('head')
</head>
<body class="@yield('skin','no-skin')">
@yield('navbar')
@yield('container')
@yield('scripts')
</body>
</html>
