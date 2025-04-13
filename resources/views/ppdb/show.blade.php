@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Siswa</div>

                <div class="card-body">
                    <form action="{{ route('ppdb.update', $ppdb->id) }}" method="post" enctype="multipart/form-data" disabled>
                        @csrf
                        @method('PUT')
                    <div class="form-group">
                        <label>Nama_Lengkap</label>
                        <input type="text" class="form-control" name="nama_lengkap" value="{{ $ppdb->nama_lengkap }}" class="form-control" disabled>
                    </div>

                    <div class="form-group">
                        <label>Jenis Kelamin</label><br>
                        <input type="radio" class="form-check-input" name="jk" value="Laki-laki" {{ $ppdb->jk == 'Laki-laki' ? 'checked' : '' }} disabled>Laki-laki
                        <input type="radio" class="form-check-input" name="jk" value="Perempuan" {{ $ppdb->jk == 'Perempuan' ? 'checked' : '' }} disabled>Perempuan
                    </div>

                    <div class="form-group">
                        <label>Agama</label>
                        <select class="form-control" name="agama" disabled>
                            <option value="ISLAM">ISLAM</option>
                            <option value="KRISTEN">KRISTEN</option>
                            <option value="BUDHA">BUDHA</option>
                            <option value="HINDU">HINDU</option>
                            <option value="TIDAK ADA">TIDAK ADA</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" name="alamat" value="{{ $ppdb->alamat }}" class="form-control" disabled>
                    </div>

                    <div class="form-group">
                        <label>Telepon</label>
                        <input type="number" class="form-control" name="telepon" value="{{ $ppdb->telepon }}" class="form-control" disabled>
                    </div>

                    <div class="form-group">
                        <label>Asal Sekolah</label>
                        <input type="text" class="form-control" name="asal_sekolah" value="{{ $ppdb->asal_sekolah }}" class="form-control" disabled>
                    </div>

                    <a href="{{ route('ppdb.index') }}" class="btn btn-primary">Back</a>
                    </form>
                </div>
        </div>
    </div>
</div>
@endsection
