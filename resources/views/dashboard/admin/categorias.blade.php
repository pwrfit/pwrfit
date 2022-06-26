<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">Categorias</h1>
</div>
<!-- PAGE-HEADER END -->

<!-- Row -->
<div class="row row-sm">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <a id="button" href="{{ route('categorias.create')}}"
                        class="btn btn-primary mb-4 data-table-btn" style="margin-left: 30px;">Nuevo</a>
                    <table id="delete-datatable"
                        class="table table-bordered text-nowrap border-bottom">
                        <thead>
                            <tr>
                                <th class="border-bottom-0">ID</th>
                                <th class="border-bottom-0">Categoria</th>
                                <th class="border-bottom-0">Icono</th>
                                <th class="border-bottom-0">Color</th>
                                <th class="bg-transparent border-bottom-0" style="width: 5%;">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($categorias as $categoria)
                                    <td>{{ $categoria->id }}</td>
                                    <td>{{ $categoria->nombrecat }}</td>
                                    <td>{{ $categoria->icono }}</td>
                                    <td>{{ $categoria->color }}</td>
                                <td>
                                    <div class="g-2">
                                        <a href="{{ route('categorias.edit', $categoria->id)}}" class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Editar"><span class="fa-regular fa-pen-to-square"></span></a>
                                        <form action="{{ route('categorias.delete', $categoria->id) }}" class="eliminar" method="POST" style="display: inline">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn text-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Eliminar"><span class="fa-regular fa-trash-can"></span></button>
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
