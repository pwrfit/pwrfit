<link rel="stylesheet" href="{{ asset('css/perfil/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/perfil/uikit.css') }}">
<link rel="stylesheet" href="{{ asset('css/perfil/icons.css') }}">
<div id="wrapper">
    <div class="main_content_inner">
        <div class="profile">
            <div class="profile-cover">
                <img src="{{ asset('img/cover.jpg') }}" alt="" draggable="false" />
            </div>
            <div class="profile-details">
                <div class="profile-image">
                    <img src="{{ asset('avatares') . '/' . $usuario->avatar }}" alt="" draggable="false" />
                </div>
                <div class="profile-details-info">
                    <h1>{{ $usuario->nombre }}</h1>
                    <p>{{ $usuario->email }} <a href="{{ route('ajustes') }}">Editar </a></p>
                </div>
            </div>
            <div class="nav-profile" uk-sticky="media : @s">
                {{-- <div class="py-md-2 uk-flex-last">
                    <a href="#" class="button primary mr-2"> <i class="uil-message"></i> Chatear</a>
                </div> --}}
                <div>
                    <nav class="responsive-tab ml-lg-3">
                        <ul>
                            @if (Auth::user()->rol_id == 2)
                                <li><a href="{{ route('perfil') }}">Videos</a></li>
                            @endif
                            <li class="uk-active"><a class="active" href="#">Ajustes</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <!-- pages list  -->

        <section>
            {{-- formulario editar usuaruio --}}
            <div>
                <div class="uk-card uk-card-default" style="margin-top: 20px;">
                    <div class="uk-card-body">
                        @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                        @endif
                        <form action="{{ route('ajustes.update') }}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="uk-margin">
                                <label class="uk-form-label" for="form-stacked-text">Nombre</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" type="text" name="nombre"
                                        value="{{ $usuario->nombre }}" required>
                                </div>
                            </div>
                            <div class="uk-margin">
                                <label class="uk-form-label" for="form-stacked-text">Email</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" type="email" name="email"
                                        value="{{ $usuario->email }}" required>
                                </div>
                            </div>
                            <div class="uk-margin">
                                <label class="uk-form-label" for="form-stacked-text">Documento</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" type="text"
                                        value="{{ $usuario->documento }}" required disabled style="cursor: not-allowed;">
                                </div>
                            </div>
                            <div class="uk-margin">
                                <label class="uk-form-label" for="form-stacked-text">Contraseña</label>
                                <div >
                                    <input class="form-control" type="password" name="password"
                                        value="" required>
                                </div>
                            </div>
                            <div class="uk-margin">
                                <div class="form-group">
                                    <label class="uk-form-label" for="avatar">Avatar</label>
                                    <input type="file" class="form-control" id="avatar" name="avatar">
                                </div>
                            </div>
                            <div class="uk-margin">
                                <button class="uk-button uk-button-primary" type="submit">Editar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<script src="{{ asset('js/uikit.js') }}"></script>
<script src="{{ asset('js/simplebar.js') }}"></script>
@if (session('success'))
    <script>
        Swal.fire({
            title: "{{ session('success') }}",
            type: 'success',
            confirmButtonText: 'OK'
        })
    </script>
@endif
