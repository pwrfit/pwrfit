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
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('bootstrap/dist/css/dataTables.bootstrap5.min.css') }}">
    <!-- Styles -->
    <link href="{{ asset('css/sidebars.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('css/style.css') }}" rel="stylesheet"> --}}
</head>

<body>
    <main>
        @include('layouts.sidebar')
        <div class="container" style="padding-top:50px;">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Editar usuario</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('usuarios.update', $usuario->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                {{-- nombre --}}
                                <div class="form-group">
                                    <label for="nombre">Nombre del usuario</label>
                                    <input type="text" name="nombre" id="nombre" class="form-control"
                                        value="{{ $usuario->nombre }}">
                                </div>
                                {{-- documento --}}
                                <div class="form-group" style="padding-top: 10px">
                                    <label for="documento">Documento</label>
                                    <input type="number" name="documento" id="documento" class="form-control"
                                        value="{{ $usuario->documento }}">
                                </div>
                                {{-- email --}}
                                <div class="form-group" style="padding-top: 10px">
                                    <label for="correo">Correo electrónico</label>
                                    <input type="email" name="correo" id="correo" class="form-control"
                                        value="{{ $usuario->email }}">
                                </div>
                                <div class="form-group" style="padding-top: 10px">
                                    <label for="rol">Rol</label>
                                    <select name="rol" id="rol" class="form-control">
                                        <option value="">Seleccione un rol</option>
                                        @foreach ($roles as $rol)
                                            <option value="{{ $rol->id }}"
                                                {{ $usuario->rol_id == $rol->id ? 'selected' : '' }}>
                                                {{ $rol->rol }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group" style="padding-top: 10px">
                                    <label for="membresia">Membresia</label>
                                    <select name="membresia" id="membresia" class="form-control">
                                        <option value="">Seleccione un rol</option>
                                        @foreach ($membresia as $membresia)
                                            <option value="{{ $membresia->id }}"
                                                {{ $usuario->membresia_id == $membresia->id ? 'selected' : '' }}>
                                                {{ $membresia->tipo }}</option>
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

        @section('scripts')
            <script>
                $(document).ready(function() {
                    $('example').DataTable();
                });
            </script>
        @endsection

        @section('styles')
            <link rel="stylesheet" href="{{ asset('jquery/dist/jquery.dataTables.min.css') }}">
            <link rel="stylesheet" href="{{ asset('bootstrap/dist/css/dataTables.bootstrap5.min.css') }}">
            <link rel="stylesheet" href="{{ asset('jquery/dist/jquery.dataTables.min.js') }}">
            <link rel="stylesheet" href="{{ asset('bootstrap/dist/js/dataTables.bootstrap5.min.js') }}">
        @endsection

        @section('scripts')
            <script src="{{ asset('jquery/dist/jquery.dataTables.min.js') }}"></script>
            <script src="{{ asset('bootstrap/dist/js/dataTables.bootstrap5.min.js') }}"></script>
        @endsection


    </main>
    <script src="{{ asset('jquery/dist/jquery.js') }}"></script>
    <script src="{{ asset('bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/sidebars.js') }}"></script>
    <script src="{{ asset('jquery/dist/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('bootstrap/dist/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('jquery/dist/dataTableSpanish.js') }}"></script>
    <style>
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>
</body>

</html>
