@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Produk</div>

                <div class="card-body">
                    <form action="{{ route('produk.update', $produk->id) }}" method="post" enctype="multipart/form-data" disabled>
                        @csrf
                        @method('PUT')

                    <div class="form-group">
                        <label>Nama Produk</label>
                        <input type="text" class="form-control" name="nama_produk" value="{{ $produk->nama_produk }}" class="form-control" disabled>
                    </div>

                    <div class="form-group">
                        <label>Harga</label>
                        <input type="text" class="form-control" name="harga" value="{{ $produk->harga }}" class="form-control" disabled>
                    </div>

                    <div class="form-group">
                        <label>Stok</label>
                        <input type="text" class="form-control" name="stok" value="{{ $produk->stok }}" class="form-control" disabled>
                    </div>

                    <div class="form-group">
                        <label>Id Kategori</label>
                        <input type="text" class="form-control" name="id_kategori" value="{{ $produk->id_kategori }}" class="form-control" disabled>
                    </div>

                    <label for="">Cover</label><br>
                    <td>
                        <img src="{{ asset('/images/produk/' . $produk->cover) }}" width="100">
                    </td>

                    </div>
                    <a href="{{ route('produk.index') }}" class="btn btn-primary">Back</a>
                    </form>
                </div>
        </div>
    </div>
</div>
@endsection
