<!doctype html>
<html lang="en">
   <head>
      <title>PWRFIT | Desafio aceptado</title>
      <!-- Bootstrap CSS -->
      <link href="{{ asset('bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
      <!-- FontAwesome CSS -->
      <link href="https://site-assets.fontawesome.com/releases/v6.1.1/css/all.css" rel="stylesheet">
      <style>.bd-placeholder-img {font-size: 1.125rem;text-anchor: middle;-webkit-user-select: none;-moz-user-select: none;user-select: none;}@media (min-width: 768px) {.bd-placeholder-img-lg {font-size: 3.5rem;}}</style>
      <!-- Custom styles for this template -->
      <link href="{{ asset('css/sidebars.css') }}" rel="stylesheet">
   </head>
   <body>
      <main>
        @include('layouts.sidebar')
      </main>
      <script src="{{ asset('bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('js/sidebars.js') }}"></script>
   </body>
</html>
