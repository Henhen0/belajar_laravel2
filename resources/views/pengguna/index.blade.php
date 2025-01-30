@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" >
        <div class="col-md-8" >
            <div class="card>
              <div class="card-header bg-success">Data</div>

                <div class="card-body">
                  
                  @if (session('success'))
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                  {{ session('success') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                @endif

        <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @php $no = 1; @endphp
    @foreach($pengguna as $data)
    <tr>
      <th scope="row">{{ $no++}}</th>
      <td>{{$data->nama}}</td>
      <td>
        <form action="{{ route('pengguna.destroy',$data->id) }}" method="post">
          @csrf
          @method('DELETE')
        <a href="{{ route('pengguna.edit',$data->id) }}" class="btn btn-success">Edit</a>
        <a href="{{ route('pengguna.show',$data->id) }}" class="btn btn-warning">Show</a>
        <button type="submit" class="btn btn-danger" onclick="return confrim('Apakah Anda Yakin?')">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
        </table>
        <a href="{{ route('pengguna.create') }}" class="btn btn-primary">Add</a>
        <a href="{{ route('telepon.index') }}" class="btn btn-secondary">Go To Telepon</a>
            </div>
        </div>
    </div>
</div>
@endsection
