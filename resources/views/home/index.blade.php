@extends('layouts.main')
@section('title', 'Home page')

@section('content')
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Shop in style</h1>
                <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p>
            </div>
        </div>
    </header>

    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-1 row-cols-md-3 row-cols-xl-4 justify-content-center">
                @foreach($products as $product)
                    @php $id = '#productImagesCarousel'. $product->id; @endphp
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product images-->
                            <div id="productImagesCarousel{{ $product->id }}" class="carousel slide" data-bs-interval="false" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    @for($i = 0; $i < count($product->images); $i++)
                                        <button type="button" data-bs-target="{{ $id }}" data-bs-slide-to="{{ $i }}" @if($i == 0) class="active" @endif aria-current="true" aria-label="Slide {{ $i }}"></button>
                                    @endfor
                                </div>
                                <div class="carousel-inner">
                                    @foreach($product->images as $image)
                                        <div class="carousel-item @if($loop->first) active @endif" data-bs-interval="5000">
                                            <img src="{{ $image->url }}" class="d-block w-100" alt="...">
                                        </div>
                                    @endforeach
                                </div>
                                <div class="position-absolute top-0 end-0">
                                    @if($product->sale)
                                        <!-- Sale badge-->
                                        <span class="badge bg-danger text-white m-1">
                                            Promoção
                                        </span>
                                    @endif
                                    @if($product->new_product)
                                        <!-- New badge-->
                                        <span class="badge bg-success text-white m-1">
                                            Novo
                                        </span>
                                    @endif
                                    @if($product->featured)
                                        <!-- Featured badge-->
                                        <span class="badge bg-primary text-white m-1">
                                            Destaque
                                        </span>
                                    @endif
                                    @if($product->best_seller)
                                        <!-- Best seller badge-->
                                        <span class="badge bg-warning text-white m-1">
                                            Mais vendido
                                        </span>
                                    @endif
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="{{ $id }}" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="{{ $id }}" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>

                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">{{ $product->name }}</h5>
                                    <!-- Product brand-->
                                    <h6 class="fw-light">{{ $product->brand->name }}</h6>

                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    De
                                    <span class="text-muted text-decoration-line-through">
                                        {{ convertDbCurrencyToView($product->old_price) }}
                                    </span>
                                    <br>
                                    por {{ convertDbCurrencyToView($product->price) }}
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <a class="btn btn-outline-dark mt-auto" href="#">Adicionar ao carrinho</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                {{ $products->links('layouts.pagination') }}
            </div>
        </div>
    </section>
@endsection
