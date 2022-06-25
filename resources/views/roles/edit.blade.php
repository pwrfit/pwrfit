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
                            <h3>Editar rol</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('roles.update', $roles->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="rol">Nombre de la categoria</label>
                                    <input type="text" name="rol" id="rol" class="form-control"
                                        value="{{ $roles->rol }}">
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

</body>

</html>
