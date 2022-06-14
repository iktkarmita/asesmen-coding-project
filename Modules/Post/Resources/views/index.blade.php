@extends('post::layouts.master')

@section('content')
    <h1 style="margin-left: 20px">Add Product</h1>

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert" style="margin-left: 20px">
            {{ session()->get('success') }}
        </div>
    @endif

    <form style="margin-left: 20px" action="{{ url('/post/store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label 
          @error('nama') is-invalid @enderror" name="nama" required
                autocomplete="nama">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama" placeholder="minimal 11Character..">

            @error('nama')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="keterangan" class="form-label
          @error('keterangan') is-invalid @enderror" name="keterangan"
                required autocomplete="keterangan">Keterangan</label>
            <input type="text" name="keterangan" class="form-control" id="keterangan">

            @error('keterangan')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label
            @error('harga') is-invalid @enderror" name="harga" required
                autocomplete="harga">Harga</label>
            <input type="text" name="harga" class="form-control" id="harga">

            @error('harga')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="persediaan" class="form-label
            @error('persediaan') is-invalid @enderror"
                name="persediaan" required autocomplete="persediaan">Persediaan</label>
            <input type="text" name="persediaan" class="form-control" id="persediaan">

            @error('persediaan')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="image" name="image">Upload</span>


            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="image" name="image" aria-describedby="image
                                              @error('image') is-invalid @enderror" name="image" required
                    autocomplete="image">


                <label class="custom-file-label" name="image" for="image">Choose file</label>

            </div>

        </div>
        @error('image')
            <span class="text-danger" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <button type="submit" name="submit" class="btn btn-primary" value="Save">Add Product</button>
    </form>
    </div>
@endsection
