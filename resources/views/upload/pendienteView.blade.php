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
    <link rel="stylesheet" href="{{ asset('css/videos/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sidebar/style.css') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />
    <script src="{{ asset('js/playerjs.js') }}"></script>
</head>

<body class="app sidebar-mini">
    <div class="page">
        <div class="page-main">
            <div class="sticky">
                @include('layouts.sidebar')
                <div class="main-content app-content mt-0">
                    <div class="side-app">
                        <div class="main-container container-fluid">
                            <section class="gen-section-padding-3 gen-single-video">
                                <div class="container">
                                    <div class="row no-gutters">
                                        <div class="col-lg-12">
                                            <div style="margin-bottom: 20px; margin-left: 80%;">
                                                <form action="{{ route('videos.pendientes.update', $upload->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('PUT')
                                                    <button type="submit" class="btn btn-success" style="margin-top: 10px;">Aprobar</button>
                                                </form>
                                                <form action="{{ route('videos.pendientes.delete', $upload->id) }}"
                                                    class="eliminar" method="POST" style="display: inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger" style="margin-top: 10px;">Rechazar</button>
                                                </form>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="gen-video-holder">
                                                        <div id="player" style="height: 550px"></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="single-video">
                                                        <div class="gen-single-video-info">
                                                            <h2 class="gen-title">{{ $upload->titulo }}</h2>
                                                            <div class="gen-single-meta-holder">
                                                                <ul>
                                                                    <li>{{ $time }}</li>
                                                                    <li>
                                                                        <span>Categorias</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <p>{{ $upload->descripcion }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
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
        @if (session('success'))
            <script>
                Swal.fire({
                    title: '{{ session('success') }}',
                    type: 'success',
                    confirmButtonText: 'OK'
                })
            </script>
        @endif
        <script>
            $('.eliminar').submit(function(e) {
                e.preventDefault();
                Swal.fire({
                    title: '¿Estás seguro?',
                    text: "No podrás revertir esto!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Si, eliminar!'
                }).then((result) => {
                    if (result.value) {
                        this.submit();
                    }
                })
            })
        </script>
        <script src="{{ asset('js/sidebar.js') }}"></script>
        <script>
            $(document).ready(function() {
                $('#sidebarCollapse').on('click', function() {
                    $('#sidebar').toggleClass('active');
                });
            });
        </script>
        <script>
            $video = "{{ asset('videos/videos').'/'.$upload->videosrc }}";
            $miniatura = "{{ asset('videos/miniaturas').'/'.$upload->miniaturasrc }}";
            var player = new Playerjs({
                id: "player",
                file: $video,
                poster: $miniatura,
            });
        </script>
</body>

</html>
