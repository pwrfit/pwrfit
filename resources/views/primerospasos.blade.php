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
        <div class="form-outer">
            <form action="#">
                <div class="page slide-page">
                    <div class="field">
                        <div class="label">Edad</div>
                        <input type="text">
                    </div>
                    <div class="field">
                        <button class="firstNext next">Siguiente</button>
                    </div>
                </div>

                <div class="page">
                    <div class="field">
                        <div class="label">Peso en kilogramos</div>
                        <input type="text">
                    </div>
                    <div class="field">
                        <div class="label">Altura en metros</div>
                        <input type="text">
                    </div>
                    <div class="field btns">
                        <button class="prev-1 prev">Anterior</button>
                        <button class="next-1 next">Siguiente</button>
                    </div>
                </div>

                <div class="page">
                    <div class="field">
                        <div class="label">Género</div>
                        <select>
                            <option>Masculino</option>
                            <option>Femenino</option>
                            <option>Otro</option>
                        </select>
                    </div>
                    <div class="field btns">
                        <button class="prev-2 prev">Anterior</button>
                        <button class="next-2 next">Siguiente</button>
                    </div>
                </div>

                <div class="page">
                    <p>Edad: </p><br>
                    <p>Altura: </p><br>
                    <p>Peso: </p><br>
                    <p>Género: </p><br>
                    <p>IMC: </p>
                    <div class="field btns">
                        <button class="prev-3 prev">Anterior</button>
                        <button class="submit">Aceptar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="{{ asset('js/pp.js') }}"></script>
    <script src="{{ asset('index/js/app.js') }}"></script>
</body>

</html>
