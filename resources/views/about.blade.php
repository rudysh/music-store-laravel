@extends('layouts.app')

@section('title', 'Harmonics Music Nosotros')

@section('content')
    <main class="container-xl mt-5 ">
        <h2 class="text-center color-yellow">Bienvenido a Harmonics Music</h2>
        <div class="row mt-3 align-items-center">
            <div class="col-md-6">
                <img class="img-fluid" src="{{asset('images/about.jpg') }}" alt="Harmonics music">
            </div>
            <div class="col-md-6 mt-5 mt-md-0">
                <p>
                    En Harmonics Music Store, estamos comprometidos con tu pasión por la música.
                    Nuestra tienda es un paraíso para los entusiastas de todos los géneros musicales,
                    desde aquellos que buscan instrumentos de alta calidad hasta los amantes de la
                    música en busca de los últimos lanzamientos y vinilos clásicos.
                </p>
                <h5 class="color-yellow">Nuestra historia</h5>
                <p>
                    Fundada en 2005 por un grupo de músicos apasionados, Harmonics Music Store
                    ha sido un punto de referencia en la comunidad musical desde su inicio.
                    Nuestra misión es inspirar y nutrir el amor por la música, brindando a
                    nuestros clientes una experiencia de compra excepcional y un ambiente
                    acogedor en el que puedan encontrar todo lo que necesitan para su
                    expresión artística.
                </p>
                <h5 class="color-yellow">Nuestro compromiso con la calidad</h5>
                <p>
                    En Harmonics Music Store, creemos que la calidad es la clave para una experiencia musical inigualable. Por eso, seleccionamos cuidadosamente cada artículo que ofrecemos, desde instrumentos musicales hasta equipos de grabación y accesorios. Trabajamos en estrecha colaboración con marcas líderes en la industria y artesanos expertos para asegurarnos de que nuestros clientes reciban productos de la más alta calidad.
                </p>
            </div>
        </div>
    </main>
@endsection
