@extends('post::layouts.master')

@section('content')
    <h1 style="margin-left: 20px">Add Product</h1>

    <form style="margin-left: 20px" action="{{ url('/post/store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" name="nama" class="form-control" id="nama">
        </div>
        <div class="mb-3">
          <label for="keterangan" class="form-label">Keterangan</label>
          <input type="text" name="keterangan" class="form-control" id="keterangan">
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="text" name="harga" class="form-control" id="harga">
          </div>
          <div class="mb-3">
            <label for="persediaan" class="form-label">Persediaan</label>
            <input type="text" name="persediaan" class="form-control" id="persediaan">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="image" name="image">Upload</span>
              </div>
            <div class="custom-file">
              <input type="file"  class="custom-file-input" id="image" name="image" aria-describedby="image">
             
              <label class="custom-file-label" name="image" for="image">Choose file</label>
            </div>
          </div>
        <button type="submit" name="submit" class="btn btn-primary" value="Save">Add Product</button>
      </form>
</div>
@endsection
