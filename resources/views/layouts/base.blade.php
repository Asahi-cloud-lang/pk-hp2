<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/slick-theme.css') }}"/>
  <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
  <link rel="stylesheet" href="{{ asset('css/top.css') }}">
  <link rel="stylesheet" href="{{ asset('css/user.css') }}">
  <link rel="stylesheet" href="{{ asset('css/company.css') }}">
  <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
  <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
</head>

<body>
  <main>
    @yield('content')
    @include('includes.contact')
  </main>

  <footer>
    @include('includes.footer')
  </footer>
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="{{ asset('../../js/slick.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('../../js/common.js') }}"></script>
</body>
</html>