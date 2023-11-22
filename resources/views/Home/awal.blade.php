@extends("layout.master")


@section('title')
Situs Jual Beli Barang
@endsection


@section('content')
<div class="card" style="width: 18rem;">
  <td><img src="{{ asset('img/cover/'.$tambahdata->cover) }}" class="card-img-top" alt=""></td>
  <div class="card-body">
    <td><h5 class="card-title">{{ $tambahdata->nama_produk}}</h5></td>
    <td><p class="card-text">{{ $tambahdata->deskripsi }}</p></td>
    <p><td>{{ $tambahdata->harga }}</p></td>
    <a href="/home/detail" class="btn btn-primary">Check</a>
  </div>
</div>
 </tr>
@endsection