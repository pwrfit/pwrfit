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
    <link rel="stylesheet" href="{{ asset('css/sidebar/style.css') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />
    {{-- Tagify --}}
    <script src="https://unpkg.com/@yaireo/tagify"></script>
    <script src="https://unpkg.com/@yaireo/tagify/dist/tagify.polyfills.min.js"></script>
    <link href="https://unpkg.com/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
</head>

<body class="app sidebar-mini">
    <div class="page">
        <div class="page-main">
            <div class="sticky">
                @include('layouts.sidebar')
                <div class="main-content app-content mt-0">
                    <div class="side-app">
                        <div class="main-container container-fluid">
                            {{-- upload form --}}
                            <div class="row" style="margin-top: 50px">
                                <div class="col-md-12">
                                    @if (session('success'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Subir video</h3>
                                        </div>
                                        <div class="card-body">
                                            <form action="{{ route('upload.pendiente') }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="title">Titulo</label>
                                                    <input type="text" class="form-control" id="title"
                                                        name="title" placeholder="Titulo del video" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="description">Descripcion</label>
                                                    <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="category">Categoria</label>
                                                    {{-- tagify --}}
                                                    <input type="text" class="form-control" id="category"
                                                        name="category" placeholder="Categoria del video" required>
                                                    <script>
                                                        var input = document.querySelector('input[name="category"]');
                                                        var tagify = new Tagify(input, {
                                                            enforceWhitelist: true,
                                                            whitelist: [
                                                                @foreach ($categorias as $categoria)
                                                                    "{{ $categoria->nombrecat }}",
                                                                @endforeach
                                                            ]
                                                        });
                                                    </script>

                                                </div>
                                                <div class="form-group">
                                                    <label for="video">Video</label>
                                                    <input type="file" class="form-control" id="video"
                                                        name="video" required accept="video/*">
                                                </div>
                                                <div class="form-group">
                                                    <label for="thumbnail">Miniatura</label>
                                                    <input type="file" class="form-control" id="thumbnail"
                                                        name="thumbnail" required accept="image/*">
                                                </div>
                                                <button type="submit" class="btn btn-primary">Subir</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
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

            {{-- SWEET ALERT --}}
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script src="{{ asset('js/sidebar.js') }}"></script>
            <script>
                $(document).ready(function() {
                    $('#sidebarCollapse').on('click', function() {
                        $('#sidebar').toggleClass('active');
                    });
                });
            </script>
        </div>
</body>

</html>
