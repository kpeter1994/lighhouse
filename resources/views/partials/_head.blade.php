<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="description" content="@yield('description')">

    <meta property="og:title" content="@yield('fb-title')">
    <meta property="og:description" content="@yield('fb-description')">
    <meta property="og:image" content="@yield('fb-img')">
    <meta property="og:url" content="@yield('fb-url')">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">

    @vite(['resources/js/app-guest.js'])
    @yield('link')

    <title>@yield('title')</title>
</head>

