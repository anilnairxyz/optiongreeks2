<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="description" content="Option Price, Implied Volatility and Option Greeks">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
	<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('img/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('img/safari-pinned-tab.svg') }}" color="#5bbad5">
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">
    <meta name="msapplication-TileColor" content="#000000">
    <meta name="msapplication-config" content="{{ asset('img/browserconfig.xml') }}">
    <meta name="theme-color" content="#ffffff">
  </head>
  <body>
  <div class="notice">Your browser doesn't support CSS Grid Layout. Unfortunately, you won't be able to view this website.
  </div>
  <div class="container" id="app">
    @include('includes.header')

    <div id="underlying">
      Underlying
    </div>

    <div id="trade_legs">
      Trade Legs
    </div>

    <div id="chart">
      Chart Area
    </div>

    @include('includes.footer')
  </div>

  <script type="text/javascript">
     WebFontConfig = {
       google: { families: [ 'Montserrat', 'Anton', 'Fjalla+One' ] }
     };
     (function() {
       var wf = document.createElement('script');
       wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
         '://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js';
       wf.type = 'text/javascript';
       wf.async = 'true';
       var s = document.getElementsByTagName('script')[0];
       s.parentNode.insertBefore(wf, s);
     })();
  </script>
  <script type="text/javascript">
     let mainNav = document.getElementById('js-menu');
     let navBarToggle = document.getElementById('js-navbar-toggle');
     navBarToggle.addEventListener('click', function () {
       mainNav.classList.toggle('show_navbar');
	 });
  </script>
  </body>
</html>
