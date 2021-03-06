<!doctype html>
<html lang="en">

<head>
    <title>PWRFIT | Desafio aceptado</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Bootstrap CSS -->
    <link href="{{ asset('bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- FontAwesome CSS -->
    <link href="https://site-assets.fontawesome.com/releases/v6.1.1/css/all.css" rel="stylesheet">
    <!-- Styles -->
    {{-- <link href="{{ asset('css/sidebars.css') }}" rel="stylesheet"> --}}

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/sidebar/style.css') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />
</head>

<body class="app sidebar-mini">
    <div class="page">
        <div class="page-main">
            <div class="sticky">
                @include('layouts.sidebar')
                <div class="main-content app-content mt-0">
                    <div class="side-app">
                        <div class="main-container container-fluid">
                            @include('ajustes.ajustes')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
            /* put dropdown in the botom */
            .dropdown {
                position: absolute;
                left: 25px;
                top: 92%;
            }

            /* dropdown item hover */
            .dropdown-item:hover {
                background-color: rgba(51, 143, 255, 0.2);
            }
        </style>
        <script>
            //pathname
            var pathname = window.location.pathname;
            //get elements by id
            var navdashboard = document.getElementById('navdashboard');
            var navcategorias = document.getElementById('navcategorias');
            //add class active
            if (pathname.includes("dashboard")) {
                navdashboard.classList.add("active");
            } else if (pathname.includes("categorias")) {
                navcategorias.classList.add("active");
            }
        </script>
        <script src="{{ asset('bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
        <script>
            $(document).ready(function() {
                $('#sidebarCollapse').on('click', function() {
                    $('#sidebar').toggleClass('active');
                });
            });
        </script>

        {{-- JQUERY JS --}}
        <script src="{{ asset('jquery/dist/jquery.min.js') }}"></script>

        {{-- BOOTSTRAP JS --}}
        <script src="{{ asset('@popperjs/core/dist/umd/popper.min.js') }}"></script>
        <script src="{{ asset('bootstrap/dist/js/bootstrap.min.js') }}"></script>

        {{-- DATA TABLE JS --}}
        <script src="{{ asset('datatable/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('datatable/js/dataTables.bootstrap5.min.js') }}"></script>
        <script src="{{ asset('datatable/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('datatable/js/buttons.bootstrap5.min.js') }}"></script>
        <script src="{{ asset('datatable/js/jszip.min.js') }}"></script>
        <script src="{{ asset('datatable/pdfmake/pdfmake.min.js') }}"></script>
        <script src="{{ asset('datatable/pdfmake/vfs_fonts.js') }}"></script>
        <script src="{{ asset('datatable/js/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('datatable/js/buttons.print.min.js') }}"></script>
        <script src="{{ asset('datatable/js/buttons.colVis.min.js') }}"></script>
        <script src="{{ asset('datatable/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('js/table-data.js') }}"></script>

        {{-- CUSTOM JS --}}
        <script src="{{ asset('js/custom.js') }}"></script>
        <script src="{{ asset('js/sidebar.js')}}"></script>
        <script>
            $(document).ready(function() {
                $('#sidebarCollapse').on('click', function() {
                    $('#sidebar').toggleClass('active');
                });
            });
        </script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
