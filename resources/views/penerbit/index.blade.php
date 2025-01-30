@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header" style="height: 80px"><h1>Penerbit</h1></div>

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
      <th scope="col">Id</th> 
      <th scope="col">Nama Penerbit</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @php $no = 1; @endphp
    @foreach($penerbit as $data)
    <tr>
      <th scope="row">{{ $no++}}</th>
      <td>{{$data->nama_penerbit}}</td>
      <td>
        <form action="{{ route('penerbit.destroy',$data->id) }}" method="post">
          @csrf
          @method('DELETE')
        <a href="{{ route('penerbit.edit',$data->id) }}" class="btn btn-success">Ubah</a>
        <a href="{{ route('penerbit.show',$data->id) }}" class="btn btn-warning">Lihat</a>
        <button type="submit" class="btn btn-danger" onclick="return confrim('Apakah Anda Yakin?')">Hapus</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
        </table>
        <a href="{{ route('penerbit.create') }}" class="btn btn-primary">Tambah</a>
            </div>
        </div>
    </div>
</div>
@endsection
