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
</head>

<body class="app sidebar-mini">
    <div class="page">
        <div class="page-main">
            <div class="sticky">
                @include('layouts.sidebar')
                <div class="main-content app-content mt-0">
                    <div class="side-app">
                        <div class="main-container container-fluid">
                            <div class="col-md-12">
                                <div class="card" style="margin-top: 50px">
                                    <div class="card-header">
                                        <h3>Crear usuario</h3>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ route('usuarios.store') }}" method="POST">
                                            @csrf
                                            @method('POST')
                                            <div class="form-group">
                                                <label for="nombre">Nombre completo del usuario</label>
                                                <input type="text" name="nombre" id="nombre" class="form-control"
                                                    value="" required>
                                            </div>
                                            <div class="form-group" style="padding-top: 10px;">
                                                <label for="documento">Documento del usuario</label>
                                                <input type="text" name="documento" id="documento" class="form-control"
                                                    value="" required>
                                            </div>
                                            <div class="form-group" style="padding-top: 10px;">
                                                <label for="email">Email del usuario</label>
                                                <input type="email" name="email" id="email" class="form-control"
                                                    value="" required>
                                            </div>
                                            <div class="form-group" style="padding-top: 10px;">
                                                <label for="password">Contraseña del usuario</label>
                                                <input type="password" name="password" id="password" class="form-control"
                                                    value="" required>
                                            </div>
                                            <div class="form-group" style="padding-top: 10px;">
                                                <label for="rol">Rol del usuario</label>
                                                <select name="rol" id="rol" class="form-control" required>
                                                    <option value="">Seleccione un rol</option>
                                                    @foreach ($roles as $rol)
                                                    <option value="{{ $rol->id }}">{{ $rol->rol }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group" style="padding-top: 10px;">
                                                <label for="membresia">Membresia del usuario</label>
                                                <select name="membresia" id="membresia" class="form-control" required>
                                                    <option value="">Seleccione una membresia</option>
                                                    @foreach ($membresias as $membresia)
                                                    <option value="{{ $membresia->id }}">{{ $membresia->tipo }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <button type="submit" class="btn btn-primary" style="margin-top: 10px">Guardar</button>
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

        <!-- JQUERY JS -->
        <script src="{{ asset('jquery/dist/jquery.min.js') }}"></script>

        <!-- BOOTSTRAP JS -->
        <script src="{{ asset('@popperjs/core/dist/umd/popper.min.js') }}"></script>
        <script src="{{ asset('bootstrap/dist/js/bootstrap.min.js') }}"></script>
</body>

</html>
