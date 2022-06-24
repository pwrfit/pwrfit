<!doctype html>
<html lang="en">
   <head>
      <title>PWRFIT | Desafio aceptado</title>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
      <!-- Bootstrap CSS -->
      <link href="{{ asset('bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
      <!-- FontAwesome CSS -->
      <link href="https://site-assets.fontawesome.com/releases/v6.1.1/css/all.css" rel="stylesheet">
      <style>.bd-placeholder-img {font-size: 1.125rem;text-anchor: middle;-webkit-user-select: none;-moz-user-select: none;user-select: none;}@media (min-width: 768px) {.bd-placeholder-img-lg {font-size: 3.5rem;}}</style>
      <!-- Styles -->
      <link href="{{ asset('css/sidebars.css') }}" rel="stylesheet">
      <link href="{{ asset('css/style.css') }}" rel="stylesheet">
   </head>
   <body>
      <main>
        @include('layouts.sidebar')
        <div class="content-wrapper" style="width: 40%">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                        </div>
                    </div>
                </div>
            </div>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <a href="">
                            <div class="col-lg-3 col-3">
                                <div class="small-box bg-info">
                                    <div class="inner">
                                        <h3>Gluteos</h3>
                                        <p>0 videos</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa-regular fa-peach" style="font-size: 70px"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </section>
        </div>

      </main>
      <script src="{{ asset('bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('js/sidebars.js') }}"></script>
   </body>
</html>
