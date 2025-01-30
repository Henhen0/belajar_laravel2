@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Transaksi</div>

                <div class="card-body">
                    <form action="{{ route('transaksi.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                    <div class="form-group">
                        <label>Jumlah</label>
                        <input type="number" class="form-control" name="jumlah" required>
                    </div>

                    <div class="form-group">
                        <label>Tanggal Transaksi</label>
                        <input type="date" class="form-control" name="tanggal_transaksi" required>
                    </div>

                    <div class="form-group">
                        <label>Nama Buku</label>
                        <select type="text" class="form-control" name="id_buku">
                        @foreach ( $buku as $data)
                            <option value="{{ $data->id }}">{{ $data->nama_buku }}</option>
                        @endforeach
                        </select>    
                    </div>

                    <div class="form-group">
                        <label>Nama Pembeli</label>
                        <select type="text" class="form-control" name="id_pembeli">
                        @foreach ( $pembeli as $data)
                            <option value="{{ $data->id }}">{{ $data->nama_pembeli }}</option>
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
