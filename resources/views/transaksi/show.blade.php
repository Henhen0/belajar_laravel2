@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Transaksi</div>

                <div class="card-body">
                    <form action="{{ route('transaksi.update', $transaksi->id) }}" method="post" enctype="multipart/form-data" disabled>
                        @csrf
                        @method('PUT')

                    <div class="form-group">
                        <label>Jumlah</label>
                        <input type="number" class="form-control" name="jumlah" value="{{ $transaksi->jumlah }}" disabled>
                    </div>

                    <div class="form-group">
                        <label>Tanggal Transaksi</label>
                        <input type="date" class="form-control" name="tanggal_transaksi" value="{{ $transaksi->tanggal_transaksi }}" disabled>
                    </div>

                    <div class="form-group">
                        <label>Nama Buku</label>
                        <select type="text" class="form-control" name="id_buku" disabled>
                            <option value="{{ $transaksi->buku->id }}" selected>{{ $transaksi->buku->nama_buku }}</option>
                        </select>    
                    </div>

                    <div class="form-group">
                        <label>Nama pembeli</label>
                        <select type="text" class="form-control" name="id_pembeli" disabled>
                            <option value="{{ $transaksi->pembeli->id }}" selected>{{ $transaksi->pembeli->nama_pembeli }}</option>
                        </select>    
                    </div>

                    </div>
                    <a href="{{ route('transaksi.index') }}" class="btn btn-primary">Back</a>
                    </form>
                </div>
        </div>
    </div>
</div>
@endsection
