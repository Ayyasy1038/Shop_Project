@extends("layout.master")

@section('title')
Tambah Produk
@endsection

@section('content')
<form class="row g-3 needs-validation" novalidate action="/tambahdata" method="POST" enctype="multipart/form-data">
    @csrf
  <div class="col-8 mb-3">
    <label for="validationCustom01" class="form-label">Cover</label>
    <input type="file" class="form-control" id="formfile" name="cover" required>
  </div>
  <div class="col-8 mb-3">
    <label for="validationCustom02" class="form-label">Nama Produk</label>
    <input type="text" class="form-control" id="validationCustom02" name="nama_produk" required>
  </div>
  <div class="col-8 mb-3">
    <label for="validationCustom03" class="form-label">Penjual</label>
    <input type="text" class="form-control" id="validationCustom03" name="penjual" required>
  </div>
  <div class="col-8 mb-3">
    <label for="validationTextarea" class="form-label">Deskripsi</label>
    <textarea class="form-control" id="validationCustom03" name="deskripsi" required></textarea>
  </div>
  <div class="col-8 mb-3">
    <label for="validationTextarea" class="form-label">Harga</label>
    <input type='number' class="form-control" id="validationCustom03" name="harga" required></input>
  </div>
  
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Simpan</button>
  </div>
@endsection