@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Pembeli</div>

                <div class="card-body">
                    <form action="{{ route('pembeli.update', $pembeli->id) }}" method="post" enctype="multipart/form-data" disabled>
                        @csrf
                        @method('PUT')

                    <div class="form-group">
                        <label>Nama Pembeli</label>
                        <input type="text" class="form-control" name="nama_pembeli" value="{{ $pembeli->nama_pembeli }}" class="form-control" disabled>
                    </div>

                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <input type="text" class="form-control" name="jenis_kelamin" value="{{ $pembeli->jenis_kelamin }}" class="form-control" disabled>
                    </div>

                    <div class="form-group">
                        <label>Telepon</label>
                        <input type="text" class="form-control" name="telepon" value="{{ $pembeli->telepon }}" class="form-control" disabled>
                    </div>


                    </div>
                    <a href="{{ route('pembeli.index') }}" class="btn btn-primary">Back</a>
                    </form>
                </div>
        </div>
    </div>
</div>
@endsection
