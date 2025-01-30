@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Penerbit</div>

                <div class="card-body">
                    <form action="{{ route('penerbit.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                    <div class="form-group">
                        <label>Nama Penerbit</label>
                        <input type="text" class="form-control" name="nama_penerbit" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
        </div>
    </div>
</div>
@endsection
