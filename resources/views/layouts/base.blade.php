<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/top.css') }}">
    <link rel="stylesheet" href="{{ asset('css/freelance.css') }}">
    <link rel="stylesheet" href="{{ asset('css/company.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hamburgermenu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/gnav.css') }}">
</head>

<body>
    <main>
        @yield('content')
        @include('includes.contact')
    </main>

    <footer>
        @include('includes.footer')
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3/dist/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('../../js/slick.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('../../js/common.js') }}"></script>
</body>
</html>
