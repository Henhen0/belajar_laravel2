@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data</div>

                <div class="card-body">
                    <form action="{{ route('telepon.update', $telepon->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                    <div class="form-group">
                        <label>Nomor</label>
                        <input type="text" class="form-control" name="nomor" value="{{ $telepon->nomor }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Id Pengguna</label>
                        <select class="form-control" name="id_pengguna">
                            @foreach($pengguna as $data)
                            <option value="{{ $data->id }}" {{ $data->id == $telepon->id_pengguna ? 'selected' :'' }}>{{ $data->nama }}</option>
                            @endforeach
                        </select>
                    </div>

                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
        </div>
    </div>
</div>
@endsection
