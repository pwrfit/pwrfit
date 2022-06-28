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
    <link rel="stylesheet" href="{{ asset('css/comentarios.css') }}">
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
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="gen-video-holder">
                                                        <div id="player" style="height: 550px"></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="single-video">
                                                        <div class="gen-single-video-info">
                                                            <h2 class="gen-title">{{ $videos->titulo }}</h2>

                                                            <div class="gen-single-video-meta">
                                                                <ul class="list-unstyled">
                                                                    <li>
                                                                        <a href="{{ route('perfil', $videos->usuario->id) }}">
                                                                            <img class="channel-icon"
                                                                            src="{{ asset('avatares') . '/' . $videos->usuario->avatar }}"
                                                                            alt="" draggable="false">
                                                                        </a>
                                                                        <a href="" style="color: black;">
                                                                            {{ $videos->usuario->nombre }}
                                                                        </a><br>
                                                                    </li>
                                                                </ul>
                                                            <div class="gen-single-meta-holder">
                                                                <ul>
                                                                    <li>{{ Str::ucfirst(Carbon\Carbon::parse($videos->created_at)->diffForHumans()) }}
                                                                    </li>
                                                                    <li>
                                                                        <span>Categorias</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <p>{{ $videos->descripcion }}</p>
                                                            <div class="gen-socail-share mt-0">

                                                            </div>
                                                            <!-- Contenedor Principal -->
                                                            <div class="comments-container">
                                                            </div>
                                                            {{-- caja de comentarios --}}
                                                            <div class="card">
                                                                <div class="comment-box">
                                                                    <div class="card-header">
                                                                        <h3>Deja un comentario</h3>
                                                                    </div>
                                                                    <div class="card-body">
                                                                        <form
                                                                            action="{{ route('comentarios.store') }}"
                                                                            method="POST">
                                                                            @csrf
                                                                            <input type="hidden" name="video_id"
                                                                                value="{{ $videos->id }}">
                                                                            <input type="hidden" name="user_id"
                                                                                value="{{ Auth::user()->id }}">
                                                                            <div class="form-group">
                                                                                <textarea class="form-control" name="comentario" id="comentario" rows="4" placeholder="Escribe un comentario..."
                                                                                    maxlength="255"></textarea>
                                                                            </div>
                                                                            <button type="submit"
                                                                                class="btn btn-primary">Enviar</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @foreach ($comentarios as $comentario)
                                                                <ul id="comments-list" class="comments-list">
                                                                    <li>
                                                                        <div class="comment-main-level">
                                                                            <!-- Avatar -->
                                                                            <div class="comment-avatar"><img
                                                                                    src="{{ asset('avatares') . '/' . $comentario->usuario->avatar }}"
                                                                                    alt="" draggable="false">
                                                                            </div>
                                                                            <!-- Contenedor del Comentario -->
                                                                            <div class="comment-box">
                                                                                <div class="comment-head">
                                                                                    <h6 class="comment-name by-author">
                                                                                        <a
                                                                                            href="#">{{ $comentario->usuario->nombre }}</a>
                                                                                    </h6>
                                                                                    <span>
                                                                                        {{ Str::ucfirst(Carbon\Carbon::parse($comentario->created_at)->diffForHumans()) }}
                                                                                    </span>
                                                                                    @if (Auth::user()->id == $comentario->usuario_id)
                                                                                        <i class="fa-solid fa-trash"
                                                                                            onclick="eliminar()"></i>
                                                                                        <script>
                                                                                            function eliminar() {
                                                                                                Swal.fire({
                                                                                                    title: '¿Estas seguro?',
                                                                                                    text: "No podras recuperar este comentario!",
                                                                                                    type: 'warning',
                                                                                                    showCancelButton: true,
                                                                                                    confirmButtonColor: '#3085d6',
                                                                                                    cancelButtonColor: '#d33',
                                                                                                    confirmButtonText: 'Si, Eliminar!'
                                                                                                }).then((result) => {
                                                                                                    if (result.value) {
                                                                                                        window.location.href = "{{ route('comentario.eliminar', $comentario->id) }}";
                                                                                                    }
                                                                                                })
                                                                                            }
                                                                                        </script>
                                                                                    @endif
                                                                                </div>
                                                                                <div class="comment-content">
                                                                                    <p>{{ $comentario->comentario }}
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            @endforeach
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
        <script src="{{ asset('js/sidebar.js') }}"></script>
        <script>
            $(document).ready(function() {
                $('#sidebarCollapse').on('click', function() {
                    $('#sidebar').toggleClass('active');
                });
            });
        </script>
        <script>
            $video = "{{ asset('videos/videos') . '/' . $videos->videosrc }}";
            $miniatura = "{{ asset('videos/miniaturas') . '/' . $videos->miniaturasrc }}";
            var player = new Playerjs({
                id: "player",
                file: $video,
                poster: $miniatura,
            });
        </script>
</body>

</html>
