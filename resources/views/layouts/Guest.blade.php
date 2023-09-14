<!doctype html>
<html lang="hu">

    @include('partials._head')

<body>
    <div id="app">
        @include('partials._nav')

        @yield('content')

        @include('partials._footer')

    </div>

</body>
</html>
