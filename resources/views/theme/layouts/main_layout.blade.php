<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-3.3.7.min.css">
    <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    @yield('header')
</head>
<body>

    <div id="site_wrap" class="container-fluid">
        @include('theme.includes.header')
        @yield('content')
        @include('theme.includes.footer')
    </div>

    <script src="/js/bootstrap-3.3.7.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    @yield('js')
</body>
</html>
