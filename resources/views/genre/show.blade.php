@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Genre</div>

                <div class="card-body">
                    <form action="{{ route('genre.update', $genre->id) }}" method="post" enctype="multipart/form-data" disabled>
                        @csrf
                        @method('PUT')

                    <div class="form-group">
                        <label>Nama Genre</label>
                        <input type="text" class="form-control" name="nama_genre" value="{{ $genre->nama_genre }}" class="form-control" disabled>
                    </div>

                    </div>
                    <a href="{{ route('genre.index') }}" class="btn btn-primary">Back</a>
                    </form>
                </div>
        </div>
    </div>
</div>
@endsection
