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
                                <li class="nav-item"> <a data-toggle="pill" href="#credit-card"
                                        class="nav-link active"><img src="{{ asset('brands/creditcard.svg')}}" alt="creditcard" style="width: 20px"> Credit Card </a>
                                </li>
                                <li class="nav-item"> <a data-toggle="pill" href="#paypal" class="nav-link ">
                                        <img src="{{ asset('brands/nequi.svg')}}" alt="Nequi" style="width: 20px"> Nequi </a> </li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div id="credit-card" class="tab-pane fade show active pt-3">
                                <form method="POST" action="{{ route('payment') }}">
                                    @csrf
                                    <div class="form-group"> <label for="username">
                                            <h6>Titular de la tarjeta</h6>
                                        </label> <input name="email" id="email" type="email" class="form-control" required>
                                    </div>
                                    <div class="form-group"> <label for="cardNumber">
                                            <h6>Número en la tarjeta</h6>
                                        </label>
                                        <div class="input-group"> <input type="text" maxlength="19" name="cardNumber"
                                                placeholder="Valid card number" class="form-control rounded" required>
                                            <div class="input-group-append"> <span class="input-group-text text-muted">
                                                    <i class="fab fa-cc-visa mx-1"></i> <i
                                                        class="fab fa-cc-mastercard mx-1"></i> <i
                                                        class="fab fa-cc-amex mx-1"></i> </span> </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <div class="form-group"> <label><span class="hidden-xs">
                                                        <h6>Fecha de expiración</h6>
                                                    </span></label>
                                                <div class="input-group"> <input type="number" placeholder="MM"
                                                        name="" class="form-control" required> <input type="number"
                                                        placeholder="YY" name="" class="form-control" required> </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group mb-4"> <label data-toggle="tooltip"
                                                    title="Three digit CV code on the back of your card">
                                                    <h6>CVV <i class="fa fa-question-circle d-inline"></i></h6>
                                                </label> <input type="text" required class="form-control"> </div>
                                        </div>
                                    </div>
                                    <div> <button type="submit"
                                            class="pagar btn btn-primary btn-block shadow-sm"> Completar pago
                                        </button>
                                </form>
                            </div>
                        </div>
                        <div id="paypal" class="tab-pane fade pt-3">
                            <h6 class="pb-2">Select your paypal account type</h6>
                            <div class="form-group "> <label class="radio-inline"> <input type="radio"
                                        name="optradio" checked> Domestic </label> <label class="radio-inline"> <input
                                        type="radio" name="optradio" class="ml-5">International </label></div>
                            <p> <button type="button" class="btn btn-primary "><i class="fab fa-paypal mr-2"></i> Log
                                    into my Paypal</button> </p>
                            <p class="text-muted"> Note: After clicking on the button, you will be directed to a
                                secure gateway for payment. After completing the payment process, you will be redirected
                                back to the website to view details of your order. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('bootstrap/dist/js/bootstrap4.bundle.min.js') }}"></script>
        <script src="{{ asset('js/payment.js') }}"></script>
        <script>
            $(function() {
                $('[data-toggle="tooltip"]').tooltip()
            })
        </script>
        <script src="{{ asset('index/js/app.js') }}"></script>
</body>

</html>
