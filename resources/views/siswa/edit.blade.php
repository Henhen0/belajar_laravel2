@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Siswa</div>

                <div class="card-body">
                    <form action="{{ route('siswa.update', $siswa->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                    <div class="form-group">
                        <label>NIS</label>
                        <input type="number" class="form-control" name="nis" value="{{ $siswa->nis }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama" value="{{ $siswa->nama }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Jenis Kelamin</label><br>
                        <input type="radio" class="form-check-input" name="jk" value="Laki-laki">Laki-laki
                        <input type="radio" class="form-check-input" name="jk" value="Perempuan">Perempuan
                    </div>
                    <div class="form-group">
                        <label>Kelas</label>
                        <select class="form-control" name="kelas">
                            <option value="XI RPL 1">XI RPL 1</option>
                            <option value="XI RPL 2">XI RPL 2</option>
                            <option value="XI RPL 3">XI RPL 3</option>
                        </select>

                    <div class="form-group">
                        <label>Cover</label>
                        <input type="file" class="form-control" name="cover" value="{{ $siswa->cover }}" class="form-control">
                    </div>

                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
        </div>
    </div>
</div>
@endsection
