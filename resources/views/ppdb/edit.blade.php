@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Siswa</div>

                <div class="card-body">
                    <form action="{{ route('ppdb.update', $ppdb->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                    
                        <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama_lengkap " value="{{ $ppdb->nama_lengkap }}" required>
                    </div>

                    <div class="form-group">
                        <label>Jenis Kelamin</label><br>
                        <input type="radio" class="form-check-input" name="jk" value="Laki-laki">Laki-laki
                        <input type="radio" class="form-check-input" name="jk" value="Perempuan ">Perempuan
                    </div>

                    <div class="form-group">
                        <label>Agama</label>
                        <select class="form-control" name="agama">
                            <option value="ISLAM">ISLAM</option>
                            <option value="KRISTEN">KRISTEN</option>
                            <option value="BUDHA">BUDHA</option>
                            <option value="HINDU">HINDU</option>
                            <option value="TIDAK ADA">TIDAK ADA</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea class="form-control" name="alamat" value="{{ $ppdb->alamat }}"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Telepon</label>
                        <input type="number" class="form-control" name="telepon" class="form-control" value="{{ $ppdb->telepon }}">
                    </div>

                    <div class="form-group">
                        <label>Asal Sekolah</label>
                        <input type="text" class="form-control" name="asal_sekolah" class="form-control" value="{{ $ppdb->asal_sekolah }}">
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
        </div>
    </div>
</div>
@endsection
