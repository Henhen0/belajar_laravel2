@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Pembeli</div>

                <div class="card-body">
                    <form action="{{ route('pembeli.update', $pembeli->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                    <div class="form-group">
                        <label>Nama Pembeli</label>
                        <input type="text" class="form-control" name="nama_pembeli" value="{{ $pembeli->nama_pembeli }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Jenis Kelamin</label><br>
                        <input type="radio" class="form-check-input" name="jenis_kelamin" required value="Laki-laki">Laki-Laki 
                        <input type="radio" class="form-check-input" name="jenis_kelamin" required value="Perempuan">Perempuan 
                    </div>

                    <div class="form-group">
                        <label>Telepon</label>
                        <input type="text" class="form-control" name="telepon" value="{{ $pembeli->telepon }}" class="form-control">
                    </div>


                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
        </div>
    </div>
</div>
@endsection
