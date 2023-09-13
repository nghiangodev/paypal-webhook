<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>
    <link href="{{asset('/css/lib/bootstrap.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('/css/style.css')}}" rel="stylesheet"/>
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/es6.min.js')}}"></script>
    <!-- Styles -->
</head>
<body class="antialiased">
<div
    class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
    <div class="card w-50">
        <h5 class="card-header">Payment</h5>
        <div class="card-body">
            <form id="form_payment">
                <div class="row mb-3">
                    <label for="txt_name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text"  name="name" class="form-control" id="txt_name">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="txt_phone" class="col-sm-2 col-form-label">Phone</label>
                    <div class="col-sm-10">
                        <input type="tel" name="phone" class="form-control" id="txt_phone">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="txt_email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="txt_email">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Select our product</label>
                    <div class="col-sm-10">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Open this select product</option>
                            @for ($i = 1; $i < 11; $i++)
                                <option value="SKU00{{$i}}">SKU00{{$i}}</option>
                            @endfor
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="txt_price" class="col-sm-2 col-form-label">Price</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="txt_price">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="txt_qty" class="col-sm-2 col-form-label">Quantity</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="txt_qty">
                    </div>
                </div>
                <fieldset class="row mb-3">
                    <legend class="col-form-label col-sm-2 pt-0">Method</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="momo" checked>
                            <label class="form-check-label" for="gridRadios1">
                                Momo
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="alepay">
                            <label class="form-check-label" for="gridRadios2">
                                Alepay
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="stripe">
                            <label class="form-check-label" for="gridRadios2">
                                Stripe
                            </label>
                        </div>
                    </div>
                </fieldset>
                <div class="text-end">
                    <button type="submit" class="btn btn-primary w-16"><span class="text-info">Pay</span></button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="{{asset('/js/main.js')}}"></script>

</body>
</html>
