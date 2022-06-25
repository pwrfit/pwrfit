<div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;">
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="{{ route('dashboard') }}" id="navdashboard" class="nav-link link-dark">
                <i class="fa-regular fa-house-chimney" style="padding-right: 5px"></i>
                Inicio
            </a>
        </li>
        <li>
            <a href="{{ route('categorias') }}" id="navcategorias" class="nav-link link-dark">
                <i class="fa-regular fa-list" style="padding-right: 5px"></i>
                Categorias
            </a>
        </li>
        @if (Auth::user()->rol != 1)
            <li>
                <a href="#" class="nav-link link-dark">
                    <i class="fa-regular fa-message" style="padding-right: 5px"></i>
                    Chat
                </a>
            </li>
            <li>
                <a href="#" class="nav-link link-dark">
                    <i class="fa-regular fa-shapes" style="padding-right: 5px"></i>
                    Rutinas seguidas
                </a>
            </li>
        @endif
        @if (Auth::user()->rol != 1)
        @else
            <li>
                <a href="#" class="nav-link link-dark">
                    <i class="fa-regular fa-user-check" style="padding-right: 5px"></i>
                    Roles
                </a>
            </li>
            <li>
                <a href="{{ route('usuarios.crud') }}" class="nav-link link-dark">
                    <i class="fa-regular fa-user-group" style="padding-right: 5px"></i>
                    Usuarios
                </a>
            </li>
            <li>
                <a href="{{ route('usuarios.crud') }}" class="nav-link link-dark">
                    <i class="fa-regular fa-video-arrow-up-right" style="padding-right: 5px"></i>
                    Videos pendientes
                </a>
            </li>
            <li>
                <a href="{{ route('usuarios.crud') }}" class="nav-link link-dark">
                    <i class="fa-regular fa-video" style="padding-right: 5px"></i>
                    Videos
                </a>
            </li>
        @endif
        @if (Auth::user()->rol != 1)
            <li>
                <a href="#" class="nav-link link-dark">
                    <i class="fa-regular fa-users" style="padding-right: 5px"></i>
                    Otros usuarios
                </a>
            </li>
            @if (Auth::user()->rol == 2)
                <li>
                    <a href="#" class="nav-link link-dark">
                        <i class="fa-regular fa-cloud-arrow-up" style="padding-right: 5px"></i>
                        Subir video
                    </a>
                </li>
            @endif
        @endif

    </ul>
    <hr>
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
<div class="b-example-divider"></div>
