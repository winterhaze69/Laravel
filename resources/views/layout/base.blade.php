<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Name - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('./css/style.css')}}">
  </head>
  <body>
  <main>
    <header>
      @include('layout.menu') <!-- ou je pourrai mettre le menu directement ici comme je m en sers sur chaque page-->
    </header>
    <aside>
   <!-- {{-- @include('layout.sidebar')include  --}} permet d include, c est comme extend mais rien a voir, c est une sous partie. -->
  </aside>
        @yield('content')
  </main>
  <script type="text/javascript" src="{{ asset('./js/script.js')}}"></script>
</body>
</html>
