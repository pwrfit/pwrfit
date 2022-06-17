<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>PWRFIT | Desafio aceptado</title>
    <link rel="stylesheet" href="{{ asset('css/pp.css') }}">
    <link rel="stylesheet" type="text/css" id="color-opt" href="">
    <link rel="stylesheet" href="{{ asset('css/fontawesome/css/all.css') }}">
    <script>
        var assets = "{{ URL::asset('index') }}";
    </script>
</head>

<body class="bg-home4">
    <div class="container">
        <p>Completemos algunos datos antes de empezar.</p>
        @if (Request::isMethod('get'))
            <div class="progress-bar">
                <div class="step">
                    <p>Edad</p>
                    <div class="bullet">
                        <span>1</span>
                    </div>
                    <div class="check fas fa-check"></div>
                </div>
                <div class="step">
                    <p>Cuerpo</p>
                    <div class="bullet">
                        <span>2</span>
                    </div>
                    <div class="check fas fa-check"></div>
                </div>
                <div class="step">
                    <p>Género</p>
                    <div class="bullet">
                        <span>3</span>
                    </div>
                    <div class="check fas fa-check"></div>
                </div>
                <div class="step">
                    <p>Resumen</p>
                    <div class="bullet">
                        <span>4</span>
                    </div>
                    <div class="check fas fa-check"></div>
                </div>
            </div>
        @else
            @if (isset($_POST['edad']))
                <div class="progress-bar">
                    <div class="step">
                        <p class="active">Edad</p>
                        <div class="bullet active">
                            <span>1</span>
                        </div>
                        <div class="check fas fa-check active"></div>
                    </div>
                    <div class="step">
                        <p>Cuerpo</p>
                        <div class="bullet">
                            <span>2</span>
                        </div>
                        <div class="check fas fa-check"></div>
                    </div>
                    <div class="step">
                        <p>Género</p>
                        <div class="bullet">
                            <span>3</span>
                        </div>
                        <div class="check fas fa-check"></div>
                    </div>
                    <div class="step">
                        <p>Resumen</p>
                        <div class="bullet">
                            <span>4</span>
                        </div>
                        <div class="check fas fa-check"></div>
                    </div>
                </div>
            @else
                @if (isset($_POST['peso'])  && isset($_POST['altura']))
                    <div class="progress-bar">
                        <div class="step">
                            <p class="active">Edad</p>
                            <div class="bullet active">
                                <span>1</span>
                            </div>
                            <div class="check fas fa-check active"></div>
                        </div>
                        <div class="step">
                            <p class="active">Cuerpo</p>
                            <div class="bullet active">
                                <span>2</span>
                            </div>
                            <div class="check fas fa-check active"></div>
                        </div>
                        <div class="step">
                            <p>Género</p>
                            <div class="bullet">
                                <span>3</span>
                            </div>
                            <div class="check fas fa-check"></div>
                        </div>
                        <div class="step">
                            <p>Resumen</p>
                            <div class="bullet">
                                <span>4</span>
                            </div>
                            <div class="check fas fa-check"></div>
                        </div>
                    </div>
                @else
                    @if (isset($_POST['genero']))
                        <div class="progress-bar">
                            <div class="step">
                                <p class="active">Edad</p>
                                <div class="bullet active">
                                    <span>1</span>
                                </div>
                                <div class="check fas fa-check active"></div>
                            </div>
                            <div class="step">
                                <p class="active">Cuerpo</p>
                                <div class="bullet active">
                                    <span>2</span>
                                </div>
                                <div class="check fas fa-check active"></div>
                            </div>
                            <div class="step">
                                <p class="active">Género</p>
                                <div class="bullet active">
                                    <span>3</span>
                                </div>
                                <div class="check fas fa-check active"></div>
                            </div>
                            <div class="step">
                                <p>Resumen</p>
                                <div class="bullet">
                                    <span>4</span>
                                </div>
                                <div class="check fas fa-check"></div>
                            </div>
                        </div>
                    @endif
                @endif
            @endif
        @endif
        @if (Request::isMethod('get'))
            <div class="form-outer">
                <form action="" method="post">
                    @csrf
                    <div class="page slide-page">
                        <div class="field">
                            <div class="label">Edad</div>
                            <input type="number" min="14" name="edad" placeholder="18" required>
                        </div>
                        <div class="field">
                            <button type="submit">Siguiente</button>
                        </div>
                    </div>
                </form>
            @else
                @if (isset($_POST['edad']))
                    <div class="form-outer">
                        <form action="" method="post">
                            @csrf
                            <div class="page">
                                <div class="field">
                                    <div class="label">Peso en kilogramos</div>
                                    <input type="number" name="peso" placeholder="80" min="10" required>
                                </div>
                                <div class="field">
                                    <div class="label">Altura en metros</div>
                                    <input type="number" name="altura" placeholder="1.80" step="0.01" max="2.51" required>
                                </div>
                                <div class="field btns">
                                    <button type="submit">Siguiente</button>
                                </div>
                            </div>
                        </form>
                    </div>
                @else
                    @if (isset($_POST['peso'])  && isset($_POST['altura']))
                        <div class="form-outer">
                            <form action="" method="post">
                                @csrf
                                <div class="page">
                                    <div class="field">
                                        <div class="label">Género</div>
                                        <select name="genero" required>
                                            <option value="Masculino">Masculino</option>
                                            <option value="Femenino">Femenino</option>
                                            <option value="Otro">Otro</option>
                                        </select>
                                    </div>
                                    <div class="field btns">
                                        <button type="submit">Siguiente</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    @else
                        @if (isset($_POST['genero']))
                            <div class="form-outer">
                                <form action="" method="post">
                                    @csrf
                                    @foreach ($datos as $dato)
                                    <div class="page">
                                        <p>Edad: {{ $dato->edad }} años</p><br>
                                        <p>Altura: {{ $dato->altura }}m</p><br>
                                        <p>Peso: {{ $dato->peso }}kg</p><br>
                                        <p>Género: {{ $dato->genero }}</p><br>
                                        <p>IMC: </p>
                                    @endforeach
                                        <div class="field btns">
                                            <button class="submit">Aceptar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        @endif
                    @endif
                @endif
        @endif
        {{--
            </form> --}}
    </div>
    </div>
    <script src="{{ asset('js/pp.js') }}"></script>
    <script src="{{ asset('index/js/app.js') }}"></script>
</body>

</html>
