@extends('layouts.app')

@section('title', 'Harmonics Music Blog')

@section('content')
    <main class="container-xl mt-5 ">
        <h2 class="text-center color-yellow">Nuestro Blog</h2>
        <div class="row mt-4">
            @foreach($blogs as $blog)
                <div class="col-md-6 col-lg-4">
                <div class="card">
                    <img class="card-img-top" src="{{asset($blog->img) }}" alt="clase de guitarra">
                    <div class="card-body">
                        <h3 class="text-center color-yellow">{{$blog->name}}</h3>
                        <p>
                            {{$blog->description}}
                        </p>
                        <a href="{{ route('blog.show', $blog->id) }}" class="btn d-block bg-color-yellow ">Leer mas</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </main>
@endsection
