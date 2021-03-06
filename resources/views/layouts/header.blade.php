<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<nav id="navbar" class="navbar navbar-expand-lg fixed-top sticky">
    <div class="container">
        <a class="navbar-brand" href="/"><img src="{{ asset('logo.png') }}" alt="" width="150px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="mdi mdi-menu text-muted"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0" id="navbar-navlist">
                <li class="nav-item">
                    <a class="nav-link" href="/#home">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#servicios">Servicios</a>
                </li>
                @auth
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="/#precios">Precios</a>
                    </li>
                @endauth
                @if (Request::path() == 'contact')
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('contact')}}">Contacto</a>
                    </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact')}}">Contacto</a>
                        </li>
                @endif
                @auth
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logoutget')}}">Cerrar sesión</a>
                </li>

                @endauth
        </div>
    </div>
</nav>
