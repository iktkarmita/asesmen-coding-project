@extends('edit::layouts.master')

@section('content')

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert" style="">
            {{ session()->get('success') }}
        </div>
    @endif

    <section id="product" class="product-area pt-100 pb-130 ">
        <div class="container">
            <div class="row">
                <div class="col-lg-1 col-md-3 ">
                    <div class="collection-menu text-center mt-30">
                        <h4 class="mb-2">PRODUCT</h4>

                    </div> <!-- collection menu -->
                </div>
            </div>
            <div class="row">
                @if (isset($Produk))
                    @foreach ($Produk as $p)
                        <div class="card--color col-md-4 mb-4 ">
                            <div class="card card-colorr h-100 text-center p-3 " key={{ $p->id }}>
                                <img src="{{ asset('storage/' . $p->image) }}" class="card-img-top  card--color"
                                    alt={{ $p->nama }} height="250px">
                                <div class="card-body">
                                    <h5 class="card-title text-dark mb-0">{{ $p->nama }}
                                    </h5>
                                    <p class="card-text text-dark lead fw-bold">Rp.{{ $p->harga }}
                                    </p>
                                    <a href="/edit/{{ $p->id }}" class="btn btn-outline-dark buttonnn mt-2">
                                        Edit
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

@endsection
