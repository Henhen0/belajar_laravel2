@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Produk</div>

                <div class="card-body">
                    <form action="{{ route('produk.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                    <div class="form-group">
                        <label>Nama Produk</label>
                        <input type="text" class="form-control" name="nama_produk">
                    </div>

                    <div class="form-group">
                        <label>Harga</label>
                        <input type="text" class="form-control" name="harga">
                    </div>

                    <div class="form-group">
                        <label>Stok</label>
                        <input type="text" class="form-control" name="stok">
                    </div>

                    <div class="form-group">
                        <label>Cover</label>
                        <input type="file" class="form-control" name="cover" required>
                    </div>

                    <div class="form-group">
                        <label>Id Kategori</label>
                        <select name="id_kategori" class="form-control" required>
                         @foreach ( $kategori as $data)
                            <option value="{{ $data->id }}">{{ $data->nama_kategori }}</option>
                        @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
        </div>
    </div>
</div>
@endsection
