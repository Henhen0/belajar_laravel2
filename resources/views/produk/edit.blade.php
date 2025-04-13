@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Produk</div>

                <div class="card-body">
                    <form action="{{ route('produk.update', $produk->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                    <div class="form-group">
                        <label>Nama Produk</label>
                        <input type="text" class="form-control" name="nama_produk" value="{{ $produk->nama_produk }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Harga</label>
                        <input type="text" class="form-control" name="harga" value="{{ $produk->harga }}">
                    </div>

                    <div class="form-group">
                        <label>Stok</label>
                        <input type="text" class="form-control" name="stok" value="{{ $produk->stok }}">
                    </div>

                    <div class="form-group">
                        <label>Cover</label>
                        <input type="file" class="form-control" name="cover" value="{{ $produk->cover }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Id Kategori</label>
                        <select name="id_kategori" class="form-control" required>
                         @foreach ( $kategori as $data)
                            <option value="{{ $data->id }}" {{ $data->id == $produk->id_kategori ? 'selected' : '' }}>{{ $data->nama_kategori }}</option>
                        @endforeach
                        </select>
                    </div>


                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
        </div>
    </div>
</div>
@endsection
