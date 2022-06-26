<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">Usuarios</h1>
</div>
<!-- PAGE-HEADER END -->

<!-- Row -->
<div class="row row-sm">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <a id="button" href="{{ route('usuarios.create') }}" class="btn btn-primary mb-4 data-table-btn"
                        style="margin-left: 30px;">Nuevo</a>
                    <table id="delete-datatable" class="table table-bordered text-nowrap border-bottom">
                        <thead>
                            <tr>
                                <th class="border-bottom-0">ID</th>
                                <th class="border-bottom-0">Nombre</th>
                                <th class="border-bottom-0">Documento</th>
                                <th class="border-bottom-0">Email</th>
                                <th class="border-bottom-0">Rol</th>
                                <th class="border-bottom-0">Membresia</th>
                                <th class="bg-transparent border-bottom-0" style="width: 5%;">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($usuarios as $usuario)
                                    <td>{{ $usuario->id }}</td>
                                    <td>{{ $usuario->nombre }}</td>
                                    <td>{{ $usuario->documento }}</td>
                                    <td>{{ $usuario->email }}</td>
                                    <td>{{ $usuario->rol->rol }}</td>
                                    <td>{{ $usuario->membresia->tipo }}</td>
                                    <td>
                                        <div class="g-2">
                                            <a href="{{ route('usuarios.edit', $usuario->id) }}"
                                                class="btn text-primary btn-sm" data-bs-toggle="tooltip"
                                                data-bs-original-title="Editar"><span
                                                    class="fa-regular fa-pen-to-square"></span></a>
                                            <form action="{{ route('usuarios.delete', $usuario->id) }}"
                                                class="eliminar" method="POST" style="display: inline">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn text-danger btn-sm" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Eliminar"><span
                                                        class="fa-regular fa-trash-can"></span></button>
                                            </form>
                                        </div>
                                    </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
