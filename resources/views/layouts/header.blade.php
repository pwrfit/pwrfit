<nav id="navbar" class="navbar navbar-expand-lg fixed-top sticky">
    <div class="container">
        <a class="navbar-brand" href="index-1.html"><img src="{{ asset('logo.png') }}" alt="" width="150px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="mdi mdi-menu text-muted"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0" id="navbar-navlist">
                <li class="nav-item">
                    <a class="nav-link active" href="#home">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#servicios">Servicios</a>
                </li>
                @auth
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="#precios">Precios</a>
                    </li>
                @endauth
                <li class="nav-item">
                    <a class="nav-link" href="#">Contacto</a>
                </li>
                @auth
                <li class="nav-item">
                            <a class="nav-link" href="{{ route('logoutget')}}"><i class="fa-solid fa-right-from-bracket" style="font-size: 20px"></i></a>
                </li>

                @endauth
        </div>
    </div>
</nav>
