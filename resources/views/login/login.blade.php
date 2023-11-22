<!DOCTYPE html>
<html lang="en">

</html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio de Sesión</title>
    <meta name="csrf-token" content="6DFkLg62Bf65BWsbcIq1hSexBi6Ki5o5C4uy00HN">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/css/adminlte.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('../css/styleLogin.css') }}">

</head>

<style>

</style>

<body class="hold-transition login-page">

    <div class="wrapper">
        <form class="login" method="post" action="{{ url('login') }}">
            @csrf
            <div>

                <h1 class="title" style="font-family: 'Playfair Display', serif; font-size: 48px; color: #CC412F;">
                    Darcy's</h1>

                <input id="usuario" type="text" class="form-control @error('usuario') is-invalid @enderror"
                    name="usuario" required autocomplete="usuario" autofocus placeholder="Usuario" />
                <i class="fa fa-user" style="margin-top: -38px;"></i>
                @error('usuario')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="current-password" placeholder="Contraseña">
                <i class="fa fa-key" style="margin-top: -38px;"></i>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <div class="text-center" style="margin-top: 15px;">
                    <button type="submit" class="btn btn-secondary btn10">
                        <span class="state">Ingresar</span>
                        <div class="transition"></div>
                    </button>
                </div>
            </div>
        </form>
    </div>
</body>

{{-- <script src="{{ asset('../js/script.js') }}"></script> --}}


</html>
