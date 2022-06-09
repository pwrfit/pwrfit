<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>PWRFIT | Desafio aceptado</title>
    @include('auth.styles')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/fontawesome/css/all.css') }}"">

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />
    <link href="{{ asset('bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('index/css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('index/css/colors/default.css') }}" rel="stylesheet" type="text/css" id="color-opt" />

</head>
<script>
    var assets = "{{ URL::asset('index') }}";
</script>

<body data-bs-spy="scroll" data-bs-target="#navbar-navlist" data-bs-offset="60">
    @extends('layouts.header')
    <section class="bg-home4 overflow-hidden" id="contact">
        <div class="container">
            <div class="position-relative" style="z-index: 1;">
                <div class="row align-items-center">
                    <div class="col-xl-5 col-lg-6">
                        <div>
                            <form method="post" action="http://127.0.0.1:8001/contactstore">
                                @csrf
                                <div id="simple-msg"></div>
                                <div class="row">
                                   <div class="col-12">
                                         <label class="form-label">Nombre completo</label>
                                            <input name="nombre" id="nombre" type="text" class="form-control" required>
                                   </div>
                                   <div class="col-12">
                                         <label class="form-label">Tu correo</label>
                                            <input name="email" id="email" type="email" class="form-control" required>
                                   </div>
                                   <div class="col-12">
                                         <label class="form-label">Asunto</label>
                                            <input name="subject" id="subject" class="form-control" required>
                                   </div>
                                   <div class="col-12">
                                      <div class="mb-3">
                                         <label class="form-label">Comentarios</label>
                                            <textarea name="comments" id="comments" rows="4" class="form-control" required></textarea>
                                      </div>
                                   </div>
                                </div>
                                <div class="row">
                                   <div class="col-12">
                                      <div class="d-grid">
                                         <button type="submit" class="btn btn-primary" style="height:50px">Enviar</button>
                                      </div>
                                   </div>
                                </div>
                             </form>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-xl-1">
                        <div class="mt-lg-0 mt-5">
                            <img id="Messy" src="{{ asset('index/images/home/Open Doodles - Messy.svg') }}"
                                alt="Messy" style="width:100% ;" draggable="false">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @extends('layouts.footer')
    <div id="style-switcher" onclick="toggleSwitcher()" style="left: -189px; border: 1px solid black;">
        <div>
            <h6>Escoge un color</h6>
            <ul class="pattern list-unstyled mb-0">
                <li>
                    <a class="color1" href="javascript: void(0);" onclick="setColor('default')"></a>
                </li>
                <li>
                    <a class="color2" href="javascript: void(0);" onclick="setColor('green')"></a>
                </li>
                <li>
                    <a class="color3" href="javascript: void(0);" onclick="setColor('warning')"></a>
                </li>
                <li>
                    <a class="color4" href="javascript: void(0);" onclick="setColor('blue')"></a>
                </li>
                <li>
                    <a class="color5" href="javascript: void(0);" onclick="setColor('info')"></a>
                </li>
                <li>
                    <a class="color6" href="javascript: void(0);" onclick="setColor('purple')"></a>
                </li>
                <li>
                    <a class="color7" href="javascript: void(0);" onclick="setDark('dark')"></a>
                </li>
                <li>
                    <a class="color8" href="javascript: void(0);" onclick="setColor('light')"></a>
                </li>
            </ul>
        </div>
        <div class="bottom">
            <a href="javascript: void(0);" id="palette" class="settings rounded-end"
                style="background-color: rgba(255,255,255,0.0);color: black; border-right: 1px solid black; border-top: 1px solid black; border-bottom: 1px solid black;"><i
                    class="fa-light fa-palette"></i></a>
        </div>
    </div>

    <script src="{{ asset('bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('index/js/app.js') }}"></script>
    <script>
        if (localStorage.getItem('color') == 'dark') {
            setDark2();
        }
    </script>
</body>

</html>
