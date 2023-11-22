@extends("layout.master")

@section('title')
Edit Data Produk
@endsection

@section('content')
<form class="row g-3 needs-validation" novalidate action="/tambahdata/{{ $tambahdata->id }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="col-8 mb-3">
    <label for="validationCustom01" class="form-label">Cover</label>
    <br>
    <img src="{{ asset('img/cover/'.$tambahdata->cover) }}" alt="" width="100px" height="100px" class="mb-4">
    <input type="file" class="form-control" id="formfile" name="cover" required>
  </div>
  <div class="col-8 mb-3">
    <label for="validationCustom02" class="form-label">Nama Produk</label>
    <input type="text" class="form-control" id="validationCustom02" name="nama_produk" value="{{ $tambahdata->nama_produk }}" required>
  </div>
  <div class="col-8 mb-3">
    <label for="validationCustom03" class="form-label">Penjual</label>
    <input type="text" class="form-control" id="validationCustom03" name="penjual" value="{{ $tambahdata->penjual }}" required>
  </div>
  <div class="col-8 mb-3">
    <label for="validationTextarea" class="form-label">Deskripsi</label>
    <textarea class="form-control" id="validationCustom03" name="deskripsi" required>{{ $tambahdata->deskripsi }}</textarea>
  </div>
  <div class="col-8 mb-3">
    <label for="validationTextarea" class="form-label">Harga</label>
    <input type='number' class="form-control" id="validationCustom03" name="harga" value="{{ $tambahdata->harga }}" required></input>
  </div>
  
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Update</button>
  </div>
</form>
@endsection