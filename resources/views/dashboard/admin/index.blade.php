<div class="content-wrapper" style="width: 40%; padding-top: 30px;">
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
            <div class="row cat">
                <div class="col-lg-4 col-2">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ $categorias->count()}}</h3>
                            <p>Categorias</p>
                        </div>
                        <div class="icon">
                            <i class="fa-regular fa-shapes" style="font-size: 70px"></i>
                        </div>
                        <a href="{{ route('categorias') }}" class="small-box-footer">Administrar<i class="fa-solid fa-circle-arrow-right"
                                style="padding-left: 5px;"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-2">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ $roles->count()}}</h3>
                            <p>Roles</p>
                        </div>
                        <div class="icon">
                            <i class="fa-regular fa-user-check" style="font-size: 70px"></i>
                        </div>
                        <a href="{{ route('roles') }}" class="small-box-footer">Administrar<i class="fa-solid fa-circle-arrow-right"
                                style="padding-left: 5px;"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-2">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{ $usuarios->count()}}</h3>
                            <p>Usuarios registrados</p>
                        </div>
                        <div class="icon">
                            <i class="fa-regular fa-user" style="font-size: 70px"></i>
                        </div>
                        <a href="{{ route('usuarios') }}" class="small-box-footer">Administrar<i class="fa-solid fa-circle-arrow-right"
                                style="padding-left: 5px;"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-2">
                    <div class="small-box bg-light">
                        <div class="inner">
                            <h3>{{ $pendientes->count() }}</h3>
                            <p>Videos pendientes</p>
                        </div>
                        <div class="icon">
                            <i class="fa-regular fa-video-arrow-up-right" style="font-size: 70px"></i>
                        </div>
                        <a href="{{ route('videos.pendientes') }}" class="small-box-footer" style="color: #111;">Administrar<i class="fa-solid fa-circle-arrow-right"
                                style="padding-left: 5px;"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-2">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{$subidos->count()}}</h3>
                            <p>Videos subidos</p>
                        </div>
                        <div class="icon">
                            <i class="fa-regular fa-video" style="font-size: 70px"></i>
                        </div>
                        <a href="{{ route('videos.subidos')}}" class="small-box-footer">Administrar<i class="fa-solid fa-circle-arrow-right"
                                style="padding-left: 5px;"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
