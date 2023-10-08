@extends('layouts.app')

@section('title', 'Harmonics Music Store')

@section('content')
    <main class="container mt-5 ">

            <div class="row d-flex justify-content-center mb-5">
                <div class="col-md-10">
                    <div class="card p-3  py-4">
                        <h5 class="text-center">Una forma más sencilla de descubrir tu producto</h5>
                        <div class="row g-3 mt-2">
                            <div class="col-md-3">
                                <div class="dropdown">
                                    <button class="btn bg-color-yellow dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                                        @if(isset($categorySelected))
                                            {{$categorySelected->name}}
                                        @else
                                            Cualquier Categoria
                                        @endif
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        @foreach($categories as $category)
                                            <li><a class="dropdown-item" href="{{ route('store', ['category_id' => $category->id]) }}">{{$category->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                    <input type="text" id="nameToFind" class="form-control" placeholder="Buscar un producto..." value="{{ $querySearch ?? '' }}">
                            </div>
                            <div class="col-md-3">
                                <button id="searchProductByName" class="btn bg-color-yellow btn-block" >Buscar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <h2 class="text-center color-yellow">Productos</h2>
        <div class="row mt-3" id="zonaProductos">
            @foreach($products as $product)
                <div class="col-md-6 col-lg-4 my-4  row align-items-center promotionProduct p-3">
                    <div class="col-4"><img class='img-fluid' src='{{asset($product->img) }}' alt='{{$product->name}}'></div>
                    <div class="col-8">
                        <h3 class="text-black fs-4 text-uppercase">{{$product->name}}</h3>
                        <p>{{$product->description}}</p>
                        <a class="fs-3 color-yellow fw-bold text-decoration-none">{{'$ ' . $product->price}}</a>
                        <a data-product-id="{{$product->id}}"
                           class="btn mt-4 d-block bg-color-yellow text-center p-1 text-uppercase addcart">Agregar
                            al carrito</a>
                    </div>
                </div>
            @endforeach
            <div class="justify-content-center">
                {{ $products->links() }}
            </div>
        </div>
    </main>
@endsection


@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/store.js') }}"></script>
    <script>
        $("#searchProductByName").on('click', function (event) {
            var qname = $("#nameToFind").val().trim();
            if (qname !== "") {
                window.location.href = "{{ route('store') }}?name=" + qname;
            }
        });
    </script>
@endpush
