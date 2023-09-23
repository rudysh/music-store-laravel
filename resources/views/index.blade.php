@extends('layouts.app')

@section('title', 'Harmonics Music')

@section('promotion-product')
    <div class="row mt-3">
        <div class="col-md-6 text-center text-md-start">
            <h1 class="display-5 fw-bold color-yellow"> Gretsch G5622T</h1>
            <p class="mt-3 fs-5 text-white">
                El G5622T Electromatic® Center Block Double-Cut con Bigsby® presenta un cuerpo de arce de doble corte con un bloque central de abeto ahuecado para una resonancia dinámica, potencia de alta ganancia y comodidad ligera.
            </p>
            <p class="text-primary fs-1  text-decoration-none text-white ">
                <spam class="color-yellow"> $1500 IVA </spam>
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
        </div>
    </main>

    <section class="lecciones mt-3">
        <div class="container-xl">
            <div class="row justify-content-md-end">
                <div class="col-md-6 text-center mt-5 mb-5">
                    <h2 class="text-center color-yellow">Academia Harmonics Music</h2>
                    <p class="mt-3 fs-5 text-white">
                        Descubre el arte de la música en nuestra academia especializada. Atrévete a explorar nuevos ritmos y melodías mientras desarrollas tus habilidades musicales con nuestros talentosos profesores. Desde principiantes hasta músicos experimentados, todos son bienvenidos a embarcarse en un viaje musical único.
                    </p>
                    <a href="{{ route('contactUs') }}" class="btn fs-4 bg-color-yellow py-2 px-3">Comunicate con Nostros</a>
                </div>
            </div>
        </div>
    </section>

    <section class="container-xl mt-5">
        <h2 class="text-center color-yellow">Nuestros Cursos</h2>
        <div class="row mt-4">
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <img class="card-img-top" src="{{asset('images/courses/te.jpeg') }}" alt="clase de guitarra">
                    <div class="card-body">
                        <h3 class="text-center color-yellow">Curso de Guitarra</h3>
                        <p>
                            En nuestro curso de guitarra, aprenderás una amplia variedad de habilidades y conocimientos que te permitirán convertirte en un guitarrista talentoso y versáti
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <img class="card-img-top" src="{{asset('images/courses/solfeo.jpg') }}" alt="clase de guitarra">
                    <div class="card-body">
                        <h3 class="text-center color-yellow">Curso de Solfeo</h3>
                        <p>
                            En nuestro curso de solfeo, aprenderás fundamentos musicales esenciales que te permitirán leer, escribir y comprender la notación musical.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <img class="card-img-top" src="{{asset('images/courses/canto.jpg') }}" style="height: 70%;" alt="clase de guitarra">
                    <div class="card-body">
                        <h3 class="text-center color-yellow">Curso de Canto</h3>
                        <p>
                            En nuestro curso de canto, aprenderás una amplia variedad de técnicas y habilidades que te ayudarán a desarrollar y mejorar tu voz. convertirte en un cantante seguro
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <img class="card-img-top" src="{{asset('images/courses/bateria.jpg') }}" alt="clase de guitarra">
                    <div class="card-body">
                        <h3 class="text-center color-yellow">Curso de Bateria</h3>
                        <p>
                            En nuestro curso de batería, aprenderás una amplia gama de técnicas y habilidades que te permitirán convertirte en un baterista talentoso y versátil.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection

@push('scripts')
    <script src="{{ asset('js/promotions.js') }}"></script>
@endpush
