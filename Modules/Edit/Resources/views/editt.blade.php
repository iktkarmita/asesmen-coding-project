@extends('edit::layouts.navbar')
@section('content')
    <h1 style="">Edit Product</h1>

    <form style="" action="/edit/post/{{ $Produk['produk_id'] }}" method="POST" enctype="multipart/form-data">
    @method('put')
        @csrf
        <div class="col-sm-9 mb-3">
            <label for="id" class="form-label 
          @error('id') is-invalid @enderror" name="id"
                autocomplete="id">id</label>
            <input type="text" name="id" class="form-control" id="id" value="{{ $Produk['produk_id'] }}" Readonly>

            @error('id')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-sm-9 mb-3">
            <label for="nama" class="form-label
          @error('nama') is-invalid @enderror" name="nama" required
                autocomplete="nama">nama</label>
            <input type="text" name="nama" class="form-control" id="nama" value="{{ $Produk['name'] }}">

            @error('nama')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-sm-9 mb-3">
            <label for="keterangan" class="form-label
          @error('keterangan') is-invalid @enderror" name="keterangan"
                required autocomplete="keterangan">Keterangan</label>
            <input type="text" name="keterangan" class="form-control" id="keterangan"
                value="{{ $Produk['description'] }}">

            @error('keterangan')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-sm-9 mb-3">
            <label for="harga" class="form-label
            @error('harga') is-invalid @enderror" name="harga" required
                autocomplete="harga">Harga</label>
            <input type="text" name="harga" class="form-control" id="harga" value="{{ $Produk['price'] }}">

            @error('harga')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-sm-9 mb-3">
            <label for="persediaan" class="form-label
            @error('persediaan') is-invalid @enderror"
                name="persediaan" required autocomplete="persediaan">Persediaan</label>
            <input type="text" name="persediaan" class="form-control" id="persediaan"
                value="{{ $Produk['persediaan'] }}">

            @error('persediaan')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group row col-sm-9">
            <div class="col-sm-3">Image</div>
            <div class="col-sm-10">
                <div class="row">
                    <div class="col-sm-4 mb-2">
                        <img src="{{ asset('storage/' . $Produk['image']) }}" class="img-thumbnail">
                    </div>
                    <div class="col-sm-8">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="image" name="image">
                            <label class="custom-file-label" for="image" id="image" name="image">Choose file</label>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <button type="submit" class="btn btn-primary" style="margin-left: 10px">Edit
            Product</button>
    </form>
    </div>
@endsection
