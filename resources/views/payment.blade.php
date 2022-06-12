<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PWRFIT | Desafio aceptado</title>
    <link rel="stylesheet" type="text/css" id="color-opt" href="">
    @include('auth.styles')
    <script>
        var assets = "{{ URL::asset('index') }}";
    </script>
</head>

<body class="bg-home4">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="card ">
                    <div class="card-header">
                        <div class="pt-4 pl-2 pr-2 pb-2 method">
                            <ul role="tablist" class="nav bg-light nav-pills rounded nav-fill mb-3">
                                <li class="nav-item"> <a data-toggle="pill" href="#tarjeta"
                                        class="nav-link active"><img src="{{ asset('brands/creditcard.svg') }}"
                                            alt="creditcard" style="width: 20px"> Tarjeta de crédito/débito </a>
                                </li>
                                <li class="nav-item"> <a data-toggle="pill" href="#nequi" class="nav-link ">
                                        <img src="{{ asset('brands/nequi.svg') }}" alt="Nequi" style="width: 20px">
                                        Nequi </a> </li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div id="tarjeta" class="tab-pane fade show active pt-3">
                                <form method="POST" action="{{ route('payment') }}">
                                    @csrf
                                    <div class="form-group"> <label for="titular">
                                            <h6>Titular de la tarjeta</h6>
                                        </label> <input name="titular" id="titular" type="text" class="form-control"
                                            required>
                                    </div>
                                    <div class="form-group"> <label for="tarjeta">
                                            <h6>Número en la tarjeta</h6>
                                        </label>
                                        <div class="input-group"> <input type="text" maxlength="19" name="tarjeta" id="tarjeta"
                                                class="form-control rounded" required>
                                            <div class="input-group-append"> <span class="input-group-text text-muted">
                                                    <i class="fab fa-cc-visa"></i> <i
                                                        class="fab fa-cc-mastercard mx-1"></i> <i
                                                        class="fab fa-cc-amex"></i> </span> </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <div class="form-group"> <label><span class="hidden-xs">
                                                        <h6>Fecha de expiración</h6>
                                                    </span></label>
                                                <div class="input-group"> <input type="number" placeholder="MM"
                                                        name="" max="12" min="01" value="01" class="form-control"
                                                        required> <input type="number" placeholder="AA" name="" min="22"
                                                        value="22" max="99" class="form-control" required> </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group mb-4"> <label data-toggle="tooltip"
                                                    title="Tres dígitos que aparecen al reverso de tu tarjeta">
                                                    <h6>CVV <i class="fa fa-question-circle d-inline"></i></h6>
                                                </label> <input type="text" required class="form-control"> </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column dis">
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                            <p class="fw-bold">Total</p>
                                            <p class="fw-bold"><span
                                                    class="fas fa-dollar-sign"></span>{{ $precio->precio }}</p>
                                        </div>
                                    </div>
                                    <div> <button type="submit" class="pagar btn btn-primary btn-block shadow-sm">
                                            Completar pago
                                        </button>
                                </form>
                            </div>
                            <br><p class="text-muted"> Nota: Recuerda que la emisora de tu tarjeta puede cobrarte cuota de manejo por cada transaccion (varía según la emisora)</p>
                        </div>
                        <div id="nequi" class="tab-pane fade pt-3">
                            <h6 class="pb-2">Escanea el siguiente qr en tu aplicación</h6>
                            <img src="{{ asset('brands/qr-nequi.png') }}" alt="qr" style="width: 200px"
                                draggable="false">
                            <div class="d-flex flex-column dis">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <p class="fw-bold">Total</p>
                                    <p class="fw-bold"><span
                                            class="fas fa-dollar-sign"></span>{{ $precio->precio }}</p>
                                </div>
                            </div>
                            <form action="{{ route('payment') }}" method="post">
                                @csrf
                                <p> <button type="submit" class="pago btn btn-primary ">Completar pago</button> </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('bootstrap/dist/js/bootstrap4.bundle.min.js') }}"></script>
        <script src="{{ asset('js/payment.js') }}"></script>

        <script src="{{ asset('index/js/app.js') }}"></script>
</body>

</html>
