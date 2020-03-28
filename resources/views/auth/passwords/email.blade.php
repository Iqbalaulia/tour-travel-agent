<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('../frontend/libraries/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('../frontend/libraries/xzoom/xzoom.css') }}">
    <link rel="stylesheet" href="{{ asset('../frontend/libraries/gijgo/css/gijgo.min.css') }}">
    <link
        href="https://fonts.googleapis.com/css?family=Assistant:200,300,400,600,700,800|Playfair+Display:400,400i,700,700i,900,900i&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('../frontend/styles/main.css') }}">
</head>

<body>
    <main class="forgot-password-container">
        <div class="container">
            <div class="row page-forgot-password d-flex align-items-center">
                <div class="section-left col-12 col-md-6">
                    <h1 class="mb-4">
                        Wow,
                        <br>
                        I forgot my password !
                    </h1>

                    <img src="{{ asset('../frontend/images/forgot-password.png') }}" class="w-75 d-none d-sm-flex"
                        alt="">
                </div>
                <div class="section-right col-12 col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="{{ asset('../frontend/images/logo_nomads.png') }}" class="w-50 mb-4" alt="">
                            </div>

                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-login btn-block">Send Password Reset Link</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <script src="{{ asset('../frontend/libraries/jquery/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('../frontend/libraries/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('../frontend/libraries/retina/retina.min.js') }}"></script>


</body>

</html>
