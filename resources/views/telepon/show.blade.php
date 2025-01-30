@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Data</div>

                <div class="card-body">
                    <form action="{{ route('telepon.update', $telepon->id) }}" method="post" enctype="multipart/form-data" disabled>
                        @csrf
                        @method('PUT')

                    <div class="form-group">
                        <label>Nomor Telepon</label>
                        <input type="text" class="form-control" name="nomor_telepon" value="{{ $telepon->nomor }}" class="form-control" disabled>
                    </div>

                    <div class="form-group">
                        <label>Id Pengguna</label>
                        <input type="text" class="form-control" name="id_pengguna" value="{{ $telepon->penggunas->nama }}" class="form-control" disabled>
                    </div>

                    </div>
                    <a href="{{ route('telepon.index') }}" class="btn btn-primary">Back</a>
                    </form>
                </div>
        </div>
    </div>
</div>
@endsection
