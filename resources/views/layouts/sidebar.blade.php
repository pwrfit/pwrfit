<div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
<div class="app-sidebar">
    <div class="side-header">
        <a class="header-brand1" href="{{ route('dashboard') }}">
            <img src="{{ asset('logo.png') }}" style="width: 150px" class="header-brand-img light-logo1" alt="logo">
        </a>
        <!-- LOGO -->
    </div>
    <div class="main-sidemenu">
        <ul class="side-menu">
            <li class="sub-category">
                <h3>Navegacion</h3>
            </li>
            <li class="slide">
                <a class="side-menu__item has-link" id="navdashboard" data-bs-toggle="slide"
                    href="{{ route('dashboard') }}"><i class="side-menu__icon fa-regular fa-house"></i><span
                        class="side-menu__label">Inicio</span></a>
            </li>
            <li class="slide">
                <a class="side-menu__item has-link" id="navcategorias" data-bs-toggle="slide"
                    href="{{ route('categorias') }}"><i class="side-menu__icon fa-regular fa-list"></i><span
                        class="side-menu__label">Categorias</span></a>
            </li>
            @if (Auth::user()->rol_id != 1)
                <li class="slide">
                    <a class="side-menu__item has-link" id="navchat" data-bs-toggle="slide" href="#"><i
                            class="side-menu__icon fa-regular fa-message"></i><span
                            class="side-menu__label">Chat</span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" id="navrutseg" data-bs-toggle="slide" href="#"><i
                            class="side-menu__icon fa-regular fa-shapes"></i><span class="side-menu__label">Rutinas
                            seguidas</span></a>
                </li>
            @endif
            @if (Auth::user()->rol_id == 1)
                <li class="slide">
                    <a class="side-menu__item has-link" id="navroles" data-bs-toggle="slide"
                        href="{{ route('roles') }}"><i class="side-menu__icon fa-light fa-user-check"></i><span
                            class="side-menu__label">Roles</span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" id="navusuarios" data-bs-toggle="slide"
                        href="{{ route('usuarios') }}"><i class="side-menu__icon fa-light fa-users"></i><span
                            class="side-menu__label">Usuarios</span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" id="navvideospen" data-bs-toggle="slide"
                        href="#"><i class="side-menu__icon fa-light fa-video-arrow-up-right"></i><span
                            class="side-menu__label">Videos pendientes</span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" id="navvideos" data-bs-toggle="slide"
                        href="#"><i class="side-menu__icon fa-light fa-video"></i><span
                            class="side-menu__label">Videos subidos</span></a>
                </li>
            @endif
        </ul>
        <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24"
                height="24" viewBox="0 0 24 24">
                <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
            </svg>
        </div>
    </div>
    {{-- Dropdown usuario --}}
    <hr class="dropdown-divider" style="margin-top: 130%;">
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle"
            id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="{{ asset('img/user.jpg') }}" class="rounded-circle me-2" width="32" height="32">
            <strong>{{ Auth::user()->nombre }}</strong>
        </a>
        <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
            <li><a class="dropdown-item" href="#">Ajustes</a></li>
            <li><a class="dropdown-item" href="#">Perfil</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li style="cursor: pointer;">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a class="dropdown-item" :href="route('logout')"
                        onclick="event.preventDefault();
                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </a>
                </form>
            </li>

        </ul>
    </div>
</div>
<!--/APP-SIDEBAR-->
</div>
<script src="{{ asset('bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

<script>
    //pathname
    var pathname = window.location.pathname;
    //get elements by id
    var navdashboard = document.getElementById('navdashboard');
    var navcategorias = document.getElementById('navcategorias');
    var navusuarios = document.getElementById('navusuarios');
    var navroles = document.getElementById('navroles');
    var navvideos = document.getElementById('navvideos');
    var navvideospen = document.getElementById('navvideospen');
    //add class active
    if (pathname.includes("dashboard")) {
        navdashboard.classList.add("active");
    } else if (pathname.includes("categorias")) {
        navcategorias.classList.add("active");
    } else if (pathname.includes("usuarios")) {
        navusuarios.classList.add("active");
    } else if (pathname.includes("roles")) {
        navroles.classList.add("active");
    } else if (pathname.includes("videos")) {
        navvideos.classList.add("active");
    } else if (pathname.includes("videospendientes")) {
        navvideospen.classList.add("active");
    }
</script>
