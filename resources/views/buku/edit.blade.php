@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Data Buku</div>

                    <div class="card-body">
                        <form action="{{ route('buku.update', $buku->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label>Nama Buku</label>
                                <input type="text" class="form-control" name="nama_buku" value="{{ $buku->nama_buku }}"
                                    required>
                            </div>

                            <div class="form-group">
                                <label>Harga</label>
                                <input type="text" class="form-control" name="harga" value="{{ $buku->harga }}"
                                    required>
                            </div>

                            <div class="form-group">
                                <label>Stok</label>
                                <input type="text" class="form-control" name="stok" value="{{ $buku->stok }}"
                                    required>
                            </div>

                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" class="form-control" name="image" value="{{ $buku->image }}" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Nama Penerbit</label>
                                <select type="text" class="form-control" name="id_penerbit" required>
                                    <option value="{{ $penerbit->id }}">{{ $penerbit->nama_penerbit }}</option>
                                    @foreach ($allpenerbit as $data)
                                        <option value="{{ $data->id }}">{{ $data->nama_penerbit }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Tanggal Terbit</label>
                                <input type="date" class="form-control" name="tanggal_terbit"
                                    value="{{ $buku->tanggal_terbit }}" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Nama Genre</label>
                                <select type="text" class="form-control" name="id_genre" required>
                                    <option value="{{ $genre->id }}">{{ $genre->nama_genre }}</option>
                                    @foreach ($allgenre as $data)
                                        <option value="{{ $data->id }}">{{ $data->nama_genre }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Edit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
