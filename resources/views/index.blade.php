<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>PWRFIT | Desafio aceptado</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/fontawesome/css/all.css')}}">

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />
    <link href="{{ asset('bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('index/css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="" rel="stylesheet" type="text/css" id="color-opt" />

</head>
<script>
    var assets = "{{ URL::asset('index') }}";
</script>

<body data-bs-spy="scroll" data-bs-target="#navbar-navlist" data-bs-offset="60">
    @extends('layouts.header')
    <section class="bg-home4 overflow-hidden" id="home">
        <div class="container">
            <div class="position-relative" style="z-index: 1;">
                <div class="row align-items-center">
                    <div class="col-xl-5 col-lg-6">
                        <div>
                            <h6 class="home-subtitle text-danger mb-4">Pwrfit</h6>
                            <h1>Un Gimnasio Como Nunca Lo Habías Visto</h1>
                            <p class="fs-17 pt-4">Descubre cientos de videos y rutinas con los que podrás mantener
                                un buen estado de salud físico y mental. ¡Únete Ahora!</p>
                            <div class="subscribe-form mt-5">
                                <div class="mt-4">
                                    @auth
                                        <a href="{{ route('login') }}" class="btn btn-primary">Rutinas</a>
                                    @else
                                        <a href="{{ route('register')}}" class="btn btn-danger">Únete</a>
                                        <a href="{{ route('login') }}" class="btn btn-primary">Inicia sesión</a>
                                    @endauth
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-xl-1">
                        <div class="mt-lg-0 mt-5">
                            <img id="meditating" src="{{ asset('index/images/home/Open Doodles - Meditating.svg') }}"
                                alt="Meditando" style="width:100% ;" draggable="false">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.shape')
    </section>
    <section class="bg-home4 overflow-hidden" id="servicios" style="background-image: url('https://raw.githubusercontent.com/pwrfit/svg/3095724b4b7736ee718d7cb68bf2e39b4df3d4a9/blob.svg'); background-size: 100%; background-repeat:no-repeat;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center mb-5" style="">
                        <h3>Bienvenido a <span style="color: #ffb300; font-family: 'Poppins';">PWR FIT</span></h3>
                        <p class="text-muted">No seas una máquina, sé la máquina.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-2">
                    <img id="levitate" src="{{ asset('index/images/home/Open Doodles - Levitate.svg') }}"
                        alt="Levitando" style="width:100%;" draggable="false">
                </div>
                <div class="col-lg-4 col-md-2">
                    <div class="feature-box card border-0 mt-3">
                        <div class="card-body">
                            <div class="feature-icon mx-auto">
                                <i class="fa-solid fa-heart-pulse"></i>
                            </div>
                            <div class="mt-4">
                                <h6 class="mb-3 fs-17">Cardio</h6>
                                <p class="text-muted">Nuestras rutinas de cardio harán que tu corazón se fortalezca
                                    y la salud de nuestros pulmones sea buena.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-2">
                    <div class="feature-box card border-0 mt-3">
                        <div class="card-body">
                            <div class="feature-icon mx-auto">
                                <i class="fa-solid fa-weight-hanging"></i>
                            </div>
                            <div class="mt-4">
                                <h6 class="mb-3 fs-17">Full-body</h6>
                                <p class="text-muted">Con nuestras rutinas de fullbody activaremos una gran cantidad
                                    de músculos</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-2">
                    <img id="chilling" src="{{ asset('index/images/home/Open Doodles - Chilling.svg') }}"
                        alt="Meditando" style="width:100%;transform: scaleX(-1);" draggable="false">
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-box card border-0 mt-3">
                        <div class="card-body">
                            <div class="feature-icon mx-auto">
                                <i class="fa-solid fa-dumbbell"></i>
                            </div>
                            <div class="mt-4">
                                <h6 class="mb-3 fs-17">Entrenamiento Exhaustivo</h6>
                                <p class="text-muted"> Con nuestras rutinas de ejercicio exhaustivo la disciplina y
                                    perseverancia harán de ti y de tu cuerpo un templo.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="feature-box card border-0 mt-3">
                        <div class="card-body">
                            <div class="feature-icon mx-auto">
                                <i class="fa-solid fa-peach"></i>
                            </div>
                            <div class="mt-4">
                                <h6 class="mb-3 fs-17">Gluteos</h6>
                                <p class="text-muted">¿Quiéres ser una Kardashian? jelou amiga, ya sabes en dónde
                                    podrás serlo.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @auth
        @else
        <section class="bg-home4 overflow-hidden" id="precios" style="background-image: url('https://raw.githubusercontent.com/pwrfit/svg/3249c739df3df6c6caca256534de58c7fea83296/stars.svg');  background-repeat:no-repeat;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center mb-4">
                            <h3>¡ELIGE EL PACK QUE <span style="color: #ffb300; font-family: 'Poppins';">MEJOR SE ADAPTE A
                                    TI!</span></h3>
                            <p class="text-muted mt-2">Tenemos los mejores precios en el mercado, solo elige el plan que
                                desees y haz parte de esta familia</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div id="pricebox2" class="price-box card border-0 mt-4" style="">
                            <div class="text-center">
                                <h5 class="mb-0">Casual</h5>
                            </div>
                            <div class="plan-price text-center mt-4">
                                <h1 class="text-danger mb-0 display-4 fw-medium"><sup>$</sup>20.900<sub
                                        class="text-muted">/mes</sub></h1>
                            </div>
                            <div class="price-features mt-5">
                                <p><i class="fa-solid fa-check text-danger"></i> Acceso a todas las rutinas</p>
                                <p><i class="fa-solid fa-check text-danger"></i> Cancela cuando quieras</p>
                                <p><i class="fa-solid fa-check text-danger"></i> 7 días de prueba GRATIS</p>
                            </div>
                            <div class="text-center mt-4">
                                <a href="{{ route('register')}}" class="btn btn-danger w-100">Únete</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div id="pricebox3" class="price-box card border-0 mt-4">
                            <div class="text-center">
                                <h5 class="mb-0">Comprometido</h5>
                            </div>
                            <div class="plan-price text-center mt-4">
                                <h1 class="text-warning mb-0 display-4 fw-medium"><sup>$</sup>199.900<sub
                                        class="text-muted"><br>/año</sub></h1>
                            </div>
                            <div class="price-features mt-5">
                                <p><i class="fa-solid fa-check text-warning"></i> Acceso a todas las rutinas</p>
                                <p><i class="fa-solid fa-check text-warning"></i> Cancela cuando quieras</p>
                                <p><i class="fa-solid fa-check text-warning"></i> 30 días de prueba GRATIS</p>
                            </div>
                            <div class="text-center mt-4">
                                <a href="{{ route('register')}}" class="btn btn-warning w-100">Únete</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div id="pricebox" class="price-box card border-0 mt-4">
                            <div class="text-center">
                                <h5 class="mb-0">Aficionado</h5>
                            </div>
                            <div class="plan-price text-center mt-4">
                                <h1 class="text-info mb-0 display-4 fw-medium"><sup>$</sup>5.900<sub
                                        class="text-muted">/mes</sub></h1>
                            </div>
                            <div class="price-features mt-5">
                                <p><i class="fa-solid fa-check text-info"></i> Escoges las rutinas que desees</p>
                                <p><i class="fa-solid fa-check text-info"></i> Puedes escoger solo de 1 a 3 rutinas</p>
                            </div>
                            <div class="text-center mt-4">
                                <a href="{{ route('register')}}" class="btn btn-info w-100">Únete</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endauth
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
</body>

</html>
