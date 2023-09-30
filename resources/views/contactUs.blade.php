@extends('layouts.app')

@section('title', 'Harmonics Music Contact Us')

@section('content')
    <main class="container-xl mt-5 ">
        <h2 class="text-center color-yellow ">Contactenos</h2>
        <div class="alert alert-danger" role="alert" id="error-message" style="display: none;"></div>

        @if (session('successMessage'))
            <div class="alert alert-success" style="text-align: center;">
                {!! session('successMessage') !!}
            </div>
        @endif

        <div class="row justify-content-center mt-4">
            <div class="col-md-6">
                <form method="POST" action="{{ route('contactUs.request') }}" id="contactForm">
                    @csrf
                    <div class="row mb-3">
                        <label for="inputNombre" class="col-sm-2 col-form-label">Nombre</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputNombre" name="name" placeholder="Nombre">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputAsunto" class="col-sm-2 col-form-label">Asunto</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="subject" id="inputAsunto"
                                   placeholder="Asunto">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPais" class="col-sm-2 col-form-label">Pais</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="country" id="inputPais" placeholder="Pais">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputMensaje" class="col-sm-2 col-form-label">Detalle</label>
                        <div class="col-sm-10">
                            <textarea id="inputMensaje" name="message" class="form-control" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-10 offset-sm-2">
                            <button type="submit" class="btn bg-color-yellow">Enviar informacion</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>

@endsection

@push('scripts')
    <script src="{{ asset('js/contact.js') }}"></script>

    @if (session('contactInfo'))
        <script>
            var contactInfo = {!! json_encode(session('contactInfo')) !!};
            console.log(contactInfo);
            var dataInfo = document.createElement("div");
            dataInfo.classList.add('infoTable');
            dataInfo.innerHTML = '<table><tr><td><strong>Nombre:</strong></td><td> ' + contactInfo.name + '</td></tr>' +
                '<tr><td><strong>Asunto:</strong></td><td> ' + contactInfo.subject + '</td></tr>' +
                '<tr><td><strong>Email:</strong></td><td> ' + contactInfo.email + '</td></tr>' +
                '<tr><td><strong>Pais:</strong></td><td> ' + contactInfo.country + '</td></tr>' +
                '<tr><td><strong>Detalle:</strong></td><td> ' + contactInfo.message + '</td></tr></table>';
            swal({
                title: "Datos Enviados!",
                text: "Info",
                content: dataInfo,
                icon: "success",
            });
        </script>
    @endif
@endpush

