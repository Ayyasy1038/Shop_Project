@extends("layout.master")

@section('title')
Data Barang
@endsection

@section('content')
        <table class="table table-striped">
        <a href="/tambahdata/create" class="btn btn-primary">+ Tambah Produk</a>
        <br>
        <br>
            <tr>
                <th>Cover</th>
                <th>Nama Produk</th>
                <th>Deskripsi</th>
                <th>Penjual</th>
                <th>Harga</th>
                <th>Aksi</th>
                
            </tr>
            @foreach($tambahdata as $b)
            <tr>
                <td><img src="{{ asset('img/cover/'.$b->cover) }}" alt="" width="100px" height="100px" ></td>
                <td>{{ $b->nama_produk }}</td>
                <td>{{ $b->deskripsi }}</td>
                <td>{{ $b->penjual }}</td>
                <td>{{ $b->harga }}</td>
                <td>
                    <form action="/tambahdata/{{ $b->id }}" method="POST">
                    <!-- Edit -->
                    <a href="/tambahdata/{{ $b->id }}/edit" class="btn btn-warning">Edit</a>
                    <!-- Delete -->
                    @csrf
                    @method('delete')
                    <input type="submit" value="Delete" class="btn btn-danger"></input>
                    </form>
                </td>
                
            </tr>
            @endforeach
        </table>
@endsection