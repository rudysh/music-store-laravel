@extends('layouts.app')

@section('title', 'Harmonics Music')

@section('promotion-product')
    <div class="row mt-3">
        <div class="col-md-6 text-center text-md-start">
            <h1 class="display-5 fw-bold color-yellow"> Gretsch G5622T</h1>
            <p class="mt-3 fs-5 text-white">
                El G5622T Electromatic® Center Block Double-Cut con Bigsby® presenta un cuerpo de arce de doble corte
                con un bloque central de abeto ahuecado para una resonancia dinámica, potencia de alta ganancia y
                comodidad ligera.
            </p>
            <p class="text-primary fs-1  text-decoration-none text-white ">
                <spam class="color-yellow"> $1500 IVA</spam>
            </p>
            <div class="">
                <a href="#" class="btn fs-4 bg-color-yellow py-2 px-3">Aprovechar Oferta</a>
            </div>
        </div>
    </div>
@endsection

@section('promotion-img')
    <img src="{{asset('images/guitarra-header-1.png') }}" class="header-guitarra" alt="">
@endsection


@section('content')
    <main class="container-xl mt-5">
        <h2 class="text-center color-yellow">Promociones</h2>
        <div class="row mt-3" id="zonaPromotions">
            @foreach($promotionsProducts as $product)
                <div class="col-md-6 col-lg-4 my-4 row align-items-center promotionProduct p-3">
                    <div class='col-4'><img class='img-fluid' src='{{asset($product->img) }}' alt='{{$product->name}}'>
                    </div>
                    <div class="col-8">
                        <h3 class="text-black fs-4 text-uppercase">{{$product->name}}</h3>
                        <p>{{$product->description}}</p>
                        <a class="fs-3 color-yellow fw-bold text-decoration-none">{{'$ ' . $product->price}}</a>
                        <a data-product-id="{{$product->id}}"
                           class="btn mt-4 d-block bg-color-yellow text-center p-1 text-uppercase seeProductInfo">Ver
                            Producto</a>
                    </div>
                </div>
            @endforeach
        </div>
    </main>

    <section class="lecciones mt-3">
        <div class="container-xl">
            <div class="row justify-content-md-end">
                <div class="col-md-6 text-center mt-5 mb-5">
                    <h2 class="text-center color-yellow">Academia Harmonics Music</h2>
                    <p class="mt-3 fs-5 text-white">
                        Descubre el arte de la música en nuestra academia especializada. Atrévete a explorar nuevos
                        ritmos y melodías mientras desarrollas tus habilidades musicales con nuestros talentosos
                        profesores. Desde principiantes hasta músicos experimentados, todos son bienvenidos a embarcarse
                        en un viaje musical único.
                    </p>
                    <a href="{{ route('contactUs') }}" class="btn fs-4 bg-color-yellow py-2 px-3">Comunicate con
                        Nostros</a>
                </div>
            </div>
        </div>
    </section>

    <section class="container-xl mt-5">
        <h2 class="text-center color-yellow">Nuestros Cursos</h2>
        <div class="row mt-4">
            @foreach($courses as $course)
                <div class="col-md-6 col-lg-3">
                <div class="card">
                    <img class="card-img-top" src="{{asset($course->img) }}" alt="clase de guitarra">
                    <div class="card-body">
                        <h3 class="text-center color-yellow">{{$course->name}}</h3>
                        <p>
                            {{$course->description}}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </section>
@endsection

@push('scripts')
    <script src="{{ asset('js/promotions.js') }}"></script>
@endpush
