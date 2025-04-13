@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Buku</div>

                <div class="card-body">
                    <form action="{{ route('buku.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach (@errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="form-group">
                        <label>Nama Buku</label>
                        <input type="text" class="form-control" name="nama_buku" required>
                    </div>

                    <div class="form-group">
                        <label>Harga</label>
                        <input type="text" class="form-control" name="harga" required>
                    </div>

                    <div class="form-group">
                        <label>Stok</label>
                        <input type="number" class="form-control" name="stok" required>
                    </div>

                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" class="form-control" name="image" required>
                    </div>

                    <div class="form-group">
                        <label>Nama Penerbit</label>
                        <select type="text" class="form-control" name="id_penerbit">
                        @foreach ( $penerbit as $data)
                            <option value="{{ $data->id }}">{{ $data->nama_penerbit }}</option>
                        @endforeach
                        </select>    
                    </div>

                    <div class="form-group">
                        <label>Tanggal Terbit</label>
                        <input type="date" class="form-control" name="tanggal_terbit" required>
                    </div>

                    <div class="form-group">
                        <label>Nama Genre</label>
                        <select type="text" class="form-control" name="id_genre" required>
                        @foreach ( $genre as $data)
                            <option value="{{ $data->id }}">{{ $data->nama_genre }}</option>
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
