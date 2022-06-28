<link rel="stylesheet" href="{{ asset('css/perfil/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/perfil/uikit.css') }}">
<link rel="stylesheet" href="{{ asset('css/perfil/icons.css') }}">
<div id="wrapper">
    <div class="main_content_inner">
        <div class="profile">
            <div class="profile-cover">
                <img src="{{ asset('img/cover.jpg') }}" alt="" draggable="false" />
                <a href="#"> <i class="uil-camera"></i> Editar </a>
            </div>
            <div class="profile-details">
                <div class="profile-image">
                    <img src="{{ asset('avatares') . '/' . $usuario->avatar }}" alt="" draggable="false" />
                    <a href="#"> </a>
                </div>
                <div class="profile-details-info">
                    <h1>{{ $usuario->nombre }}</h1>
                    <p>{{ $usuario->email }} <a href="{{ route('ajustes')}}">Editar </a></p>
                </div>
            </div>
            <div class="nav-profile" uk-sticky="media : @s">
                {{-- <div class="py-md-2 uk-flex-last">
                    <a href="#" class="button primary mr-2"> <i class="uil-message"></i> Chatear</a>
                </div> --}}
                <div>
                    <nav class="responsive-tab ml-lg-3">
                        <ul>
                            <li class="uk-active"><a class="active" href="#">Videos</a></li>
                            <li><a href="{{ route('ajustes')}}">Ajustes</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <!-- pages list  -->

        <div style="margin-top: 20px;"
            class="uk-child-width-1-5@m uk-child-width-1-3@s uk-child-width-1-2 uk-grid-small" uk-grid>
            @foreach ($videos as $video)
                <div>
                    <div class="sl_page_list boosted_pages">
                        <a href="{{ route('videos.subidos.view', $video->id) }}">
                            <div class="sl_page_list_media">
                                <img src="{{ asset('videos/miniaturas') . '/' . $video->miniaturasrc }}"
                                    alt="Picture" />
                            </div>
                        </a>

                        <div class="sl_page_list_info">
                            <h3><a href="{{ route('videos.subidos.view', $video->id) }}">{{ $video->titulo }} </a>
                            </h3>
                            <span> Categoria </span>
                            <div class="sl_page_list_info_btns">
                                <span>
                                    {{-- eliminar video --}}
                                    <button onclick="eliminar()" class="button danger" style="margin-left: 20px">
                                        Eliminar
                                    </button>
                                </span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    function eliminar() {
                        Swal.fire({
                            title: '¿Estas seguro?',
                            text: "No podras recuperar este comentario!",
                            type: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Si, Eliminar!'
                        }).then((result) => {
                            if (result.value) {
                                window.location.href = "{{ route('videos.subidos.delete', $video->id) }}";
                            }
                        })
                    }
                </script>
            @endforeach
        </div>
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
