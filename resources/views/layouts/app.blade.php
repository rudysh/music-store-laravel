<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="{{ asset('css/styke.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>
<body>
<header class="py-5 header">
    <div class="container-xl">
        <div class="row justify-content-center justify-content-md-between">
            <div class="col-8 col-md-3">
                <a href="index.html">
                    <img src="{{asset('images/logo-3-no-bg.png') }}" alt="Harmonics music logo" class="img-fluid" >
                </a>
            </div>
            <nav class="col-md-6 d-flex flex-column align-items-center mt-3 mt-md-0 flex-md-row justify-content-md-end navegacion">
                <a href="{{ route('index') }}" class="d-block px-2 p-1 text-decoration-none fs-6 fw-bold tezt-uppercase">Inicio</a>
                <a href="{{ route('about') }}" class="d-block px-2 p-1 text-decoration-none fs-6 fw-bold tezt-uppercase">Nosotros</a>
                <a href="{{ route('blog') }}" class="d-block px-2 p-1 text-decoration-none fs-6 fw-bold tezt-uppercase">Blog</a>
                <a href="{{ route('store') }}" class="d-block px-2 p-1 text-decoration-none fs-6 fw-bold tezt-uppercase">Tienda</a>
                <a href="{{ route('contactUs') }}" class="d-block px-2 p-1 text-decoration-none fs-6 fw-bold tezt-uppercase">Contacto</a>
                <a href="{{ route('car') }}" class="d-block px-2 p-1 text-decoration-none fs-6 fw-bold tezt-uppercase">Carrito</a>
            </nav>
        </div>
        @yield('promotion-product')

    </div>
    @yield('promotion-img')
</header>

@yield('content')

<footer class="mt-5 py-5 footerColor">

    <div class="container-xl d-md-flex justify-content-md-between">
        <nav class="d-flex flex-column flex-md-row align-items-center">
            <a href="{{ route('index') }}" class="d-block px-2 p-1 text-decoration-none fs-6 fw-bold text-uppercase text-white">Inicio</a>
            <a href="{{ route('about') }}" class="d-block px-2 p-1 text-decoration-none fs-6 fw-bold text-uppercase text-white">Nosotros</a>
            <a href="{{ route('blog') }}" class="d-block px-2 p-1 text-decoration-none fs-6 fw-bold text-uppercase text-white">Blog</a>
            <a href="{{ route('store') }}" class="d-block px-2 p-1 text-decoration-none fs-6 fw-bold text-uppercase text-white">Tienda</a>
        </nav>
        <a class=" mt-4 mt-md-0 text-white text-uppercase text-decoration-none"> Todos los derechos Reservados</a>
    </div>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@stack('scripts')
</body>
</html>
