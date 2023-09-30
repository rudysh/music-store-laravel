@extends('layouts.app')

@section('title', 'Harmonics Music Blog')

@section('content')
    <main class="container-xl mt-5 ">
        <h2 class="text-center color-yellow">
            {{$blogInfo->name}}
        </h2>
        <div class="row justify-content-center">
            <div class="col-md-7">
                <img class="img-fluid" src="{{asset($blogInfo->img) }}" alt="{$blogInfo->name}}">

                <div id="blog-container">
                    @foreach($blogInfo->lessons as $lesson)
                        <div class="mt-5">
                            {!! $lesson->content !!}
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </main>
@endsection
