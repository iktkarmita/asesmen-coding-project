@extends('layouts.app')
@section('styles')
@endsection
@section('content')
    <!--====== PRODUCT PART START ======-->

    <section id="product" class="product-area pt-100 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="collection-menu text-center mt-30">
                        <h4 class="collection-tilte">CART PRODUK</h4>

                    </div> <!-- collection menu -->
                </div>
                <div class="card mb-3 mt-2">
                    <div class="row g-0">
                        <div class="col-md-12 text-center">
                            <a href="{{ $Produk['produk_id'] }}">
                                <img src="{{ asset('storage/' . $Produk['image']) }}" alt="Product" height="320px">
                            </a>
                        </div>
                        <div class="col-md-12"
                            style="background: linear-gradient(30deg, rgba(255, 255, 255, 0.1), rgba(88, 130, 243, 0.507));">
                            <div class="card-body">
                                <h5 class="card-title text-dark fs-1">{{ $Produk['name'] }}</h5>
                                <p class="card-text">{{ $Produk['description'] }}</p>
                                <p class="card-text text-danger">Rp.{{ $Produk['price'] }}</p>
                                <p class="card-text text-Success">Qty : {{ $Produk['persediaan'] }} Pcs</p>
                                <p class="card-text"><small
                                        class="text-muted">{{ $Produk['updated_at'] }}</small></p>
                            </div>
                            <button type="button" class="btn btn-danger buttonnn mb-3">Add to Cart</button>
                            <button type="button" class="btn btn-dark buttonnn  mb-3">Go to Cart</button>
                        </div>
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PRODUCT PART ENDS ======-->

    <!--====== BACK TO TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

    <!--====== BACK TO TOP PART ENDS ======-->
@endsection

@section('scripts')
@endsection
