<div class="content-wrapper" style="width: 40%; padding-top: 30px;">
    <section class="content">
        <div class="container-fluid">
            <div class="row cat">
                @foreach ($categorias as $categoria)
                    <div class="col-lg-4 col-4">
                        <a href="">
                            <div class="small-box bg-{{ $categoria->color }}">
                                <div class="inner">
                                    <h3>{{ $categoria->nombrecat }}</h3>
                                    <p>0 videos</p>
                                </div>
                                <div class="icon">
                                    <i class="fa-regular fa-{{ $categoria->icono }}" style="font-size: 70px"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
