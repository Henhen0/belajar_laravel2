@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header">Data Siswa</div>

                <div class="card-body">
                  
                  @if (session('success'))
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                  {{ session('success') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                @endif

          <a href="{{ route('ppdb.create') }}" class="btn btn-primary">Add</a>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama_Lengkap</th>
      <th scope="col">Jenis_Kelamin</th>
      <th scope="col">Agama</th>
      <th scope="col">Alamat</th>
      <th scope="col">Telepon</th>
      <th scope="col">Asal_Sekolah</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @php $no = 1; @endphp
    @foreach($ppdb as $data_ppdb)
    <tr>
      <th scope="row">{{ $no++}}</th>
      <td>{{$data_ppdb->nama_lengkap}}</td>
      <td>{{$data_ppdb->jk}}</td>
      <td>{{$data_ppdb->agama}}</td>
      <td>{{$data_ppdb->alamat}}</td>
      <td>{{$data_ppdb->telepon}}</td>
      <td>{{$data_ppdb->asal_sekolah}}</td>

      <td>
        <form action="{{ route('ppdb.destroy',$data_ppdb->id) }}" method="post">
          @csrf
          @method('DELETE')
        <a href="{{ route('ppdb.edit',$data_ppdb->id) }}" class="btn btn-success">Edit</a>
        <a href="{{ route('ppdb.show',$data_ppdb->id) }}" class="btn btn-warning">Show</a>
        <button type="submit" class="btn btn-danger" onclick="return confrim('Apakah Anda Yakin?')">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
        </table>
            </div>
        </div>
    </div>
</div>
@endsection
