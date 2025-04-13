@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Genre</div>

                <div class="card-body">
                    <form action="{{ route('genre.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                    <div class="form-group">
                        <label>Nama Genre</label>
                        <input type="text" class="form-control" name="nama_genre" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
        </div>
    </div>
</div>
@endsection
