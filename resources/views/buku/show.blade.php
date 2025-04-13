@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Buku</div>

                <div class="card-body">
                    <div class="form-group">
                        <label>Nama Buku</label>
                        <input type="text" class="form-control" name="nama_buku" value="{{ $buku->nama_buku }}" disabled>
                    </div>

                    <div class="form-group">
                        <label>Harga</label>
                        <input type="text" class="form-control" name="harga" value="{{ $buku->harga }}" disabled>
                    </div>

                    <div class="form-group">
                        <label>Stok</label>
                        <input type="number" class="form-control" name="stok" value="{{ $buku->stok }}" disabled>
                    </div>

                    <div class="form-group">
                        <label>Image</label><br>
                        <img src="{{ asset('/images/buku/' . $buku->image) }}" width="100">
                    </div>

                    <div class="form-group">
                        <label>Nama Penerbit</label>
                        <input type="text" class="form-control" value="{{ $buku->penerbit->nama_penerbit ?? 'Tidak Diketahui' }}" disabled>
                    </div>

                    <div class="form-group">
                        <label>Tanggal Terbit</label>
                        <input type="date" class="form-control" name="tanggal_terbit" value="{{ $buku->tanggal_terbit }}" disabled>
                    </div>

                    <div class="form-group">
                        <label>Nama Genre</label>
                        <input type="text" class="form-control" value="{{ $buku->genre->nama_genre ?? 'Tidak Diketahui' }}" disabled>
                    </div>

                    <a href="{{ route('buku.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
