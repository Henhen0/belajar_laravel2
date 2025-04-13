@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Kategori</div>

                <div class="card-body">
                    <form action="{{ route('telepon.update', $kategori->id) }}" method="post" enctype="multipart/form-data" disabled>
                        @csrf
                        @method('PUT')

                    <div class="form-group">
                        <label>Nama kategori</label>
                        <input type="text" class="form-control" name="nomor_kategori" value="{{ $kategori->nama_kategori }}" class="form-control" disabled>
                    </div>

                    </div>
                    <a href="{{ route('kategori.index') }}" class="btn btn-primary">Back</a>
                    </form>
                </div>
        </div>
    </div>
</div>
@endsection
